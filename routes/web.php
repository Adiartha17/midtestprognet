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
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/profil', [App\Http\Controllers\UserController::class, 'profil'])->name('profil');
    Route::get('/editprofil/{id}', [App\Http\Controllers\UserController::class, 'editprofil'])->name('editprofil');
    Route::post('/saveprofil/{id}', [App\Http\Controllers\UserController::class, 'saveprofil'])->name('saveprofil');

    Route::get('/beranda', [App\Http\Controllers\Beranda\BerandaController::class, 'post'])->name('post');
    Route::get('/tambahpost', [App\Http\Controllers\Beranda\BerandaController::class, 'tambahpost'])->name('tambahpost');
    Route::post('/savepost', [App\Http\Controllers\Beranda\BerandaController::class, 'savepost'])->name('savepost');
    Route::get('/editpost/{id}', [App\Http\Controllers\Beranda\BerandaController::class, 'editpost'])->name('editpost');
    Route::post('/updatepost/{id}', [App\Http\Controllers\Beranda\BerandaController::class, 'updatepost'])->name('updatepost');
    Route::post('/deletepost/{id}', [App\Http\Controllers\Beranda\BerandaController::class, 'deletepost'])->name('deletepost');

    Route::get('/kategori', [App\Http\Controllers\Kategori\KategoriController::class, 'kategori'])->name('kategori');
    Route::get('/tambahkategori', [App\Http\Controllers\Kategori\KategoriController::class, 'tambahkategori'])->name('tambahkategori');
    Route::post('/savekategori', [App\Http\Controllers\Kategori\KategoriController::class, 'savekategori'])->name('savekategori');
    Route::get('/editkategori/{id}', [App\Http\Controllers\Kategori\KategoriController::class, 'editkategori'])->name('editkategori');
    Route::post('/updatekategori/{id}', [App\Http\Controllers\Kategori\KategoriController::class, 'updatekategori'])->name('updatekategori');
    Route::post('/deletekategori/{id}', [App\Http\Controllers\Kategori\KategoriController::class, 'deletekategori'])->name('deletekategori');

    Route::get('/tag', [App\Http\Controllers\Tags\TagController::class, 'tag'])->name('tag');
    Route::get('/tambahtag', [App\Http\Controllers\Tags\TagController::class, 'tambahtag'])->name('tambahtag');
    Route::post('/savetag', [App\Http\Controllers\Tags\TagController::class, 'savetag'])->name('savetag');
    Route::get('/edittag/{id}', [App\Http\Controllers\Tags\TagController::class, 'edittag'])->name('edittag');
    Route::post('/updatetag/{id}', [App\Http\Controllers\Tags\TagController::class, 'updatetag'])->name('updatetag');
    Route::post('/deletetag/{id}', [App\Http\Controllers\Tags\TagController::class, 'deletetag'])->name('deletetag');
});
    
    Route::get('/admin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'loginAdmin'])->name('loginadmin');
    Route::post('actionlogin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'action'])->name('actionlogin');
    Route::get('logoutAdmin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'logoutAdmin'])->name('logoutadmin');
