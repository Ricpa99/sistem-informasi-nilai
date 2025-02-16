<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\XampleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [indexController::class, 'index'])->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/home', [indexController::class, 'index'])->middleware('auth');
Route::get('/storeMahasiswa', [indexController::class, 'storeMahsiswa'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/daftarMahasiswa', [indexController::class, 'daftarMahasiswa'])->middleware('auth');
Route::get('/createKrs', [indexController::class, 'createKrs'])->middleware('auth');
Route::post('/createKrs', [indexController::class, 'sks'])->name('auth');
Route::get('/lihatNilai', [indexController::class, 'lihatNilai'])->middleware('auth');
Route::post('/lihatNilai', [indexController::class, 'lihatNilai'])->middleware('auth');
Route::post('/nilaiMahasiswa/{user:slug}', [indexController::class, 'listNilai'])->middleware('auth');
Route::get('/nilaiMahasiswa/{user:slug}', [indexController::class, 'listNilai'])->middleware('get');
Route::get('/sks/{sks:id}', [indexController::class, 'delSks'])->middleware('auth');
Route::post('/payment', [indexController::class, 'updatePayment'])->middleware('auth');
Route::post('/nilaiUser', [indexController::class, 'nilaiUser'])->middleware('auth');
Route::post('/storeSks/{user:id}', [indexController::class, 'storeSks'])->middleware('auth');
Route::post('/storePayment/{user:id}', [indexController::class, 'storePayment'])->middleware('auth');
Route::post('/nilaiUser/{user:slug}', [indexController::class, 'listNilai'])->middleware('auth');
Route::get('/proFile', [indexController::class, 'proFile'])->middleware('auth');
Route::get('/semester', [indexController::class, 'semester'])->middleware('auth');
Route::get('/pembayaran', [indexController::class, 'payment'])->middleware('auth');
Route::resource('/dashboard/user', DasboardController::class)->middleware('auth');
Route::resource('/dashboard/nilai', NilaiController::class)->middleware('auth');
Route::resource('/dashboard/xample', XampleController::class)->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });
