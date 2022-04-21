<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\KeduaController;
use App\Http\Controllers\KeenamController;
use App\Http\Controllers\KelimaController;
use App\Http\Controllers\KetigaController;
use App\Http\Controllers\KeempatController;
use App\Http\Controllers\KetujuhController;
use App\Http\Controllers\PertamaController;
use App\Http\Controllers\KedelapanController;
use App\Http\Controllers\KesembilanController;

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

//route tanpa controller
Route::get('/Beranda', function () {
    echo ("Ini adalah halaman Beranda");
});

Route::get('/Profil', function () {
    echo ("Lusiya Melda Putri");
});

Route::get('/Profil/Lusiya', function () {
    echo ("Nama saya Lusiya Melda Putri NPM G!A020051");
});

Route::get('/Profil/Nabila', function () {
    echo ("Nabila Zhavira 20 Juli 2002");
});

Route::get('/Titanium', function () {
    echo ("Titanium adalah .....");
});

Route::get('/Kata', function () {
    echo ("Kata merupakan gabungan dari beberapa huruf");
});

Route::get('/Kalimat', function () {
    echo ("Kalimat adalah gabungan dari beberapa kata");
});

Route::get('/Quotes/Nabila', function () {
    echo ("Hidup,Berarti lalu Mati");
});

Route::get('/Quotes/Habibie', function () {
    echo ("Jadilah Mata Air");
});

Route::get('/KataBijak', function () {
    echo ("Don't expect too much ");
});
//route controller
Route::get('/jual', [JualController::class, 'lusy']);

Route::get('/pertama', [PertamaController::class, 'lusy']);

Route::get('/kedua', [KeduaController::class, 'lusy']);

Route::get('/ketiga', [KetigaController::class, 'lusy']);

Route::get('/keempat', [KeempatController::class, 'lusy']);

Route::get('/kelima', [KelimaController::class, 'lusy']);

Route::get('/keenam', [KeenamController::class, 'lusy']);

Route::get('/ketujuh', [KetujuhController::class, 'lusy']);

Route::get('/kedelapan', [KedelapanController::class, 'lusy']);

Route::get('/kesembilan', [KesembilanController::class, 'lusy']);