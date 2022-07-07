<?php

use App\Http\Controllers\Admin\AdminBerandaController;
use App\Http\Controllers\Admin\AdminLapanganController;
use App\Http\Controllers\Admin\AdminPesananController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\BookingController;

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

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::get('login', [UserController::class, 'index']);
Route::get('register', function () {
    return view('register');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminBerandaController::class, 'index']);
    Route::get('/pesanan', [AdminPesananController::class, 'index']);
    Route::get('/pesanan/{id}/edit', [AdminPesananController::class, 'edit']);
    Route::post('/pesanan/update/{id}', [AdminPesananController::class, 'update']);
    Route::resource('lapangan', AdminLapanganController::class);
});


Route::group(['prefix' => 'user'], function () {
    Route::get('/register', function () {
        return view('user.register');
    });

    Route::get('/login', function () {
        return view('user.login');
    });

    Route::get('/', function () {
        return view('user.index');
    });

    Route::group(["middleware" => "login"], function () {
        Route::resource("/booking", BookingController::class);

        Route::get('pesanan', [PesananController::class, 'index']);
        Route::get('pesanan/{id}', [PesananController::class, 'show']);
        Route::post('pesanan', [PesananController::class, 'store']);
    });
    Route::get('/profil', function () {
        return view('user.profil');
    });

    Route::get('/tambahbooking', function () {
        return view('user.tambahbooking');
    });
});
