@extends('layouts.main')

@section('container')
<div class="text-center mt-3 pt-5">
    <h3>Kegiatan RT 10 Kelurahan Sungai Nangka Balikpapan</h3>
</div>
<div class="row mt-5">
    @php
        $ptm = [
            'PSBD2.jpg' => [
                'title' => 'Posbindu PTM (Pos Pelayanan Terpadu Pencegahan dan Pengendalian Penyakit Tidak Menular) ',
                'description' => 'Posbindu PTM (Pos Pelayanan Terpadu Pencegahan dan Pengendalian Penyakit Tidak Menular) merupakan salah satu program pemerintah yang bertujuan untuk melakukan pencegahan dan pengendalian penyakit tidak menular di tingkat masyarakat. Penyakit tidak menular (PTM) adalah jenis penyakit yang tidak disebabkan oleh infeksi dan tidak dapat menular dari satu individu ke individu lainnya, seperti penyakit jantung, diabetes, kanker, dan hipertensi, Posbindu PTM yang dilakukan oleh RT 10 Kelurahan Sungai Nangka Balikpapan adalah upaya untuk memberikan layanan kesehatan preventif kepada masyarakat di tingkat lokal, terutama dalam hal pencegahan penyakit tidak menular. Ini bisa meliputi berbagai kegiatan seperti pemeriksaan kesehatan rutin, penyuluhan tentang gaya hidup sehat, pengukuran tekanan darah, pengukuran gula darah, serta penyuluhan tentang pola makan sehat dan pentingnya aktivitas fisik.Melalui Posbindu PTM, masyarakat dapat mendapatkan edukasi tentang pentingnya menjaga kesehatan, deteksi dini penyakit tidak menular, berupaya melibatkan seluruh lapisan masyarakat dalam upaya pencegahan penyakit tidak menular.',
            ],
            // Add more PTM images and descriptions here
        ];
        $bnk = [
            'BNK1.jpg' => [
                'title' => 'Pemberian Makanan Tambahan Dari Bank Artha Graha',
                'description' => 'Pemberian makanan tambahan dari Bank Artha Graha yang dilakukan oleh RT 10 di Kelurahan Sungai Nangka, Balikpapan, mungkin merupakan sebuah inisiatif sosial atau program bantuan makanan yang diselenggarakan oleh Bank Artha Graha bekerja sama dengan pemerintah setempat atau organisasi non-pemerintah lainnya. Program semacam ini biasanya ditujukan untuk membantu masyarakat yang membutuhkan, terutama yang berada dalam kondisi ekonomi kurang mampu atau terdampak oleh krisis atau bencana. Pemberian makanan tambahan bisa berupa paket sembako atau makanan siap saji, tergantung dari sumber daya dan rencana program yang diselenggarakan. Tujuan utamanya adalah untuk memastikan bahwa keluarga yang membutuhkan mendapatkan asupan makanan yang cukup untuk memenuhi kebutuhan nutrisi dasar mereka. Partisipasi RT 10 dalam pelaksanaan program ini menunjukkan kerjasama antara komunitas lokal dan lembaga keuangan atau organisasi lainnya untuk membantu meringankan beban masyarakat yang membutuhkan di wilayah tersebut.',
            ],
            // Add more BNK images and descriptions here
        ];
    @endphp
    @foreach ($ptm as $image => $data)
        <div class="col-md-6">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3 class="fw-bold tittle">{{ $data['title'] }}</h3>
                    <p class="card-text desc pt-3">{{ $data['description'] }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('gambar/' . $image) }}" class="img-fluid mt-4" alt="{{ $data['title'] }}">
                </div>
            </div>
        </div>
    @endforeach
    @foreach ($bnk as $image => $data)
        <div class="col-md-6">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3 class="fw-bold tittle">{{ $data['title'] }}</h3>
                    <p class="card-text desc pt-5">{{ $data['description'] }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('gambar/' . $image) }}" class="img-fluid mt-5" alt="{{ $data['title'] }}">
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
