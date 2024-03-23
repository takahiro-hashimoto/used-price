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
    
    public function detail($id)
    {
        
        $pattern = Pattern::findOrFail($id);
        $shops = $pattern->shops()->withPivot('price')->get();
        $watches = $pattern->watches()->first();
        

        return view('watch.detail', compact('pattern', 'watches', 'shops'));
    }
}