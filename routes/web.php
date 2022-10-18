<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\LoginController;
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
    return view('/7_login');
});

route::view('/awal', '3_awal');

// produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/detail/{id}', [ProdukController::class, 'detail']);
Route::get('/addproduk', [ProdukController::class, 'addproduk']);

Route::post('add', [ProdukController::class, 'add']);


Route::get('/3_awal', [AwalController::class, 'index'])->name('awal');

//tkt
route::view('/tkt/1_tkt', 'tkt/1_tkt');
route::view('/tkt/2_tkt', 'tkt/2_tkt');
route::view('/tkt/3_tkt', 'tkt/3_tkt');
route::view('/tkt/4_tkt', 'tkt/4_tkt');
route::view('/tkt/5_tkt', 'tkt/5_tkt');
route::view('/tkt/6_tkt', 'tkt/6_tkt');
route::view('/tkt/7_tkt', 'tkt/7_tkt');
route::view('/tkt/8_tkt', 'tkt/8_tkt');
route::view('/tkt/9_tkt', 'tkt/9_tkt');

//uji
route::view('/pop', 'popup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



//login
Route::get('/login', function () {
    return view('7_login');
});

Route::post('postlogin', [LoginController::class, 'postlogin']);

Route::view('/login', '7_login');

Route::view('/login1', 'login');