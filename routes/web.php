<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Prodak', function () {
    return view('Prodak'); 
});
Route::get('/daftar-prodak', function () {
    return view('daftar-prodak'); 
});
Route::get('/Keranjang', function () {
    return view('keranjang'); 
});
Route::get('/kategori', function () {
    return view('kategori'); 
});