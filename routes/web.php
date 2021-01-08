<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\BangunanlainController;
use App\Http\Controllers\MotoController;

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

Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin-area'], function () {
        Route::get('/', [HomeController::class,'backend']);
        Route::get('/home', [HomeController::class,'backend']);
        Route::patch('/gantisandi', [PenggunaController::class, 'ganti_sandi'])->name('gantisandi');

        Route::prefix('perumahan')->group(function () {
            Route::get('/', [PerumahanController::class, 'backend'])->name('perumahan');
            Route::get('/tambah', [PerumahanController::class, 'tambah'])->name('perumahan.tambah');
            Route::get('/edit', [PerumahanController::class, 'edit'])->name('perumahan.edit');
            Route::post('/simpan', [PerumahanController::class, 'simpan'])->name('perumahan.simpan');
            Route::delete('/hapus', [PerumahanController::class, 'hapus']);
            Route::view('/gambar', 'backend.pages.perumahan.gambar', ['id' => date('Hisu'), 'sumber' => null]);
        });

        Route::prefix('slider')->group(function () {
            Route::get('/', [SliderController::class, 'backend'])->name('slider');
            Route::get('/tambah', [SliderController::class, 'tambah'])->name('slider.tambah');
            Route::post('/simpan', [SliderController::class, 'simpan'])->name('slider.simpan');
            Route::delete('/hapus', [SliderController::class, 'hapus']);
        });

        Route::prefix('partner')->group(function () {
            Route::get('/', [PartnerController::class, 'backend'])->name('partner');
            Route::get('/tambah', [PartnerController::class, 'tambah'])->name('partner.tambah');
            Route::post('/simpan', [PartnerController::class, 'simpan'])->name('partner.simpan');
            Route::delete('/hapus', [PartnerController::class, 'hapus']);
        });

        Route::prefix('rumah')->group(function () {
            Route::get('/', [RumahController::class, 'backend'])->name('rumah');
            Route::get('/tambah', [RumahController::class, 'tambah'])->name('rumah.tambah');
            Route::get('/edit', [RumahController::class, 'edit'])->name('rumah.edit');
            Route::post('/simpan', [RumahController::class, 'simpan'])->name('rumah.simpan');
            Route::delete('/hapus', [RumahController::class, 'hapus']);
            Route::view('/gambar', 'backend.pages.rumah.gambar', ['id' => date('Hisu'), 'sumber' => null]);
            Route::view('/fasilitas', 'backend.pages.rumah.fasilitas', ['id' => date('Hisu'), 'sumber' => null]);
        });

        Route::prefix('lainnya')->group(function () {
            Route::get('/', [BangunanlainController::class, 'backend'])->name('lainnya');
            Route::get('/tambah', [BangunanlainController::class, 'tambah'])->name('lainnya.tambah');
            Route::get('/edit', [BangunanlainController::class, 'edit'])->name('lainnya.edit');
            Route::post('/simpan', [BangunanlainController::class, 'simpan'])->name('lainnya.simpan');
            Route::delete('/hapus', [BangunanlainController::class, 'hapus']);
            Route::view('/gambar', 'backend.pages.lainnya.gambar', ['id' => date('Hisu'), 'sumber' => null]);
        });

        Route::prefix('moto')->group(function () {
            Route::get('/', [MotoController::class, 'backend'])->name('moto');
            Route::post('/simpan', [MotoController::class, 'simpan'])->name('moto.simpan');
            Route::view('/point', 'backend.pages.moto.point', ['id' => date('Hisu'), 'sumber' => null]);
        });

        Route::prefix('tentangkami')->group(function () {
            Route::get('/', [TentangkamiController::class, 'backend'])->name('tentangkami');
            Route::post('/simpan', [TentangkamiController::class, 'simpan'])->name('tentangkami.simpan');
            Route::view('/point', 'backend.pages.tentangkami.point', ['id' => date('Hisu'), 'sumber' => null]);
        });

        Route::prefix('kontak')->group(function () {
            Route::get('/', [KontakController::class, 'backend'])->name('kontak');
            Route::post('/simpan', [KontakController::class, 'simpan'])->name('kontak.simpan');
        });
    });
});

Route::get('/', [HomeController::class, 'frontend']);
Route::get('/tentangkami', [TentangkamiController::class, 'frontend']);
Route::get('/kontak', [KontakController::class, 'frontend']);
Route::get('/home', [HomeController::class, 'frontend'])->name('home');
Route::get('/perumahan/{id}', [PerumahanController::class, 'frontend'])->name('home');
Route::get('/rumah/{id}', [RumahController::class, 'frontend'])->name('home');
Route::get('/lainnya/{id}', [BangunanlainController::class, 'frontend'])->name('home');
