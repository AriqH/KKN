@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center mt-3">Pengajuan Surat Kematian</h1>
            <form method="post" action="register">
                <div class="form-group">
                    <label for="nama_meninggal">Nama yang Meninggal</label>
                    <input type="text" class="form-control" id="nama_meninggal" name="nama_meninggal" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_kematian">Tanggal Kematian</label>
                    <input type="date" class="form-control" id="tanggal_kematian" name="tanggal_kematian" required>
                </div>
                <div class="form-group">
                    <label for="tempat_kematian">Tempat Kematian</label>
                    <input type="text" class="form-control" id="tempat_kematian" name="tempat_kematian" required>
                </div>
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Terakhir</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="penyebab_kematian">Penyebab Kematian</label>
                    <textarea class="form-control" id="penyebab_kematian" name="penyebab_kematian" rows="3" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mt-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
