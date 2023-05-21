<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Groups;

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
Route::get('/About', function () {
    return view('about');
});
Route::get('/Fashion', function () {
    return view('fashion');
});
Route::get('/Post', function () {
    return view('post');
});
Route::get('/Blog-Post', function () {
    return view('about');
});


//route controller utnuk auth
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/Sign-Up', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/Sign-Up', [AuthController::class, 'register'])->name('register.submit');


