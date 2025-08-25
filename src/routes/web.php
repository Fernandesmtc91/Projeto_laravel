<?php

use Illuminate\Support\Facades\Route;

Route::get('/hl', function () {
    return view('hellowordl');
});
Route::get('/', function () {
    return view('welcome');
});
