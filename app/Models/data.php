<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    private static $home = [
        'title' => 'Home',
        'nama' => 'Muhamad Alif Rizki',
        'panggilan' => 'Alif'
    ];

    private static $nama = "Muhamad Alif Rizki";
    private static $panggilan = "Alif";

    private static $alamat = "Jl. Menur No 4 Malang";
    private static $email = "fantasiavsr@gmail.com";
    private static $hp = "+62 813-5799-5175";
    private static $hobi = "Ngegame, Desain (Logo, Poster, UI, dll), Nonton Anime";
    private static $belajar = "Desain [Adobe Illustrator, Adobe Photoshop, Adobe Premiere Pro], UI & UX
    [Miro, Figma, Maze], Programming [Java, PHP, HTML]";
    private static $quote = "Meskipun dunia penuh dengan hal-hal yang lebih baik tidak kita ketahui, apa kita hanya bisa memalingkan wajah dan melarikan diri? Melarikan diri tidak akan menyelesaikan apapun.";
    private static $quote_author = "Little Buster Refrain";
    private static $link_ig= "https://www.instagram.com/alifvsr/";
    private static $link_git = "https://github.com/fantasiavsr";
    private static $link_wa = "https://wa.me/+6281357995175";



    public static function getNama(){
        return self::$nama;
    }

    public static function getPanggilan(){
        return self::$panggilan;
    }
    public static function getAlamat(){
        return self::$alamat;
    }

    public static function getEmail(){
        return self::$email;
    }

    public static function getHp(){
        return self::$hp;
    }

    public static function getHobi(){
        return self::$hobi;
    }

    public static function getBelajar(){
        return self::$belajar;
    }

    public static function getQoute(){
        return self::$quote;
    }

    public static function getQouteAuthor(){
        return self::$quote_author;
    }

    public static function getLinkIg(){
        return self::$link_ig;
    }

    public static function getLinkGit(){
        return self::$link_git;
    }

    public static function getLinkWa(){
        return self::$link_wa;
    }
}
