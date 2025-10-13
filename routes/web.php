<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profil', function () {
    return view('profil',[
        "title" => "profil",
        "nama" => "markonah",
        "nohp" => "00857326329",
        "foto" => "images/reza.jpg",
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
    ]);
});

Route::get('/berita/{slug}', function ($slugp) {
    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slugp),
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
    ]);
});