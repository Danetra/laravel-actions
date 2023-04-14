<?php

use App\Models\User;
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
    UpdatePassword::run(User::find(1), 'password');
    return view('welcome');
});

Route::get('user/profile', "UserController@showProfile");
Route::post('user/profile', "UserController@updateProfile")->name('update.profile');
// Route::post('user/profile', "UserController@updateProfile")->name('update.profile');
