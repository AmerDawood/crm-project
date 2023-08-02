<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\JobController;
use App\Http\Controllers\dashboard\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('admin/dashboard',[DashboardController::class,'index'])->name('dashboard.index')->middleware('auth');



Route::resource('contacts',ContactController::class);
Route::resource('jobs',JobController::class);

// Auth


Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class,'register']);
Route::get('/login', [LoginController::class,'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login']);


Route::post('/logout',[LoginController::class,'logout'])->name('logout');
