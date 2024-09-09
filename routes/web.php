<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home', [
        'title' => 'Home',
    ]);
})->name('home');

Route::get('/contact', function () {
    return view('main.contact', [
        'title' => 'contact',
    ]);
})->name('contact');

Route::get('/pricing', function () {
    return view('main.pricing', [
        'title' => 'pricing',
    ]);
})->name('pricing');

// loader
Route::get('/loader', function () {
    return view('partials.loader', [
        'title' => 'loader',
    ]);
})->name('loader');
