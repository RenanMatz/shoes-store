<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estoque/{color?}', [StoreController::class, 'index']);
