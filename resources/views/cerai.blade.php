@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center mt-3">Pengajuan Surat Cerai</h1>
            <form method="post" action="register">
                <div class="form-group">
                    <label for="nama_suami">Nama Suami</label>
                    <input type="text" class="form-control" id="nama_suami" name="nama_suami" required>
                </div>
                <div class="form-group">
                    <label for="nik_suami">Nomor KTP Suami</label>
                    <input type="text" class="form-control" id="nik_suami" name="nik_suami" required>
                </div>
                <div class="form-group">
                    <label for="nama_istri">Nama Istri</label>
                    <input type="text" class="form-control" id="nama_istri" name="nama_istri" required>
                </div>
                <div class="form-group">
                    <label for="nik_istri">Nomor KTP Istri</label>
                    <input type="text" class="form-control" id="nik_istri" name="nik_istri" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Terakhir Bersama</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="alasan_cerai">Alasan Cerai</label>
                    <textarea class="form-control" id="alasan_cerai" name="alasan_cerai" rows="3" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mt-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
