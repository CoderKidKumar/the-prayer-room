<?php

use App\Http\Controllers\Auth\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrayerController;
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
//Get main index page
Route::get('/', function () {
    return view('index');
});
//Get the index for the app home screen
Route::get('/home', [PrayerController::class, 'index'])->name('app_home');

//Web route for creating a new user- named register
Route::post('/auth/account/register', [AccountController::class, 'registerAccount']) ->name('register');
//Get register page -if registration failed
Route::get('/account/register', function () {
    return view('user.register');
});

//Web route for signing in user- named login
Route::post('/auth/account/login', [AccountController::class, 'loginAccount']) ->name('login');
//Get login page -if login failed
Route::get('/account/login', function () {
    return view('user.login');
});