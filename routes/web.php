<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\BangunanlainController;

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
Route::get('/', [HomeController::class, 'frontend']);
Route::get('/kontak', [KontakController::class, 'frontend']);


Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin-area'], function () {
        Route::get('/', [HomeController::class, 'backend']);
    });
});

Route::get('/home', [HomeController::class, 'frontend'])->name('home');
Route::get('/perumahan/{id}', [PerumahanController::class, 'frontend'])->name('home');
Route::get('/rumah/{id}', [RumahController::class, 'frontend'])->name('home');
Route::get('/lainnya/{id}', [BangunanlainController::class, 'frontend'])->name('home');
