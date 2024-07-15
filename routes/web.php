<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::view('userform', 'user');
Route::view('dashboard', 'dashboard1');
Route::get('logout', [LoginController::class, 'logout']);

Route::post('processform', [LoginController::class, 'login']);