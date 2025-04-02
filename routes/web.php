<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
