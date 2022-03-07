@extends('layouts\main')

@section('content')
    <div class="container-full-bg" id="home">

        <div class="container-fluid  jumbotron text-white jumbotron-image "
            style="background-image: url('https://source.unsplash.com/OgqO_FymG_0/);">
            <br><br><br><br><br><br>
            <div class="container pt-3 pb-5">
                <h1 class="display-1">{{ $nama }}</h1>
                <p class="lead">
                    Alias {{ $panggilan }}
                </p>
                <br>
                <p><a class="btn btn-lg btn-success" href="#contact" role="button">Contact Me</a></p>
            </div>
            <br><br><br>
        </div>
    </div>


    <div class="container-fluid bg-dark text-white">
        <div class="container pt-5 pb-5">
            <div class="row align-item-bottom">
                <div class="col-8">
                    <h3 class="fw-light">{{ $quote }}
                    </h3>
                </div>
                <div class="col-auto">
                </div>
            </div>

            <div class="row align-item-bottom pt-5">
                <div class="col">

                </div>
                <div class="col-auto">
                    <p class="lead pt-3 text-secondary">{{ $quote_author }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light text-black pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <h1 class="display-1">Biodata Diri</h1>
            <div class="row align-item-bottom pt-5">
                <div class="col">
                    <p class="fw-normal fs-3 text-secondary">Nama Lengkap</p>
                    <p class="fw-bold fs-3 ">{{ $nama }}</p>
                    <hr>
                    <p class="fw-normal fs-3 text-secondary">Panggilan</p>
                    <p class="fw-bold fs-3 ">{{ $panggilan }}</p>
                    <hr>
                    <p class="fw-normal fs-3 text-secondary">Alamat</p>
                    <p class="fw-bold fs-3 ">{{ $alamat }}</p>
                    <hr>
                    <p class="fw-normal fs-3 text-secondary">Email</p>
                    <p class="fw-bold fs-3 ">{{ $email }}</p>
                    <hr>
                    <p class="fw-normal fs-3 text-secondary">Nomor Telepon</p>
                    <p class="fw-bold fs-3 ">{{ $hp }}</p>
                    <hr>
                    <p class="fw-normal fs-3 text-secondary">Hobi</p>
                    <p class="fw-bold fs-3 ">{{ $hobi }}</p>
                    <hr>
                    <p class="fw-normal fs-3 text-secondary">Sudah/Sedang Mempelajari</p>
                    <p class="fw-bold fs-3 ">{{$belajar}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light text-black pt-5 pb-5" id="contact">
        <div class="container pt-5 pb-5 mb-5 bg-light text-blac border border-success border-3">
            <div class="container">
                <div class="row align-items-top">
                    <div class="col-auto">
                        {{-- buat jarak --}}
                    </div>
                    <div class="col">
                        <h1 class="display-4">Contact Me</h1>
                        <p class="lead">
                            Hubungi saya melalui social media atau nomor telepon.
                        </p>
                        <br>
                        <a href="{{ $link_ig }}" target="_blank">
                            <div class=""><img src="img/ig.png"
                                    style="height:45px; float: left; margin-right: 30px;">
                            </div>
                        </a>
                        <a href="{{ $link_git }}" target="_blank">
                            <div class=""><img src="img/git.png"
                                    style="height:45px; float: left; margin-right: 30px;"></div>
                        </a>
                        <a href="{{ $link_wa }}" target="_blank">
                            <div class=""><img src="img/wa.png" style="height:45px; "></div>
                        </a>
                    </div>
                    <div class="col-4">
                        {{-- buat jarak --}}
                    </div>
                    <div class="col-auto">
                        {{-- buat jarak --}}
                    </div>
                    <div class="col-auto">
                        {{-- buat jarak --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
