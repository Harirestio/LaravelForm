<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\Mahasiswa;

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
})->middleware('guest');
Route::get('add-blog-post-form', [PostController::class, 'index'])->middleware('auth');
Route::post('store-form', [PostController::class, 'store'])->middleware('auth');
Route::get('tampil',[PostController::class,'tampil'])->middleware('auth');
Route::get('delete/{id}',[PostController::class,'delete'])->middleware('auth');
Route::get('post/edit/{id}', [PostController::class,'edit'])->middleware('auth');
Route::post('update/{id}', [PostController::class,'update'])->middleware('auth');



Route::get('input-mahasiswa', [MahasiswaController::class,'index'])->middleware('auth');
Route::post('kirim-mahasiswa', [MahasiswaController::class, 'store'])->middleware('auth');
Route::get('delete-mahasiswa/{nim}',[MahasiswaController::class,'delete'])->middleware('auth');
Route::get('edit-mahasiswa/{nim}',[MahasiswaController::class,'edit'])->middleware('auth');
Route::get('show-data-mahasiswa',[MahasiswaController::class,'show'])->middleware('auth');
Route::post('update-mahasiswa/{nim}',[MahasiswaController::class,'update'])->middleware('auth');


Route::get("/login",[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post("/login",[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get("registrasi",[RegisterController::class,'index'])->middleware('guest');
Route::post('registrasi-user',[RegisterController::class,'register'])->middleware('guest');