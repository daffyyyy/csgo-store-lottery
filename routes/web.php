<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
    Route::delete('delete', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('settings', function () {
        return view('user.settings');
    })->name('user.settings');
    Route::get('points-info', function () {
        return view('user.points-info');
    })->name('user.points-info');
    Route::get('awards', [UserController::class, 'awards'])->name('user.awards');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('awards', AwardsController::class);
    Route::get('awards/redeem/{awards}', [AwardsController::class, 'redeem'])->name('awards.redeem');
});

Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('awards', [AdminController::class, 'awards'])->name('awards');
    Route::get('awards/edit/{awards}', [AdminController::class, 'edit'])->name('awards.edit');
    Route::get('awards/add/', [AdminController::class, 'add'])->name('awards.add');
    Route::post('awards/update/{awards}', [AdminController::class, 'update'])->name('awards.update');
    Route::put('awards/create/', [AdminController::class, 'create'])->name('awards.create');
    Route::delete('awards/delete/{awards}', [AdminController::class, 'destroy'])->name('awards.destroy');
});
