<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\PagesController;


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
Route::get('/buangsampah', [PagesController::class, ('buang')]);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/order',[PagesController::class, 'order']);
Route::get('/order/{id}', [PagesController::class, 'orderan']);
Route::get('logout', [LoginController::class, 'destroy']);

Route::get('/', function () {
    return view('index');
});


Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/buangsampah', [PagesController::class, 'storeBuang']);
