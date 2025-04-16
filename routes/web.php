<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/navbar', function () {
    return view('navbar'); // tampilkan view navbar.blade.php
});
=======
Route::get('/home', function () {
    return view('home');
});
>>>>>>> 833a1fff392f1df4fb445636adc1a4fef52ff3ca
