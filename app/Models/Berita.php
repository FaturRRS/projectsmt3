<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
   private static $data_berita = [
        [
            "judul" => "Musang UNIMUS",
            "slug" => "unimus-Musang",
            "penulis" => "Kumpulan Musang aseli UNIMUS",
            "konten" => "ga dijual tapi klo 100k+ kandang auto lepas",
        ],
        [
            "judul" => "UNIMUS Gacor",
            "slug"=> "keGacoran UNIMUS",
            "penulis" => "Bukti keGacoran UNIMUS",
            "konten" => "Gaboleh Sombong Kalo gajago",
        ],
        [
            "judul" => "Koleksi Ambatunner",
            "slug" => "Seluruh Koleksi Ambatunner",
            "penulis" => "Ambatunner Speed Garage",
            "konten" => "Kumpulan Pict yang Menarik dan Menggoda garapan Ambatunner",
        ],
    ];

    public static function ambildata()
    {
        return self::$data_berita;
    }

    public static function caridata($slugp)
    {
        $data_beritas = self::$data_berita;

         $new_berita = [];    
    foreach ($data_beritas as $berita)
    {
        if($berita["slug"] === $slugp)
        {            
            $new_berita = $berita; ///$berita =>[judul, slug, penulis, konten]
        }
    }
    return $new_berita;
    }
}
