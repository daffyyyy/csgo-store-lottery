<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\Auth\SteamLoginController;
use kanalumaddela\LaravelSteamLogin\Facades\SteamLogin;


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

SteamLogin::routes([
    'controller' => SteamLoginController::class,
]);

Route::get('/', function () {
    return view('index');
})->name('home');

Route::group(['middleware' => ['guest']], function () {
    Route::get('login', function () {
        return view('login.index');
    })->name('login');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'user'], function () {
    Route::delete('delete/{user}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('settings', function () {
        return view('user.settings');
    })->name('user.settings');
    Route::get('points-info', function () {
        return view('user.points-info');
    })->name('user.points-info');
    Route::get('awards', [UserController::class, 'userRedeem'])->name('user.redeem');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('awards', AwardsController::class);
    Route::get('awards/redeem/{awards}', [AwardsController::class, 'redeem'])->name('awards.redeem');
});

Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', function () {
        return view('login.index');
    })->name('login');
});
