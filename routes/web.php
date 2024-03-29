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

Route::get('/', [App\Http\Controllers\layout_controller::class,'indexlayout'])->name('mainpage');
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
route::get('/viewblog/{id}',[App\Http\Controllers\layout_controller::class, 'viewdetailberita']);

//Route Layout
//route::get('/layout',[App\Http\Controllers\layout_controller::class,'indexlayout'])->name('mainpage');
route::get('/service',[App\Http\Controllers\layout_controller::class,'serviceLay']);

//Route Auth & Login
//Auth::routes();
Route::post('/submit/login', [App\Http\Controllers\LoginAuthController::class, 'login'])->name('sublogin');
route::get('/layoutlogin',[App\Http\Controllers\LoginAuthController::class, 'showLoginForm'])->name('loginfinal');
// route::get('/layoutlogin',[App\Http\Controllers\LoginAuthController::class, 'loginPage']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logoutfnl', [App\Http\Controllers\LoginAuthController::class, 'logout'])->name('logoutfnl');
Route::get('/relog',[App\Http\Controllers\LoginAuthController::class, 'relog_reset'])->name('rlog');

// Admin
route::get('/dashboard_Admin',[App\Http\Controllers\blog_controller::class,'dashboard_admin']);
route::get('/dashboard',[App\Http\Controllers\admin_controller::class,'admin'])->name('dashboard_admin');

//Register
route::get('/register2',[App\Http\Controllers\RegisterController::class, 'registerLay']);

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
route::get('/userindex',[App\Http\Controllers\peserta_controller::class,'userindex'])->name('userindex');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//slider CRUD
route::get('/Imageslider',[App\Http\Controllers\slider_controller::class,'slider_index']);
route::post('/slider/insert',[App\Http\Controllers\slider_controller::class,'tambah_slider']);
route::get('/slidedelete/{id}',[App\Http\Controllers\slider_controller::class,'delete_slider']);
route::get('/editslider/{id}',[App\Http\Controllers\slider_controller::class,'findidslider']);
route::post('/proseseditslider',[App\Http\Controllers\slider_controller::class,'update_slider'])->name('ProsesEditslider');

//Portofolio CRUD
route::get('/Imageportofolio',[App\Http\Controllers\portofolio_controller::class,'index_portofolio']);
route::post('/portofolio/insert',[App\Http\Controllers\portofolio_controller::class,'tambah_portofolio']);
route::get('/portofoliodelete/{id}',[App\Http\Controllers\portofolio_controller::class,'delete_portofolio']);
route::get('/editportofolio/{id}',[App\Http\Controllers\portofolio_controller::class,'findidportofolio']);
route::post('/proseseditportofolio',[App\Http\Controllers\portofolio_controller::class,'update_portofolio'])->name('ProsesEditportofolio');

//LayananCRUD
route::get('/data_layanan',[App\Http\Controllers\layanan_controller::class,'index_layanan']);
route::post('/layanan/insert',[App\Http\Controllers\layanan_controller::class,'tambah_layanan']);
route::get('/layanandelete/{id}',[App\Http\Controllers\layanan_controller::class,'delete_layanan']);
route::get('/editlayanan/{id}',[App\Http\Controllers\layanan_controller::class,'findidlayanan']);
route::post('/proseseditlayanan',[App\Http\Controllers\layanan_controller::class,'update_layanan'])->name('ProsesEditlayanan');
route::get('/viewlay/{id}',[App\Http\Controllers\layout_controller::class, 'viewdetaillayanan']);

//googleauth
Route::get('auth/google',[App\Http\Controllers\LoginAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback',[App\Http\Controllers\LoginAuthController::class, 'handleGoogleCallback']);

//datauser
Route::get('/viewdatauser',[App\Http\Controllers\data_user_controller::class, 'viewdatauser'])->name('viewdatauser');
Route::get('/viewdatapengajar',[App\Http\Controllers\data_user_controller::class, 'viewdatapengajar'])->name('viewdatapengajar');

// crud comment
route::post('/comment',[App\Http\Controllers\comment_controller::class,'savecomment'])->name('savecomment');

//privacy policies
Route::get('/privacypol',[App\Http\Controllers\LoginAuthController::class, 'privacypol'])->name('privacypol');

