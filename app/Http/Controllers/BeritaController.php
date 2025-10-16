<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   
use App\models\Berita;

class BeritaController extends Controller
{
    public function index () {
        return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
    ]);
}
    public function tampildata($slugp) {
    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slugp),
    ]);
}
}
