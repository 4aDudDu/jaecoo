@extends('layouts.app')

@section('content')
<main class="py-5 bg-white">
    <div class="container">
        <div class="row">
            {{-- Kolom utama artikel, dibatasi lebarnya agar nyaman dibaca --}}
            <div class="col-lg-8 mx-auto">

                {{-- Judul Artikel --}}
                <h1 class="fw-bold text-center text-dark mb-4 mapss">
                    JAECOO J8: Kemewahan dalam Kesunyian di Tengah Hiruk Pikuk Kota
                </h1>

                {{-- Gambar Utama Artikel --}}
                <img src="{{ asset('img/beritata1.avif') }}" class="img-fluid rounded shadow-sm mb-5" alt="JAECOO J8 di jalan raya">

                {{-- Isi Artikel --}}
                <article class="article-content text-dark">
                    <p class="lead">
                        Prinsip perlindungan komprehensif terhadap suara yang tidak perlu di dalam kabin, yang diimplementasikan pada crossover unggulan JAECOO J8, membawa kenyamanan dalam perjalanan di metropolitan yang padat ke tingkat yang baru.
                    </p>
                    <p>
                        Isolasi kebisingan berlapis pada lantai, pintu, dan bagasi berfungsi sebagai penghalang tak terlihat antara pengemudi dan dunia luar. Isolasi getaran tidak hanya menghilangkan kebisingan jalan, tetapi juga suara berderit kecil yang dapat mengganggu konsentrasi.
                    </p>
                    <p>
                        Kualitas keputusan ini dikonfirmasi oleh konsumen. Teknologi dan kenyamanan di dalam kabin telah menjadi karakteristik utama JAECOO J8, yang cenderung dibeli oleh 3 dari 4 pemilik. Hal ini menyusul dari studi potret pengemudi, yang dilakukan pada Juni 2025. Isolasi kebisingan yang efektif memberikan tingkat ketenangan kualitatif yang baru dalam perjalanan.
                    </p>
                    <p>
                        Ketika kebisingan eksternal dihilangkan, kualitas suara di dalam kabin menjadi sangat penting. Sistem audio Sony mencakup hingga 14 speaker yang menciptakan ruang suara volumetrik. Dua di antaranya terpasang di sandaran kepala, yang memungkinkan pengemudi mendapatkan arah suara: percapan telepon melalui speakerphone akan tetap privat, dan penumpang lainnya dapat terus menikmati keheningan atau musik.
                    </p>
                    <p>
                        Detail interior melengkapi gambaran keseluruhan kenyamanan: fungsi pijat di kursi baris depan, dukungan kaki-jari penumpang depan, dan sentuhan akhir kulit Nappa memenuhi standar tinggi crossover premium, di mana setiap elemen berfungsi untuk menciptakan lingkungan yang ideal.
                    </p>
                    <p>
                        JAECOO J8 memahami nilai waktu perjalanan yang berkualitas. Di sini, kemewahan tidak diukur dari jumlah fungsi, tetapi dari seberapa alami dan nyaman yang dirasakan setiap pengemudi dan penumpang.
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

    /* Penyesuaian agar hyperlink tidak aktif dan berwarna hitam */
    .text-center a {
        color: #000; /* Warna link diubah menjadi hitam */
        text-decoration: none;
        pointer-events: none;
        cursor: default;
    }
    
</style>
@endpush