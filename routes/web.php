<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
    return redirect()->route('login');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('login', 'login_show')->name('login');
    Route::post('login', 'authenticate')->name('authenticate');
    Route::get('logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function() {
                            // ===### BERANDA ###===
    Route::get('admin/beranda', 'beranda_show')->name('admin_beranda_show');

                            // ====### PENGGUNA ###===
    Route::get('admin/pengguna/departemen', 'pengguna_departemen_show')->name('admin_pengguna_departemen_show');
});