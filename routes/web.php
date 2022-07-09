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
route::post('/kategori/insert',[App\Http\Controllers\kategori_controller::class,'tambah_kategori']);
route::get('/kategori',[App\Http\Controllers\kategori_controller::class,'index_kategori'])->name('kategori');
route::get('/kategoridelete/{id}',[App\Http\Controllers\kategori_controller::class, 'delete_kategori']);
route::get('/EditKategori/{id}',[App\Http\Controllers\kategori_controller::class, 'findidkategori'])->name('EditKategori');
route::post('/ProsesEditKategori',[App\Http\Controllers\kategori_controller::class, 'edit_kategori'])->name('ProsesEditKategori');

//Blog Crud
route::get('/blog',[App\Http\Controllers\blog_controller::class,'index_blog'])->name('blog');
route::get('/history/blog',[App\Http\Controllers\blog_controller::class,'history']);
route::get('/Destroy_data/{id}',[App\Http\Controllers\blog_controller::class,'Destroy']);
route::get('/restore_data/{id}',[App\Http\Controllers\blog_controller::class,'Restore']);
route::post('/blog/insert',[App\Http\Controllers\blog_controller::class,'tambah_blog']);
route::get('/blogdelete/{id}',[App\Http\Controllers\blog_controller::class,'delete_blog']);
route::get('/Editblog/{id}',[App\Http\Controllers\blog_controller::class, 'findidblog'])->name('Editblog');
route::post('/ProsesEdit_blog',[App\Http\Controllers\blog_controller::class, 'Edit_blog'])->name('ProsesEdit_blog');