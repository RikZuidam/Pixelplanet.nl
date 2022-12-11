<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\FriendController;
use App\Models\Friend;
use App\Models\Player;

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
    $datas = Friend::where([
        ['sender_player', 1],
        ['status', 1]
    ])->orWhere([
        ['reciever_player', 1],
        ['status', 1]
    ])->get();

    $friendsinfo = [];

    foreach ($datas as $data) {
        if ($data->sender_id != 1) {
            $friendsinfo[] = Player::where('id', $data->sender_player)->get();
        } elseif ($data->reciever_id != 1) {
            $friendsinfo[] = Player::where('id', $data->reciever_player)->get();
        }
    }

    return view('home')->with([
        'friends' => $friendsinfo
    ]);
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