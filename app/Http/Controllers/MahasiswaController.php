<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('/mahasiswa',[
            "title"=>"Data Mahasiswa"
        ]);
        }
         public function tambahmahasiswa()
    {
        return view('tambahmahasiswa',[
            "title"=>"Tambah Data Mahasiswa"
        ]);
        }
        public function insertdata(Request $request)
       {
            Mahasiswa::create($request->all());
       }
}

