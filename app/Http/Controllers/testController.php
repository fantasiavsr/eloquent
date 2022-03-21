<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class testController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',

            'nama' => data::getNama(),

            'panggilan' =>  data::getPanggilan()
        ]);
    }

    public function biodata()
    {
        return view('biodata', [
            'title' => 'Biodata',

            'nama' => data::getNama(),

            'panggilan' => data::getPanggilan(),

            'alamat' => data::getAlamat(),

            'email' => data::getEmail(),

            'hp' => data::getHp(),

            'hobi' => data::getHobi(),

            'belajar' => data::getBelajar(),

            'quote' => data::getQoute(),

            'quote_author' => data::getQouteAuthor(),

            'link_ig' => data::getLinkIg(),

            'link_git' => data::getLinkGit(),

            'link_wa' => data::getLinkWa()
        ]);
    }

    public function default()
    {
        return view('welcome');
    }

    public function comment()
    {
        return view('comment', [
            'title' => 'Comment'
        ]);
    }
}
