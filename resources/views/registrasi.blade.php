@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center mt-3">REGISTRASI AKUN</h1>
            <form method="post" action="register">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="no_handphone">No Handphone</label>
                    <input type="text" class="form-control" id="no_handphone" name="no_handphone" required>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required>
                </div>
                <div class="text-center"> <!-- Tambahkan kelas text-center di sini -->
                    <button type="submit" class="btn btn-primary btn-block mt-5">Daftar Sekarang</button>
                </div>
                <p class="text-center mt-5">Sudah Punya Akun? <a href="login">Login disini</a></p>
            </form>
        </div>
    </div>
@endsection
