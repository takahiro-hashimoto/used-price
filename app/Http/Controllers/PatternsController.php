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
        
        // // Watch モデルから $watchId に合致するパターンを取得
        $patterns = $watch::find($watch_id)->patterns;
        
        // 取得したパターンIDに合致するshopとprice情報を取得する
        $patternShops = [];
        foreach ($patterns as $pattern) {
            $price = $pattern->shops()->withPivot('price')->get();
            $patternShops[] = [$price];
            //$patternShops = $price;
        }
        
        return view('watch.detail', compact('watch', 'patternShops'));
    }
}