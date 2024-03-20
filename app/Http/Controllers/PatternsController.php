<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pattern;
use App\Models\Watch;
use App\Models\Shop;


class PatternsController extends Controller
{
    public function detail($id)
    {
        
        $pattern = Pattern::findOrFail($id);
        $watch = $pattern->watches()->get();

        return view('watch.detail', compact('pattern', 'watch'));
    }
}