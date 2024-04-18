@extends('layouts.main')

@section('container')
        <header class="w100 min-vh-100 d-flex align-items-center">
          <div class="container">
            <div class="row header-box d-flex align-items-center pt-lg-5">
              <div class="col-lg-6 text-justify"> <!-- Tambahkan kelas text-center di sini -->
                <h1 class=" mb-2">
                  Layanan <br>
                  <span>Administrasi</span> <br>
                </h1>
                <p class="text-justify">Selamat Datang Di Layanan Administrasi RT.10 Kelurahan Sungai Nangka</p>
                {{-- <div class="button-daftar">
                  <button class="btn btn-success btn-lg rounded-1 me-2 text-decoration-none">
                    <Link to="/daftar">Daftar Sekarang </Link>
                  </button>
                </div> --}}
              </div>
              {{-- <div class="col-lg-6 pt-lg-0 pt-5">
                <img src="{HeroImage}" alt="hero-img" class="img-fluid float-lg-end" style="max-height: 400px;">
              </div> --}}
            </div>
          </div>
        </header>
@endsection
