@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-5">LAYANAN PENGAJUAN SURAT RT 10 KELURAHAN SUNGAI NANGKA</h1>
        <div class="alert alert-primary text-center" role="alert">
            Selamat Datang Warga RT 10, silahkan pilih layanan yang akan digunakan
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengajuan Surat Pernikahan</h5>
                        <p class="card-text">Administrasi RT 10</p>
                        <a href="pernikahan" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengajuan Surat Pindahan</h5>
                        <p class="card-text">AdministrasiRT 10</p>
                        <a href="pindahan" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengajuan Surat Cerai</h5>
                        <p class="card-text">Administrasi RT 10</p>
                        <a href="cerai" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengajuan Surat Kematian</h5>
                        <p class="card-text">Administrasi RT 10</p>
                        <a href="kematian" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengajuan Surat Kelahiran</h5>
                        <p class="card-text">Administrasi RT 10</p>
                        <a href="kelahiran" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
