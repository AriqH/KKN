@extends('layouts.main')

@section('container')
<body>
    <div class="text-center mt-5 pt-5">
        <h3>Kegiatan RT 10 Kelurahan Sungai Nangka Balikpapan</h3>
    </div>
    <div class="row mt-5 d-flex flex-wrap">
        @php
            $ptm = [
                'POSBINDU.jpg' => [
                    'title' => 'Pemberian Makanan Tambahan Dari Bank Artha Graha',
                    'description' => 'Pemberian makanan tambahan dari Bank Artha Graha yang dilakukan oleh RT 10 di Kelurahan Sungai Nangka, Balikpapan, mungkin merupakan sebuah inisiatif sosial atau program bantuan makanan yang diselenggarakan oleh Bank Artha Graha bekerja sama dengan pemerintah setempat atau organisasi non-pemerintah lainnya. Program semacam ini biasanya ditujukan untuk membantu masyarakat yang membutuhkan, terutama yang berada dalam kondisi ekonomi kurang mampu atau terdampak oleh krisis atau bencana. Pemberian makanan tambahan bisa berupa paket sembako atau makanan siap saji, tergantung dari sumber daya dan rencana program yang diselenggarakan. Tujuan utamanya adalah untuk memastikan bahwa keluarga yang membutuhkan mendapatkan asupan makanan yang cukup untuk memenuhi kebutuhan nutrisi dasar mereka. Partisipasi RT 10 dalam pelaksanaan program ini menunjukkan kerjasama antara komunitas lokal dan lembaga keuangan atau organisasi lainnya untuk membantu meringankan beban masyarakat yang membutuhkan di wilayah tersebut.',
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
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="fw-bold">{{ $data['title'] }}</h3>
                        <p class="card-text">{{ $data['description'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <img src="{{ asset('gambar/' . $image) }}" class="img-fluid" alt="{{ $image }}">
                    </div>
                </div>
            </div>
        @endforeach
        @foreach ($bnk as $image => $data)
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="fw-bold">{{ $data['title'] }}</h3>
                        <p class="card-text">{{ $data['description'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <img src="{{ asset('gambar/' . $image) }}" class="img-fluid" alt="{{ $image }}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
@endsection
