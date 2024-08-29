<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index\C_pembayaran;

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
Route::get('/indexadmin', function () {
    return view('layout/home1');
});
Route::get('/indexowner', function () {
    return view('layout/home2');
});
Route::get('/indexpegawai', function () {
    return view('layout/home3');
});
//Route::get('/pembayaran', [C_pembayaran::class, 'indexpembayaran'])->name('indexpembayaran');
Route::get('/pembayaran', [C_pembayaran::class, 'indexpembayaran']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    //Route::get('regis', [\App\Http\Controllers\RegisterController::class, 'index']);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('/logout', [\App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
});


