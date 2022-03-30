<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\DonaturController;

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

Route::get('/', [FormulirController::class, 'index'])->name('beranda');
Route::post('/regristasi', [DonaturController::class, 'regristasi'])->name('regristasi');
