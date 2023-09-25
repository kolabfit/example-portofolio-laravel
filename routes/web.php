<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route Pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::get('/pegawai/detail/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');

    Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::post('/pegawai/delete/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');

    // Route Portofolio
    Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
    Route::get('/portofolio/create', [PortofolioController::class, 'create'])->name('portofolio.create');
    Route::get('/portofolio/detail/{id}', [PortofolioController::class, 'show'])->name('portofolio.show');
    Route::get('/portofolio/edit/{id}', [PortofolioController::class, 'edit'])->name('portofolio.edit');

    Route::post('/portofolio/update/{id}', [PortofolioController::class, 'update'])->name('portofolio.update');
    Route::post('/portofolio/delete/{id}', [PortofolioController::class, 'destroy'])->name('portofolio.destroy');
    Route::post('/portofolio/store', [PortofolioController::class, 'store'])->name('portofolio.store');
});
