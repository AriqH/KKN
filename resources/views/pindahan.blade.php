@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center mt-3">Surat Pindah</h1>
            <form method="post" action="register">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="nik">Nomor KTP / KK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                </div>
                <div class="form-group">
                    <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" required>
                </div>
                <div class="form-group">
                    <label for="status_kawin">Status Perkawinan</label>
                    <input type="text" class="form-control" id="status_kawin" name="status_kawin" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" required>
                </div>
                <div class="form-group">
                    <label for="alamat_lama">Alamat Lama</label>
                    <input type="text" class="form-control" id="alamat_lama" name="alamat_lama" required>
                </div>
                <div class="form-group">
                    <label for="alamat_baru">Alamat Baru</label>
                    <input type="text" class="form-control" id="alamat_baru" name="alamat_baru" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mt-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

