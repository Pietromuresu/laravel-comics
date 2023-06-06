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

    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');


Route::get('/about-us', function () {

    return view('about');
})->name('about');


Route::get('/contacts', function () {

    return view('contacts');
})->name('contacts');


Route::get('/FAQs', function () {

    return view('FAQ');
})->name('FAQ');


Route::get('/catalogue', function () {
    $comics = config('comics');
    return view('catalogue', compact('comics'));
})->name('catalogue');


Route::get('/product-details/{slug}', function ($slug) {
    $comics = config('comics');
    $product_array = array_filter($comics, fn($item) => $item['slug'] === $slug);
    $product = $product_array[array_key_first($product_array)];
    return view('layout.product_details', compact('product'));
})->name('product_details');
