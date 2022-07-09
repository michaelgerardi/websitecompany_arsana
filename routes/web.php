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

//kategori CRUD
route::post('/kategori/insert',[App\Http\Controllers\kategori_controller::class,'tambah_kategori'])->name('kategori');
route::get('/kategori',[App\Http\Controllers\kategori_controller::class,'index_kategori']);
route::get('/kategoridelete/{id}',[App\Http\Controllers\kategori_controller::class, 'delete_kategori']);
route::get('/EditKategori/{id}',[App\Http\Controllers\kategori_controller::class, 'findidkategori'])->name('EditKategori');
route::post('/ProsesEditKategori/{id}',[App\Http\Controllers\kategori_controller::class, 'edit_kategori'])->name('ProsesEditKategori');

//Blog Crud
route::get('/blog',[App\Http\Controllers\blog_controller::class,'index_blog']);
route::post('/blog/insert',[App\Http\Controllers\blog_controller::class,'tambah_blog']);

route::get('/layout',[App\Http\Controllers\layout_controller::class,'indexlayout']);
route::get('/blogdelete/{id}',[App\Http\Controllers\blog_controller::class,'delete_blog']);

Auth::routes();
Route::post('/submit/login', [App\Http\Controllers\LoginAuthController::class, 'login'])->name('sublogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
