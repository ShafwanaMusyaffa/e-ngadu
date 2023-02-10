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
})->name('beranda');

Route::get('dashboard/pengaduan', function () {
    return view('pages.admin.pengaduan.index');
})->name('dashboard-pengaduan');

Route::get('/dashboard/masyarakat', function () {
    return view('pages.admin.masyarakat.index');
})->name('dashboard-masyarakat');

Route::get('/dashboard/petugas', function () {
    return view('pages.admin.petugas.index');
})->name('dashboard-petugas');

Route::get('/dashboard/laporan', function () {
    return view('pages.admin.laporan.index');
})->name('dashboard-laporan');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');
});
