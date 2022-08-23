<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.app');
});
Route::get('/barang', function () {
    return view('Barang.index');
});
Route::get('/kategori', function () {
    return view('Kategori.index');
});
Route::get('/suplier', function () {
    return view('Suplier.index');
});
Route::get('/pembeli', function () {
    return view('Pembeli.index');
});
Route::get('/pembelian', function () {
    return view('Pembelian.index');
});
Route::get('/penjualan', function () {
    return view('Penjualan.index');
});

