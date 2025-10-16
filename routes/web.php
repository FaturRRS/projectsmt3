<?php

use App\Http\controllers\BeritaController;
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

Route::get('/berita', [BeritaController::class,'index']);


Route::get('/berita/{slug}', [BeritaController::class,'tampildata']);
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