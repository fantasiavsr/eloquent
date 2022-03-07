@extends('layouts\main')

@section('content')
    <div class="container-fluid pt-3 pb-5 bg-light">
        <div class="container pt-5 pb-5">
            <h1 class="display-2">Selamat Datang, Mari Belajar Pemrogaman Web Lanjut dengan Laravel dan
                Bootstrap.</h1>
            <br>
            <div class="row align-item-bottom pt-5">
                <div class="col">
                    <a href="/biodata" class="btn btn-dark btn-lg">About Me</a>
                    <a href="" class="btn btn-outline-secondary btn-lg">Comment</a>
                </div>
                <div class="col-auto">
                    <p class="lead pt-3">by {{ $nama }} | Monday, 7 March, 2022</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="row align-items-top">
                <div class="col">
                    <img class="img-fluid" src="img/img1.png" alt="" style="width: 550px">
                </div>
                <div class="col">
                    <h1 class="display-2">Saya menggunakan Visual Studio Code</h1>
                    <br>
                    <p class="lead">Kenapa saya memilih Visual Studio Code? Jawabannya mudah, karena software yang
                        satu ini gratis! Selain itu saya suka dengan desainnya yang simple jadi mudah digunakannya. Di
                        samping itu itu saya juga penggemar dark mode, karena mata saya sudah terbiasa dengan yang gelap
                        gelap.</p>
                </div>
            </div>
        </div>


        <div class="container pt-5 pb-5 mb-5 bg-dark text-white border border-danger border-1">
            <div class="container ">
                <div class="row align-items-top">
                    <div class="col-auto">
                        {{-- buat jarak --}}
                    </div>
                    <div class="col">
                        <h1 class="display-4">Laravel 9</h1>
                        <p class="lead">
                            Saya menggunakan Laravel 9 sebagai framework PHP. Dengan bantuan Laravel, pembuatan website menjadi
                            lebih tertata dan mudah.
                        </p>
                    </div>
                    <div class="col-3">
                        {{-- buat jarak --}}
                    </div>
                    <div class="col-auto">
                        <img src="img/laravel.png" alt="" class="img-fluid" style="width: 200px">
                    </div>
                    <div class="col-auto">
                        {{-- buat jarak --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5 pb-5 mb-5 bg-dark text-white border border-primary border-1">
            <div class="container">
                <div class="row align-items-top">
                    <div class="col-auto">
                        {{-- buat jarak --}}
                    </div>
                    <div class="col">
                        <h1 class="display-4">Bootstrap</h1>
                        <p class="lead">
                            Saya juga menggunakan Bootstrap untuk membantu mempercantik desain web yang sedang saya buat.
                        </p>
                    </div>
                    <div class="col-4">
                        {{-- buat jarak --}}
                    </div>
                    <div class="col-auto">
                        <img src="img/bs.png" alt="" class="img-fluid" style="width: 200px">
                    </div>
                    <div class="col-auto">
                        {{-- buat jarak --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
