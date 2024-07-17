<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/home1', function () {
    echo "<center><h1>Welcome to HOME 1</h1></center>";
})->middleware("testSessions");
Route::get('/home2', function () {
    echo "<center><h1>Welcome to HOME 2</h1></center>";
})->middleware("testSessions");
Route::get('/', function () {
    echo "<center><h1>Welcome to Web Portal</h1></center>";

    if (session()->has("uid"))
        echo session()->get("uid");

    if (session()->has("uname"))
        echo session()->get("uname");
});

Route::get("setuid/{id}", function ($id) {
    session()->put("uid", $id);
    return redirect("/");
});
Route::get("setuname/{name}", function ($name) {
    session()->put("uname", $name);
    return redirect("/");
});

Route::get("logout", function () {
    session()->forget("uid");
    session()->forget("uname");
    return redirect("/");

});

Route::get("invalid", function () {
    echo "Invalid request ";
});

// Route::view('userform', 'user');
// Route::view('dashboard1', 'dashboard1')->middleware('checkLogin');
// Route::view('dashboard2', 'dashboard2')->middleware('checkLogin');
// Route::get('logout', [LoginController::class, 'logout']);

// Route::post('processform', [LoginController::class, 'login']);