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

// get user detail
Route::get('/user-detail/introduction', [\App\Http\Controllers\Auth\AuthController::class, "introduction"]);

Route::get('/user-detail/title', [\App\Http\Controllers\Auth\AuthController::class, "title"]);
Route::post('/user-detail/title/store', [\App\Http\Controllers\Auth\AuthController::class, "titleStore"]);

Route::get('/user-detail/work_experience', [\App\Http\Controllers\Auth\AuthController::class, "workExperience"]);
Route::post('/user-detail/work_experience/store', [\App\Http\Controllers\Auth\AuthController::class, "workExperienceStore"]);

Route::get('/user-detail/education', [\App\Http\Controllers\Auth\AuthController::class, "education"]);
Route::post('/user-detail/education/store', [\App\Http\Controllers\Auth\AuthController::class, "educationStore"]);

Route::get('/user-detail/languages', [\App\Http\Controllers\Auth\AuthController::class, "languages"]);
Route::post('/user-detail/languages/store', [\App\Http\Controllers\Auth\AuthController::class, "languagesStore"]);

Route::get('/user-detail/skills', [\App\Http\Controllers\Auth\AuthController::class, "skills"]);
Route::post('/user-detail/skills/store', [\App\Http\Controllers\Auth\AuthController::class, "skillsStore"]);

Route::get('/user-detail/rate', [\App\Http\Controllers\Auth\AuthController::class, "rate"]);
Route::post('/user-detail/rate/store', [\App\Http\Controllers\Auth\AuthController::class, "rateStore"]);

Route::get('/user-detail/final_overview', [\App\Http\Controllers\Auth\AuthController::class, "finalOverview"]);
Route::post('/user-detail/final_overview/store', [\App\Http\Controllers\Auth\AuthController::class, "finalOverviewStore"]);

// log out
Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, "logOut"]);

