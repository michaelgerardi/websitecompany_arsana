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

//Route Layout
route::get('/layout',[App\Http\Controllers\layout_controller::class,'indexlayout']);

//Route Auth & Login
//Auth::routes();
Route::post('/submit/login', [App\Http\Controllers\LoginAuthController::class, 'login'])->name('sublogin');
route::get('/layoutlogin',[App\Http\Controllers\LoginAuthController::class, 'cek_login']);
// route::get('/layoutlogin',[App\Http\Controllers\LoginAuthController::class, 'loginPage']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
route::get('/dashboard_Admin',[App\Http\Controllers\blog_controller::class,'dashboard_admin']);

//pengajar
route::get('/pengajar',[App\Http\Controllers\pengajar_controller::class,'pengajar_blog'])->name('pengajar_blog');
route::post('/pengajar/insert',[App\Http\Controllers\pengajar_controller::class,'konten_pengajar']);

//reqjdpengajar
route::get('/reqroleP',[App\Http\Controllers\peserta_controller::class,'viewReqJdPengajar'])->name('viewReqJdPengajar');
route::post('/reqroleP/insert',[App\Http\Controllers\peserta_controller::class,'insertreq'])->name('insertreq');
route::get('/LihatReq',[App\Http\Controllers\ReqJdPeng_controller::class,'LihatReq'])->name('LihatReq');
route::get('/LihatReq/ApproveReq/{id}',[App\Http\Controllers\ReqJdPeng_controller::class,'ApproveReq'])->name('ApproveReq');

//Peserta
route::get('/peserta',[App\Http\Controllers\peserta_controller::class,'peserta_blog'])->name('peserta_blog');
route::post('/peserta/insert',[App\Http\Controllers\peserta_controller::class,'konten_peserta']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//slider CRUD
route::get('/Slider',[App\Http\Controllers\slider_controller::class,'slider_index']);
route::post('/slider/insert',[App\Http\Controllers\slider_controller::class,'tambah_slider']);