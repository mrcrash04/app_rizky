<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\TiketController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/pesan', 'KonsumenController@postBecomeACustomer');
// Route::get('/pesan', [KonsumenController::class, 'index'])->name('index');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Route::get('konsumen', [KonsumenController::class, 'index'])->name('Konsumen')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('tiket/tampil', [TiketController::class, 'tampiltiket'])->name('tampiltiket')->middleware('auth');
Route::get('tiket/tambah', [TiketController::class, 'tambahtiket'])->name('tambahtiket');
Route::post('tiket/simpan', [TiketController::class, 'simpantiket'])->name('simpantiket')->middleware('auth');

Route::get('tiket/ubahtiket/{id_tiket}', [TiketController::class, 'ubahtiket'])->name('ubahtiket')->middleware('auth');
Route::post('tiket/updatetiket', [TiketController::class, 'updatetiket'])->name('updatetiket')->middleware('auth');

Route::get('tiket/hapus/{id_tiket}', [TiketController::class,'hapustiket'])->name('hapustiket')->middleware('auth');

Route::get('laporan', [TiketController::class, 'laporan'])->name('laporan');

// Route::get('konsumen', [TiketController::class, 'daftar']);
Route::get('search', [TiketController::class, 'search'])->name('search');

Route::resource('pesan', PesanController::class);
Route::post('pesan/simpan', [PesanController::class, 'simpan'])->name('simpan');
