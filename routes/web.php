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

Auth::routes();

Route::get('/', [App\Http\Controllers\LandingController::class, 'landing'])->name('landing');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/beranda', [App\Http\Controllers\Beranda\BerandaController::class, 'post'])->name('post');
Route::get('/beranda/tambahpost', [App\Http\Controllers\Beranda\BerandaController::class, 'tambahpost'])->name('tambahpost');
Route::post('/beranda/tambahpost/save', [App\Http\Controllers\Beranda\BerandaController::class, 'savepost'])->name('savepost');

Route::get('/kategori', [App\Http\Controllers\Kategori\KategoriController::class, 'kategori'])->name('kategori');
Route::get('/tambahkategori', [App\Http\Controllers\Kategori\KategoriController::class, 'tambahkategori'])->name('tambahkategori');
Route::post('/savekategori', [App\Http\Controllers\Kategori\KategoriController::class, 'savekategori'])->name('savekategori');
Route::post('/updatekategori/{id}', [App\Http\Controllers\Kategori\KategoriController::class, 'updatekategori'])->name('updatekategori');
Route::post('/deletekategori/{id}', [App\Http\Controllers\Kategori\KategoriController::class, 'deletekategori'])->name('deletekategori');

Route::get('/admin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'loginAdmin'])->name('loginadmin');
Route::post('actionlogin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'action'])->name('actionlogin');
Route::get('logoutAdmin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'logoutAdmin'])->name('logoutadmin');
