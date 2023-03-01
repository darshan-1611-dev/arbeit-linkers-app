<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// login 
Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, "login"]);
Route::post('/loginStore', [\App\Http\Controllers\Auth\AuthController::class, "loginStore"]);

// register
Route::get('/register', [\App\Http\Controllers\Auth\AuthController::class, "register"]);
Route::post('/registerStore', [\App\Http\Controllers\Auth\AuthController::class, "registerStore"]);
