<?php

#controller
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;

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

//index
Route::get('/', function () 
{
    return view('index');
})->name('login');

Route::post('login', [LoginController::class, 'index']);

//
//name('dash');

Route::get('dashboard', [LoginController::class, 'goHome'])->name('dash');

//add barang
Route::get('/add', [BarangController::class, 'index']
)->name('addForm');
Route::post('/save', [BarangController::class, 'save'])->name('save');

//delete barang
Route::get('/delete/{id}', [BarangController::class, 'remove'])->name('del');
//refresh stock barang
Route::get('/refresh/{id}', [BarangController::class, 'refresh'])->name('refresh');

//menu karyawan
Route::get('/karyawan', [LoginController::class, 'menuKaryawan'])->name('menuKaryawan');
//logout
Route::get('/', [LoginController::class, 'logout'])->name('logout');