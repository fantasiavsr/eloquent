<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/default', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',

        'nama' => 'Muhamad Alif Rizki',

        'panggilan' => 'Alif'
    ]);
});

Route::get('/biodata', function () {
    return view('biodata', [
        'title' => 'Biodata',

        'nama' => 'Muhamad Alif Rizki',

        'panggilan' => 'Alif',

        'alamat' => 'Jl. Menur No 4 Malang',

        'email' => 'fantasiavsr@gmail.com',

        'hp' => '+62 813-5799-5175',

        'hobi' => 'Ngegame, Desain (Logo, Poster, UI, dll), Nonton Anime',

        'belajar' => 'Desain [Adobe Illustrator, Adobe Photoshop, Adobe Premiere Pro], UI & UX
        [Miro, Figma, Maze], Programming [Java, PHP, HTML]',

        'quote' => 'Meskipun dunia penuh dengan hal-hal yang lebih baik tidak kita ketahui, apa
        kita hanya bisa memalingkan wajah dan melarikan diri? Melarikan diri tidak akan menyelesaikan apapun.',

        'quote_author' => 'Little Buster Refrain',

        'link_ig' => 'https://www.instagram.com/alifvsr/',

        'link_git' => 'https://github.com/fantasiavsr',

        'link_wa' => 'https://wa.me/+6281357995175'
    ]);
});

Route::get('/comment', function () {
    return view('comment', [
        'title' => 'Comment'
    ]);
});
