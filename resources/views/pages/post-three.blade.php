@extends('layouts.app')

@section('content')
<main class="py-5 bg-white mapss">
    <div class="container">
        <div class="row">
            {{-- Kolom utama artikel, dibatasi lebarnya agar nyaman dibaca --}}
            <div class="col-lg-8 mx-auto">

                {{-- Judul Artikel --}}
                <h1 class="fw-bold text-center text-dark mb-4 mapss">
                    Mengenal Teknologi Superhybrid SHS: Solusi Mobilitas Masa Depan dari OMODA & JAECOO
                </h1>

                {{-- Gambar Utama Artikel --}}
                {{-- PENTING: Ganti nama gambar ini dengan nama file gambar Anda yang relevan --}}
                <img src="{{ asset('img/berita3.jpg') }}" class="img-fluid rounded shadow-sm mb-5" alt="Teknologi Superhybrid SHS JAECOO">

                {{-- Isi Artikel --}}
                <article class="article-content text-dark">
                    <p class="lead">
                        Teknologi superhybrid SHS, yang dikembangkan oleh OMODA dan JAECOO khusus untuk pasar global, menawarkan jenis mobilitas yang baru secara fundamental kepada pengguna: tanpa kekhawatiran tentang jarak tempuh, tanpa kompromi performa, dan dengan dampak lingkungan yang minimal. Sistem ini menggabungkan tenaga luar biasa, efisiensi tinggi, dan keamanan yang ditingkatkan, menyajikan solusi komprehensif di bidang mobil dengan sistem hibrida.
                    </p>

                    <h4 class="fw-bold mt-5 mb-3">Tiga Komponen Kunci di Balik Hibrida Universal</h4>
                    <p>
                        Teknologi Super Hybrid System (SHS) melampaui solusi tradisional di mana hanya satu komponen yang dioptimalkan—mesin, transmisi, atau baterai. Sebaliknya, SHS memberikan kombinasi sempurna antara efisiensi dan kenyamanan berkat integrasi mendalam dari tiga komponen utama: mesin hibrida (DHE), transmisi hibrida khusus (DHT), dan baterai hibrida berkinerja tinggi.
                    </p>
                    <p>
                        Sistem ini didasarkan pada mesin 1.5TDGI generasi kelima, yang menggabungkan enam teknologi modern, termasuk siklus Miller dan sistem pembakaran cerdas i-HEC. Berkat sinergi inovasi ini, efisiensi termal ultra-tinggi hingga 44.5% tercapai—sebuah indikator yang memenuhi standar internasional terbaik. Penggunaan energi yang efisien menghasilkan pengurangan konsumsi bahan bakar dan emisi karbon dioksida yang signifikan, memberikan dasar yang andal untuk mobil yang ekonomis dan ramah lingkungan. Mesin adaptif ini stabil dan andal mengatasi skenario operasi apa pun—mulai dari perjalanan kota hingga off-road.
                    </p>
                    <p>
                        Transmisi hibrida khusus (DHT), yang dirancang khusus untuk arsitektur hibrida, mendukung perpindahan cerdas antara empat mode operasi: listrik penuh, serial, paralel, dan mode pemulihan energi. Pada perjalanan kecepatan rendah di lingkungan perkotaan, mobil beroperasi dalam mode listrik penuh, memberikan pergerakan yang senyap dan mulus tanpa konsumsi bahan bakar. Saat bergerak dengan kecepatan sedang dan tinggi, sistem secara otomatis beralih menggunakan bahan bakar dalam mode operasi dari mesin pembakaran internal, dan dalam kondisi beban tinggi—saat mendaki gunung, menyalip, atau akselerasi tajam—mesin dan motor listrik bekerja sama, mengeluarkan potensi dinamis yang kuat.
                    </p>
                    <p>
                        Baterai hibrida berkinerja tinggi menetapkan standar keamanan dan keandalan baru. Dilengkapi dengan sistem perlindungan komprehensif, baterai ini menunjukkan ketahanan panas yang tinggi, tahan terhadap guncangan dan air, menjamin operasi mobil yang stabil bahkan dalam kondisi paling sulit sekalipun. Jika terjadi kecelakaan, keselamatan pengemudi dan penumpang dijamin oleh fungsi pemutusan daya ultra-cepat dalam 2 milidetik setelah tabrakan.
                    </p>
                    
                    <h4 class="fw-bold mt-5 mb-3">Adaptabilitas Global: Solusi Ramah Lingkungan di Segala Kondisi</h4>
                    <p>
                        Teknologi superhybrid SHS dirancang dengan mempertimbangkan beragam kondisi pengoperasian mobil di seluruh dunia: dari ruang bersalju yang dingin hingga gurun yang panas, dari daerah dataran tinggi hingga wilayah pesisir yang lembab. OMODA dan JAECOO, sejak awal pengembangan, telah memperhitungkan kondisi iklim, situasi jalan yang sulit, dan kebiasaan pengguna di berbagai wilayah untuk memastikan operasi sistem yang stabil, efisien, dan aman di mana pun di dunia.
                    </p>
                    <p>
                        Efisiensi tinggi dari teknologi Super Hybrid System menjamin penghematan luar biasa dalam konsumsi bahan bakar dan secara signifikan mengurangi emisi CO2. Keuntungan ini memungkinkan untuk memenuhi standar lingkungan yang semakin ketat dan mengurangi biaya operasional, memberikan manfaat ganda. Perpindahan cerdas antara mesin pembakaran internal dan penggerak listrik memungkinkan untuk menghilangkan kekhawatiran tentang cadangan daya yang mungkin dialami oleh pemilik mobil listrik sepenuhnya.
                    </p>
                    <p>
                        Teknologi superhybrid SHS adalah sebuah pemikiran ulang tentang masa depan mobilitas. Seiring teknologi ini terus berkembang dan memperluas kehadirannya, solusi hibrida Super Hybrid System akan dapat menetapkan standar baru untuk kendaraan yang ekonomis dan ramah lingkungan bagi masyarakat modern di seluruh dunia.
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