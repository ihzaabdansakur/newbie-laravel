<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('web.homepage');
   });
Route::get('/Prodak', function () {
    return view('prodak'); 
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