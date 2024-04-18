@extends('layouts.admin')

@section('admin')
<div class="row mt-5">
    <div class="col-md-10 offset-md-1">
        <h2 class="text-center">Daftar Pengajuan Surat Cerai</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Suami</th>
                    <th scope="col">Nomor KTP Suami</th>
                    <th scope="col">Nama Istri</th>
                    <th scope="col">Nomor KTP Istri</th>
                    <th scope="col">Alamat Terakhir Bersama</th>
                    <th scope="col">Alasan Cerai</th>
                    <th scope="col">Tanggal Input</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuan_surat_cerai as $pengajuan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengajuan->nama_suami }}</td>
                    <td>{{ $pengajuan->nik_suami }}</td>
                    <td>{{ $pengajuan->nama_istri }}</td>
                    <td>{{ $pengajuan->nik_istri }}</td>
                    <td>{{ $pengajuan->alamat }}</td>
                    <td>{{ $pengajuan->alasan_cerai }}</td>
                    <td>{{ $pengajuan->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
