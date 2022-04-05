<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataBiodata;

class biodataController extends Controller
{
    public function index()
    {
        return view('biodata', [
            'title' => dataBiodata::find(1)->title,

            'nama' => dataBiodata::find(1)->nama,

            'panggilan' => dataBiodata::find(1)->panggilan,

            'alamat' => dataBiodata::find(1)->alamat,

            'email' => dataBiodata::find(1)->email,

            'hp' => dataBiodata::find(1)->hp,

            'hobi' => dataBiodata::find(1)->hobi,

            'belajar' => dataBiodata::find(1)->belajar,

            'quote' => dataBiodata::find(1)->quote,

            'quote_author' => dataBiodata::find(1)->quote_author,

            'link_ig' => dataBiodata::find(1)->link_ig,

            'link_git' => dataBiodata::find(1)->link_git,

            'link_wa' => dataBiodata::find(1)->link_wa,
        ]);
    }
}
