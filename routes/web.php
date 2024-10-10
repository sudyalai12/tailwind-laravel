<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product'); 
});

Route::get('/model', function () {
    return view('model'); 
});