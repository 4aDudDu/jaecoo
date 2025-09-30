@extends('layouts.app')

@section('content')
<main class=".py-5 bg-white mapss">
    <div class="container">
        <div class="row">
            {{-- Kolom utama artikel, dibatasi lebarnya agar nyaman dibaca --}}
            <div class="col-lg-8 mx-auto">

                {{-- Judul Artikel --}}
                <h1 class="fw-bold text-center text-dark mb-4 mapss">
                    OMODA & JAECOO Cetak Rekor Penjualan Global Baru pada Agustus 2025
                </h1>

                {{-- Gambar Utama Artikel --}}
                {{-- GANTI NAMA GAMBAR INI SESUAI GAMBAR ANDA --}}
                <img src="{{ asset('img/beritata2.jpg') }}" class="img-fluid rounded shadow-sm mb-5" alt="Showroom mobil JAECOO">

                {{-- Isi Artikel --}}
                <article class="article-content text-dark">
                    <p class="lead">
                        Pada Agustus 2025, merek OMODA dan JAECOO mencetak rekor baru untuk penjualan global: sebanyak 32.514 mobil terjual di tingkat dunia selama sebulan. Dengan demikian, hanya dalam 28 bulan sejak peluncuran merek, total volume penjualan melebihi 630.000 unit, di mana 211.682 transaksi terjadi dari Januari hingga Agustus 2025. Angka ini 38% lebih banyak dibandingkan delapan bulan pertama tahun lalu, yang memungkinkan merek-merek ini tetap menjadi pemimpin dalam pertumbuhan di antara perwakilan industri otomotif Tiongkok lainnya.
                    </p>
                    <p>
                        Pendorong utama peningkatan kehadiran OMODA dan JAECOO di pasar global adalah mobil dengan sumber energi alternatif (NEV). Pada bulan Agustus, model hibrida dan listrik sepenuhnya menyumbang 57% dari total penjualan (18.582 mobil terjual), dan secara total selama delapan bulan tahun 2025, jumlah produk transportasi NEV yang terjual mencapai 100.358. Berkat sistem Super Hybrid yang canggih, kedua merek ini dengan percaya diri bergerak menuju kepemimpinan global di segmen mobil hibrida.
                    </p>
                    <p>
                        Permintaan yang sangat tinggi terlihat pada crossover JAECOO J7 SHS, yang dilengkapi dengan sistem superhibrida inovatif. Pada Agustus 2025 saja, 7.089 mobil model ini terjual. Teknologi Super Hybrid System yang dikembangkan oleh OMODA dan JAECOO memberikan konsumsi bahan bakar yang sangat rendah, cadangan daya jarak jauh, dan perpindahan cerdas antara mode bensin dan listrik. Sistem ini menggabungkan efisiensi tinggi, efektivitas, dan keamanan, menawarkan pengalaman baru yang fundamental dalam menggunakan mobil ramah lingkungan kepada pengguna. Di lima dari sepuluh pasar di mana model JAECOO J7 SHS saat ini tersedia, model ini tetap menjadi pemimpin di segmen mobil hibrida.
                    </p>
                    <p>
                        Yang juga populer adalah crossover kompak JAECOO J5 BEV yang baru diumumkan dengan powertrain listrik sepenuhnya: pada hari pertama peluncurannya di Thailand, lebih dari 4.000 pra-pesan telah dibuat untuk model ini.
                    </p>
                </article>

                <hr class="my-5"> {{-- Garis pemisah --}}

            </div>
        </div>
    </div>
</main>
@endsection

@push('styles')
<style>
    /* Styling dasar untuk paragraf artikel */
    .article-content p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #000; /* Warna teks diubah menjadi hitam pekat */
        margin-bottom: 1.5rem;
        text-align: justify;
    }

    /* Styling responsif untuk gambar */
    .img-fluid {
        max-width: 100%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@endpush