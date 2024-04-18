@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center mt-3">Pengajuan Surat Pernikahan </h1>
            <form method="post" action="register">
                <div class="form-group">
                    <label for="nama_mempelai_pria">Nama Mempelai Pria</label>
                    <input type="text" class="form-control" id="nama_mempelai_pria" name="nama_mempelai_pria" required>
                </div>
                <div class="form-group">
                    <label for="nik_mempelai_pria">Nomor KTP Mempelai Pria</label>
                    <input type="text" class="form-control" id="nik_mempelai_pria" name="nik_mempelai_pria" required>
                </div>
                <div class="form-group">
                    <label for="alamat_mempelai_pria">Alamat Mempelai Pria</label>
                    <input type="text" class="form-control" id="alamat_mempelai_pria" name="alamat_mempelai_pria" required>
                </div>
                <div class="form-group">
                    <label for="nama_mempelai_wanita">Nama Mempelai Wanita</label>
                    <input type="text" class="form-control" id="nama_mempelai_wanita" name="nama_mempelai_wanita" required>
                </div>
                <div class="form-group">
                    <label for="nik_mempelai_wanita">Nomor KTP Mempelai Wanita</label>
                    <input type="text" class="form-control" id="nik_mempelai_wanita" name="nik_mempelai_wanita" required>
                </div>
                <div class="form-group">
                    <label for="alamat_mempelai_wanita">Alamat Mempelai Wanita</label>
                    <input type="text" class="form-control" id="alamat_mempelai_wanita" name="alamat_mempelai_wanita" required>
                </div>
                <div class="form-group">
                    <label for="tempat_pernikahan">Tempat Pernikahan</label>
                    <input type="text" class="form-control" id="tempat_pernikahan" name="tempat_pernikahan" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_pernikahan">Tanggal Pernikahan</label>
                    <input type="date" class="form-control" id="tanggal_pernikahan" name="tanggal_pernikahan" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mt-5">Ajukan Surat Pernikahan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
