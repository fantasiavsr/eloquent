@extends('layouts\main')

@section('content')
    <div class="container-fluid pt-3  bg-light">
        <div class="container pt-5">
            <h1 class="display-2">Silahkan Tinggalkan Komentar yang Mengesankan dan Memotivasi.</h1>
            <br>
        </div>
    </div>

    <div class="container-fluid bg-light text-black pt-5 pb-5">
        <div class="container  pb-5">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control bg-light text-secondary" id="inputEmail" placeholder="abc@gmail.com">
                </div>
                <div class="col-md-6">
                    <label for="inputName" class="form-label">Nama</label>
                    <input type="text" class="form-control bg-light text-secondary" id="inputName" placeholder="Muhamad Alif Rizki">
                </div>
                <div class="mb-3">
                    <label for="textarea" class="form-label">Comment</label>
                    <textarea class="form-control bg-light text-secondary" id="inputComment" rows="7"></textarea>
                  </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
