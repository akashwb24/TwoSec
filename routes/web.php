<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::view('userform', 'user');
Route::view('dashboard1', 'dashboard1')->middleware('checkLogin');
Route::view('dashboard2', 'dashboard2')->middleware('checkLogin');
Route::get('logout', [LoginController::class, 'logout']);

Route::post('processform', [LoginController::class, 'login']);