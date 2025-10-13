<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "markonah",
        "nohp" => "00857326329",
        "foto" => "images/reza.jpg",
    ]);
});

Route::get('/berita', function () {
    $data_berita = [
        [
            "judul" => "Unimus Ganteng",
            "slug" => "unimus-ganteng",
            "penulis" => "anjo",
            "konten" => "pembunuhan tanpa busana daerah ciliwangi",
        ],
        [
            "judul" => "Berita Unimus Hot",
            "slug"=> "berita-unimus-hot",
            "penulis" => "jamno",
            "konten" => "menangis meratapi nasib, seorang pemuda ditemukan sedang melahirkan disekitar lampu merah ciliwung",
        ],
        [
            "judul" => "Fatur Full Percakapan",
            "slug" => "fatur-full-percakapan",
            "penulis" => "pukime",
            "konten" => "munaroh menikami",
        ]
    ];

    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/berita/{slug}', function ($slugp) {

    $data_berita = [
        [
            "judul" => "Unimus Ganteng",
            "slug" => "unimus-ganteng",
            "penulis" => "anjo",
            "konten" => "pembunuhan tanpa busana daerah ciliwangi",
        ],
        [
            "judul" => "Berita Unimus Hot",
            "slug"=> "berita-unimus-hot",
            "penulis" => "jamno",
            "konten" => "menangis meratapi nasib, seorang pemuda ditemukan sedang melahirkan disekitar lampu merah ciliwung",
        ],
        [
            "judul" => "Fatur Full Percakapan",
            "slug" => "fatur-full-percakapan",
            "penulis" => "pukime",
            "konten" => "munaroh menikami",
        ],
    ];
    $new_berita = [];
    
    foreach ($data_berita as $berita)
 {

        if($berita["slug"] === $slugp)
             {
            $new_berita = $berita; ///$berita =>[judul, slug, penulis, konten]
            }
    }


    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slugp),
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});