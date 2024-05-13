@extends('layouts.main')

@section('container')
<header class="w100 min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row header-box d-flex align-items-center pt-lg-5">
            <div class="col-lg-6">
                <h1 class="mb-2 text-center">
                    Sistem Administrasi<br>
                   <span>RT 10 Kelurahan Sungai Nangka</span>
                </h1>
                <div class="info-box">
                    <p class="mt-5">Sistem Administrasi RT 10 adalah sistem berbasis website yang dapat digunakan sebagai pengajuan administrasi RT yang diperlukan seperti Surat Pengantar dan Surat Keterangan Domisili. Tujuan adanya website ini, sebagai media peningkatan digitalisasi terkait penataan administrasi.</p>
                </div>
            </div>
            <div class="col-lg-6 pt-4">
                <img src="{{ asset('gambar/anime.png') }}" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</header>

<div class="container mt-5">
    <h1 class="text-center mb-4">Kegiatan RT 10 Kelurahan Sungai Nangka</h1>
    <div class="row">
        @foreach (['POSBINDU.jpg', 'PSY1.jpg', 'PSY2.jpg', 'PSY3.jpg', 'PSY4.jpg', 'PSY5.jpg', 'PSY6.jpg', 'PSY7.jpg', 'PSY8.jpg', 'PSY9.jpg', 'PSY10.jpg', 'PSY11.jpg', 'BNK1.jpg', 'BNK2.jpg', 'BNK3.jpg', 'BNK4.jpg', 'BNK5.jpg'] as $image)
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ asset('gambar/' . $image) }}" class="card-img-top" alt="{{ $image }}" style="height: 300px; object-fit: cover;">
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

