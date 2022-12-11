<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\FriendController;
use App\Models\Friend;

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
    return view('home');
})->middleware('auth');

Route::post('/test', [FriendController::class, 'index']);

Route::get('register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

Route::post('register', [AuthenticateController::class, 'register']);

Route::get('login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('login', [AuthenticateController::class, 'login']);

Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');