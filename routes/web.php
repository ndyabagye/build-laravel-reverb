<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/users', 'users');
Route::view('/counter', 'count');

require __DIR__.'/auth.php';
