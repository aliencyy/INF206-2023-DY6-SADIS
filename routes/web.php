<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\IsAdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
Route::get('/order',[PagesController::class, 'order'])->middleware('auth');
Route::get('/listdone',[PagesController::class, 'doneorder'])->middleware('auth');
Route::get('/order/{id}', [PagesController::class, 'orderan'])->middleware('auth');
Route::get('/langganan', [PagesController::class, 'langganan'])->middleware('auth');
Route::get('/pricing', [PagesController::class, 'perpanjanglangganan'])->middleware('auth');
Route::get('/', [PagesController::class, 'halamanUtama'])->middleware('guest');
Route::get('/listSubscriptor', [PagesController::class, 'listSubscriptions'])->middleware('admin');
Route::get('/profil', [PagesController::class, 'profil'])->middleware('auth');
Route::post('/buangsampah', [PagesController::class, 'storeBuang'])->middleware('overdue');
Route::resource('/dashboard/tes', IsAdminController::class)->middleware(('admin'));
Route::post('/updateStatus', [PagesController::class, 'storeStatus']);
Route::post('/hapusAkun', [PagesController::class, 'hapusAkun']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('logout', [LoginController::class, 'destroy']);
Route::post('/login', [LoginController::class, 'login']);


Route::get('/bayar', [PaymentController::class, 'index'])->middleware('auth');
Route::get('/listPembayaran', [PaymentController::class, 'listPembayaran'])->middleware('admin');
Route::get('/allreceipt', [PaymentController::class, 'showAllReceipt'])->middleware('admin');
Route::post('/bayar', [PaymentController::class, 'storeData']);
Route::post('/bayar/tipe', [PaymentController::class, 'index']);


Route::get('/tes/profil', function(){
    return view('user.pengolah.profile',[
        'title' => 'a'
    ]);
});

// Route::get('/', function () {
//     return view('index', []);
// })->middleware('guest');

Route::get('/tes/data', [PagesController::class, 'countTrash']);


Route::get('/mitra', function() {
    return view('mitra', [
        "title" => "Mitra"
    ]);
});


Route::get('/profile', function() {
    return view('user.pengolah.profile');
});

Route::get('/aboutus', function() {
    return view('aboutus', [
        "title" => "About Us"
    ]);
});


Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/buangsampah', [PagesController::class, 'storeBuang'])->middleware('overdue');
Route::post('/bayar', [PaymentController::class, 'storeData']);
Route::post('/bayar/tipe', [PaymentController::class, 'index']);

Route::post('/konfirmasiPembayaran', [PaymentController::class, 'konfirmasiPembayaran']);