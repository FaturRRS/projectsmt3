<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
   private static $data_berita = [
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

    public static function caridata($slug)

    public static function caridata($slug)
    {
        $data_beritas = self::$data_berita;

         $new_berita = [];
    
    foreach ($data_berita as $berita)
 {

        if($berita["slug"] === $slugp)
             {
            $new_berita = $berita; ///$berita =>[judul, slug, penulis, konten]
            }
    }
    return $new_berita;
    }
}
