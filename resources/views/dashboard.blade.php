@extends('layouts.main')

@section('container')
    <header class="w100 min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row header-box d-flex align-items-center pt-lg-5">
                <div class="col-lg-6 text-center">
                    <h1 class="mb-2">
                        Layanan Administrasi<br>
                        <span>RT 10 Kelurahan Sungai Nangka</span>
                    </h1>
                </div>
                <div class="col-lg-6 pt-4">
                    <img src="{{ asset('gambar/anime.png') }}"  style="max-width: 100%; height: auto;">
                </div>
            </div>
        </header>
        <body>
            <div class="text-center">
                <h3>Kegiatan RT 10 Kelurahan Sungai Nangka Balikpapan</h3>
            </div>
            <div class="row mt-5 d-flex flex-wrap">
                @php
                    $images = [
                        'POSBINDU.jpg',
                        'PSY1.jpg',
                        'PSY2.jpg',
                        'PSY3.jpg',
                        'PSY4.jpg',
                        'PSY5.jpg',
                        'PSY6.jpg',
                        'PSY7.jpg',
                        'PSY8.jpg',
                        'PSY9.jpg',
                        'PSY10.jpg',
                        'PSY11.jpg',
                        'BNK1.jpg',
                        'BNK2.jpg',
                        'BNK3.jpg',
                        'BNK4.jpg',
                        'BNK5.jpg',
                    ];
                @endphp
                @foreach ($images as $image)
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem; height: 200px; margin-top: 20px;">
                            <img src="{{ asset('gambar/'. $image) }}" class="card-img-top img-fluid" alt="..." style="height: 100%; object-fit: cover;">
                        </div>
                    </div>
                @endforeach
            </div>
        </body>
@endsection
