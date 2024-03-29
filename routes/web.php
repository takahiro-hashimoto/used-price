<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchesController;
use App\Http\Controllers\PatternsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('index'); })->name('home');

Route::get('/watch/', [PatternsController::class, 'index'])->name('watch');

Route::get('/watch/{product_id}', [PatternsController::class, 'detail'])->name('item');

Route::get('/scrape', 'App\Http\Controllers\ScraperController@scrape');