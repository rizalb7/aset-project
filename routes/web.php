<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\DataOpdController;
use App\Http\Controllers\KategoriAsetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::resource('dashboard/dataopd', DataOpdController::class);
    Route::resource('dashboard/kategori-aset', KategoriAsetController::class);
    Route::resource('dashboard/user', UserController::class);
});
Route::group(['middleware' => ['auth', 'role:superadmin, admin_opd']], function () {
    Route::get('/dashboard/home', function () {
        return view('dashboard.home');
    });
    Route::resource('dashboard/aset', AsetController::class);
});