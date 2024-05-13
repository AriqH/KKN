@extends('layouts.main')

@section('container')
<div class="container mt-5 pt-5">
    <h1 class="text-center mb-5">LAYANAN PENGAJUAN SURAT RT 10 KELURAHAN SUNGAI NANGKA</h1>
    <div class="alert alert-primary text-center" role="alert">
        Selamat Datang Warga RT 10,
    </div>
    <article class="panduan">
        <h2 class="text-center">Panduan Pengisian Form Layanan Pengajuan Surat</h2>
        <div class="col-md-10 mt-5">
            <div class="row">
                <h3>1. Buka Tautan</h3>
                <p style="font-size: 150%">Buka tautan yang diberikan kepada Anda untuk <a href="https://forms.gle/quYjvvvNyc3WoJnj8" target="_blank">formulir pengajuan surat</a>.</p>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="row">
                <h3>2. Isi Perihal</h3>
                <p style="font-size: 150%">Isilah perihal anda untuk melakukan pengajuan surat.</p>
            </div>
            <div class="col-12 mt-3"> <!-- Ubah kelas menjadi col-12 -->
                <img src="{{ asset('gambar/surat1.png') }}" >
                <p class="mt-3" style="font-size: 150%">Setelah mengisi perihal pengajuan surat tekan tombol berikutnya</p>
            </div>
            <div class="col-12 mt-3"> <!-- Ubah kelas menjadi col-12 -->
                <img src="{{ asset('gambar/berikutnya.png') }}" >
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="row">
                <h3>3. Isi Data Diri Anda</h3>
                <p style="font-size: 150%">Lakukan pengisian data diri, Nama Lengkap, Nomor KK, NIK, Tempat dan Tanggal Lahir, Jenis Kelamin, Status Perkawinan, Agama, Kewarganegaraan, Pekerjaan dan Alamat.</p>
            </div>
            <div class="col-12 mt-3"> <!-- Ubah kelas menjadi col-12 -->
                <img src="{{ asset('gambar/surat2.png') }}" >
                <img class="mt-3" src="{{ asset('gambar/surat3.png') }}" >
                <img class="mt-3" src="{{ asset('gambar/surat4.png') }}" >
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="row">
                <h3>4. Isi Maksud Pembuatan Surat</h3>
                <p style="font-size: 150%">Isi maksud anda ingin melakukan pembuatan surat seperti pembuatan surat pengantar dan surat domisili.</p>
            </div>
            <div class="col-12 mt-3"> <!-- Ubah kelas menjadi col-12 -->
                <img src="{{ asset('gambar/surat5.png') }}" >
                <p class="mt-3" style="font-size: 150%">Setelah mengisi maksud dari pembuatan surat, selanjutnya klik tombol kirim</p>
            </div>
            <div class="col-12 mt-3"> <!-- Ubah kelas menjadi col-12 -->
                <img src="{{ asset('gambar/surat6.png') }}" >
            </div>
        </div>
    </article>
</div>
@endsection
