<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\IsAdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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



Route::get('/dashboard', [PagesController::class, ('dashboard')])->middleware('auth');
Route::get('/buangsampah', [PagesController::class, ('buang')])->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/order',[PagesController::class, 'order'])->middleware('auth');
Route::get('/order/{id}', [PagesController::class, 'orderan'])->middleware('auth');
Route::get('logout', [LoginController::class, 'destroy']);
Route::get('/langganan', [PagesController::class, 'langganan'])->middleware('auth');
Route::get('/pricing', [PagesController::class, 'perpanjanglangganan'])->middleware('auth');
Route::get('/bayar', [PaymentController::class, 'index'])->middleware('auth');
Route::get('/listSubscriptor', [PagesController::class, 'listSubscriptions'])->middleware('admin')->middleware('overdue');

Route::get('/tes/status', function(){
    return view('user.pengolah.statuslangganan');
});

Route::get('/', function () {
    return view('index');
})->middleware('guest');

Route::get('/tes/profil', function() {
    return view('user.profil');
});


Route::get('/mitra', function() {
    return view('mitra');
});

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/buangsampah', [PagesController::class, 'storeBuang'])->middleware('overdue');
Route::post('/bayar', [PaymentController::class, 'storeData']);
Route::post('/bayar/tipe', [PaymentController::class, 'index']);

route::resource('/dashboard/tes', IsAdminController::class)->middleware(('admin'));