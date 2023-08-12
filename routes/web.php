<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\dashboard\CityController;
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
Route::get('/home', function () {
    return redirect()->route('dashboard.index');
});



Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


Route::middleware('user')->group(function () {
    Route::resource('contacts', ContactController::class);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::middleware('admin')->group(function () {
    Route::resource('jobs', JobController::class);
    Route::resource('cities', CityController::class);
    Route::get('users', [AdminController::class, 'index'])->name('users.index');
    Route::put('/users/{userId}/update-type', [AdminController::class, 'updateUserType'])->name('users.updateType');

});




// Auth


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
