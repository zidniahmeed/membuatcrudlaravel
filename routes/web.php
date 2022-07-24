<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasiswaController;

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
});


Route::get('/siswa',[DatasiswaController::class, 'index'] )->name('siswa');


Route::get('/tambahdata',[DatasiswaController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[DatasiswaController::class,'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}',[DatasiswaController::class,'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[DatasiswaController::class,'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[DatasiswaController::class,'delete'])->name('delete');

