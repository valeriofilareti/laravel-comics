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
    return view('home');
}) -> name('home');

Route::get('/cards', function () {
    $comics = config('comics');
    return view('cards', compact('comics'));
}) -> name('cards');

Route::get('/comic-details/{slug}', function ($slug) {
    $comics = config('comics');
    $comic_get = array_filter($comics, fn($comic) => $comic['slug'] === $slug);
    $comic = $comic_get[array_key_first($comic_get)];
    return view('details', compact('comic'));
}) -> name('details');

