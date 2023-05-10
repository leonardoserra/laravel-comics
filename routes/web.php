<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'categories' => config('header'),
        'comics' => config('comic_old'),
        'items' => config('banner_bonus'),
        'footer_categories' => config('footer'),
        'icons' => config('banner_bottom'),

    ];
    // $categories = config('header');
    // dd($data['categories']);
    return view('home',$data);
})->name('home');
