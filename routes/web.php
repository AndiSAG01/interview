<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('apps.app');
});

Route::get('/user', [PenggunaController::class,'index'])->name('user.index');
Route::get('/user/create', [PenggunaController::class,'create'])->name('user.create');
Route::post('/user/store', [PenggunaController::class,'store'])->name('user.store');
Route::get('/user/edit/{id}', [PenggunaController::class,'edit'])->name('user.edit');
Route::post('/user/update/{id}', [PenggunaController::class,'update'])->name('user.update');
Route::delete('/user/delete/{id}', [PenggunaController::class,'delete'])->name('user.delete');
