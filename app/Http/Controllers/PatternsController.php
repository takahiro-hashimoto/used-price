<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pattern;
use App\Models\Watch;
use App\Models\Shop;

class PatternsController extends Controller
{
    public function index()
    {
        $patterns = Watch::all();
        return view('watch.index', ['patterns' => $patterns]);
    }
    
    public function detail($watch_id)
    
    {
        // 受け取った引数と同じモデルのwatch情報を取得する
        $watch = Watch::find($watch_id);
        
        // Watchモデルから$watchIdに合致するパターンを取得
        $patterns = $watch::find($watch_id)->patterns;
        
        $patternShops = [];
        foreach ($patterns as $pattern) {
            $prices = $pattern->shops()->withPivot('price')->get();
    
            // 金額が0円（在庫なし）のデータを格納
            $zeroPrices = $prices->filter(function ($item) {
                return $item->pivot->price == 0;
            });
            
            // 金額が0円（在庫なし）でないデータを格納
            $nonZeroPrices = $prices->reject(function ($item) {
                return $item->pivot->price == 0;
            })->sortBy('pivot.price');

            // 0円は最後に来るようにして配列をマージする
            $sortedPrices = $nonZeroPrices->merge($zeroPrices);
            $patternShops[] = $sortedPrices;
        }
        
        return view('watch.detail', compact('watch', 'patternShops', 'patterns'));
    }
}