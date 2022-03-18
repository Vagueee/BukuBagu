<?php

use Illuminate\Support\Facades\Route;

//routes/web.php
use App\Http\Controllers\BukuController;
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
Route::resource('buku', BukuController::class);

Route::get('/',[BukuController::class, 'index']);

Route::post('/buku', [BukuController::class, 'store']);

Route::get('/buku/create',[BukuController::class, 'create']);

Route::put('/buku/{id}',[BukuController::class, 'update']);

Route::get('/buku/{id}/edit',[BukuController::class, 'edit']);

Route::get('/buku/{id}/detail',[BukuController::class, 'show']);

Route::delete('/buku/{id}',[BukuController::class, 'destroy']);
