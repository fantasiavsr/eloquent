<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataHome;

class homeController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => dataHome::find(1)->title,

            'nama' => dataHome::find(1)->nama,

            'panggilan' => dataHome::find(1)->panggilan
        ]);
    }
}
