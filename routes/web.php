<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\PagesController;
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
Route::get('/langganan', [PagesController::class, 'langganan']);
Route::get('/pricing', [PagesController::class, 'perpanjanglangganan']);

Route::get('/', function () {
    return view('index');
});

Route::get('/bayar', function () {

    $id = DB::table('subscriptions')->max('id');

    $currentDate = now();
    $currentDate->add(new DateInterval('P1W'));

    DB::table('subscriptions')->insert([
        'id' =>  $id + 1,
        'user_id' => Auth::user()->id,
        'langganan' => $currentDate,
    ]);

    $data = DB::table('subscriptions')->get();
    dd($data);
    return view('user.pembayaran');
});

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/buangsampah', [PagesController::class, 'storeBuang']);
