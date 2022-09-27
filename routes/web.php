<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PesanController;


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
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\HeadlineController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\Testimonicontroller;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\VirtualtourController;
use App\Http\Controllers\NewsDetailController;
use App\Http\Controllers\OfflineTourController;
use App\Http\Controllers\OfflineController;
use App\Http\Livewire\Product;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', \App\Http\Controllers\BeritaController::class);
    });

    Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita/store', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
    Route::delete('/berita/delete/{id_berita}', [App\Http\Controllers\BeritaController::class, 'delete'])->name('berita.delete');
    Route::get('/berita/edit/{id_berita}', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('/berita/update', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');

});
//Route Login dan Logout
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('proseslogin', [LoginController::class,'proseslogin'])->name('proseslogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//Route Register
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');

//Route Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    //Route Keunggulan
    Route::get('keunggulan', [KeunggulanController::class, 'index'])->name('keunggulan.index');
    Route::get('keunggulan/create', [KeunggulanController::class, 'create'])->name('keunggulan.create');
    Route::post('keunggulan/store', [KeunggulanController::class, 'store'])->name('keunggulan.store');
    Route::get('keunggulan/edit/{id}', [KeunggulanController::class, 'edit'])->name('keunggulan.edit');
    Route::put('keunggulan/update//{id}', [KeunggulanController::class, 'update'])->name('keunggulan.update');
    Route::delete('keunggulan/delete/{id}', [KeunggulanController::class, 'delete'])->name('keunggulan.delete');

    //Route About
    Route::get('about1', [AboutController::class, 'index'])->name('about.index');
    Route::get('about/create', [AboutController::class, 'add'])->name('about.add');
    Route::post('about/store', [AboutController::class, 'store'])->name('about.store');
    Route::get('about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('about/update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('about/delete/{id}', [AboutController::class, 'destroy'])->name('about.destroy');
    // Route::get('about/detail/{id}', [AboutController::class, 'detail'])->name('about.detail');

    Route::get('partner', [PartnerController::class, 'index'])->name('partner.index');
    Route::get('partner/create', [PartnerController::class, 'create'])->name('partner.create');
    Route::post('partner/store', [PartnerController::class, 'store'])->name('partner.store');
    Route::get('partner/edit/{id}', [PartnerController::class, 'edit'])->name('partner.edit');
    Route::put('partner/update/{id}', [PartnerController::class, 'update'])->name('partner.update');
    Route::delete('partner/delete/{id}', [PartnerController::class, 'destroy'])->name('partner.destroy');

});
// BAGIAN WORK
Route::resource('work', \App\Http\Controllers\WorkController::class);

Route::get('/work1', [App\Http\Controllers\WorkController::class, 'index'])->name('work.index');
Route::get('/work/view', [App\Http\Controllers\WorkController::class, 'add'])->name('work.view');
Route::get('/work/create', [App\Http\Controllers\WorkController::class, 'create'])->name('work.create');
Route::get('/work/edit/{id}', [App\Http\Controllers\WorkController::class, 'edit'])->name('work.edit');
Route::post('/work/update', [App\Http\Controllers\WorkController::class, 'update'])->name('work.update');
Route::post('/work/store', [App\Http\Controllers\WorkController::class, 'work'])->name('work.store');
Route::delete('/work/destroy/{id}', [App\Http\Controllers\WorkController::class, 'destroy'])->name('work.destroy');
// SELESAI BAGIAN WORK
Route::resource('testimoni', \App\Http\Controllers\Testimonicontroller::class);
//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::post('/posts/update', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

Route::resource('headline', \App\Http\Controllers\HeadlineController::class);
Route::resource('/staff', \App\Http\Controllers\StaffController::class);



Route::get('/destinasifront', [HomeController::class, 'destinasi'])->name('destinasi');
Route::get('/work', [HomeController::class, 'work'])->name('work');
Route::get('/research', [HomeController::class, 'research'])->name('research');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/training', [HomeController::class, 'training'])->name('training');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/testimonifront', [HomeController::class, 'testimoni'])->name('testimonifront');
Route::get('/partnerfront', [HomeController::class, 'partner'])->name('partnerfront');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/destinasifront/{iddestinasi}', [HomeController::class, 'destinasidetail'])->name('detail.show');
Route::get('/newsdetail{id_berita}', [NewsController::class, 'newsdetail'])->name('newsdetail');

//Route::resource('/news', \App\Http\Controllers\NewsController::class);
//Route::resource('/newsdetail', \App\Http\Controllers\NewsDetailController::class);
Route::resource('/galeri', \App\Http\Controllers\GaleriController::class);
//Route::resource('/home', \App\Http\Controllers\HomeController::class);
//Route::resource('/news', \App\Http\Controllers\NewsController::class);
///Route::resource('/newsdetail', \App\Http\Controllers\NewsDetailController::class);
Route::resource('/destinasi', \App\Http\Controllers\DestinasiController::class);
//Route::resource('/destinasidetail', \App\Http\Controllers\DestinasiDetailController::class);
Route::resource('/galeri', \App\Http\Controllers\GaleriController::class);
// Route::resource('/about', \App\Http\Controllers\AboutController::class);
//Route::resource('/news', \App\Http\Controllers\NewsController::class);
//Route::resource('/newsdetail', \App\Http\Controllers\NewsDetailController::class);
Route::resource('/galeri', \App\Http\Controllers\GaleriController::class);
Route::resource('offline', \App\Http\Controllers\OfflineController::class)->middleware('auth');
Route::resource('/virtual', \App\Http\Controllers\VirtualtourController::class)->middleware('auth');

// Route::resource('/offlinetour', \App\Http\Controllers\OfflineTourController::class);

Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('pembayaran');

Route::get('/invoice/{virtual_tour_id}', [HomeController::class, 'invoice'])->name('invoice');
Route::get('/pesan1/{pemesanan_virtual_tour_id}', [HomeController::class, 'pesan1'])->name('virtual.pesan1');


Route::get('/detailvirtual/{virtual_tour_id}', [HomeController::class, 'detailvirtual'])->name('detailvirtual');


Route::get('/pesan/{virtual_tour_id}', [App\Http\Controllers\PesanController::class, 'pesan'])->name('pesan');


Route::get('/reload-captcha', [HomeController::class, 'reloadCaptcha']);
Route::get('/cetak_pdf/{pemesanan_virtual_tour_id}',[ App\Http\Controllers\PesanController::class, 'cetak_pdf'])->name('cetak_pdf');
Route::get('/index', [App\Http\Controllers\PesanController::class, 'index'])->name('index');

Route::get('/detail/{virtual_tour_id}', [App\Http\Controllers\DetailController::class, 'detail'])->name('detail');

Route::get('virtualtour', [HomeController::class, 'virtualtour'])->name('virtualtour');
Route::get('/vdetail', [HomeController::class, 'vdetail'])->name('vdetail');

//Route::get('virtual', [VirtualtourController::class, 'index'])->middleware('auth');
//Route::get('virtual', [VirtualtourController::class, 'create'])->middleware('auth');
//Route::get('virtual', [VirtualtourController::class, 'store'])->middleware('auth');
//Route::get('virtual', [VirtualtourController::class, 'edit'])->middleware('auth');
//Route::get('virtual', [VirtualtourController::class, 'update'])->middleware('auth');
//Route::get('virtual', [VirtualtourController::class, 'destroy'])->middleware('auth');

Route::get('forgotpassword', [RegisterController::class, 'forgotpassword'])->name('forgotpassword');
//Route::get('/midtrans', [App\Http\Controllers\HomeController::class, 'midtrans'])->name('midtrans');



