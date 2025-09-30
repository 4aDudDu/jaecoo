@extends('layouts.app')

@section('content')
<style>

        /* --- CSS BARU UNTUK SPESIFIKASI MODEL --- */
    .spec-section {
        background-color: #f7f7f7; /* Latar belakang abu-abu muda sesuai gambar */
        padding: 4rem 0;
    }
    .spec-item {
        text-align: center;
        padding: 1rem;
    }
    .spec-value {
        font-size: 3.5rem; /* Ukuran font besar untuk nilai */
        font-weight: 900;
        line-height: 1;
        color: #2c3e50; 
        display: inline-block;
        margin-right: 0.5rem;
    }
    .spec-label {
        font-size: 0.75rem; /* Ukuran font kecil untuk label */
        font-weight: 600;
        text-transform: uppercase;
        color: #7f8c8d;
        line-height: 1.2;
        display: inline-block;
        vertical-align: top;
        padding-top: 1.5rem; /* Atur posisi label agar sejajar dengan bagian atas angka besar */
    }
    /* Responsive untuk mobile */
    @media (max-width: 768px) {
        .spec-value {
            font-size: 2.5rem;
        }
        .spec-label {
             padding-top: 0.5rem;
             font-size: 0.6rem;
        }
    }
    /* --- AKHIR CSS SPESIFIKASI MODEL --- */
    /* CSS Kustom Tambahan */
    /* ... (CSS Karosel dan Caption tidak berubah) ... */
    .caption-content {
        color: white; 
        /* background: rgba(0, 0, 0, 0.4);  */
        padding: 10px;
        border-radius: 8px;
        display: inline-block;
    }

    /* CONTAINER CARD */
    .feature-card {
        padding: 15px 15px 15px 0; 
        border-radius: 0; 
        box-shadow: none; 
        border-bottom: none; 
        transition: background-color 0.3s;
        height: 100%;
        cursor: pointer;
        position: relative; 
        overflow: hidden; 
    }
    
    /* GAYA CARD AKTIF BARU */
    .feature-card.active {
        background-color: transparent !important; 
        padding-left: 15px; 
        padding-right: 15px;
    }

    /* GARIS BIRU TEBAL DI ATAS JUDUL UNTUK CARD AKTIF (Diberi Transisi) */
    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0; 
        height: 4px; 
        background-color: #007bff; 
        transition: width 0.4s ease-out; 
    }
    .feature-card.active::before {
        width: 100%; 
    }

    /* TITLE DAN DESKRIPSI (Diberi Transisi Opacity) */
    .feature-title {
        font-weight: 700;
        color: #2c3e50; 
        margin-top: 5px;
        margin-bottom: 5px;
        font-size: 1rem; 
        transition: all 0.3s; 
    }
    
    .feature-card.active .feature-title {
        font-weight: 800;
        color: #000;
    }

    .feature-card:not(.active) .feature-title {
        font-weight: 600;
        color: #6c757d;
    }
    
    .feature-description,
    .feature-card a {
        transition: opacity 0.3s ease-in-out; 
    }
    
    .feature-description {
        color: #7f8c8d; 
        font-size: 0.8rem; 
    }

    /* Menyembunyikan deskripsi dan link saat card tidak aktif */
    .feature-card:not(.active) .feature-description,
    .feature-card:not(.active) a {
        display: block; 
        opacity: 0;
        pointer-events: none; 
        max-height: 0; 
        overflow: hidden;
        margin-bottom: 0;
    }

    .feature-card.active .feature-description,
    .feature-card.active a {
        opacity: 1;
        max-height: 100px; 
    }
    
/* GAMBAR DINAMIS - SOLUSI RESPONSIVITAS */
.image-ratio-container {
    position: relative;
    /* --- PERUBAHAN TINGGI (DIPERLOMBAKAN) --- */
    /* Mengurangi dari 56.25% menjadi 40% (membuat gambar lebih pendek/ramping) */
    padding-top: 40%; 
    height: 0;
    overflow: hidden;
}
#feature-display-image {
    /* Gambar mengambil ruang penuh dari kontainer rasio */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; /* Dibiarkan 100% dari container agar terisi penuh */
    object-fit: cover; /* Pastikan object-fit: cover diaktifkan agar gambar mengisi container */
    transition: opacity 0.3s ease-in-out;
}
/* --- AKHIR SOLUSI RESPONSIVITAS GAMBAR --- */

/* HEADLINE & DESKRIPSI UTAMA */
.headline-text {
    font-size: 2.5rem;
    font-weight: 800;
    color: #212529;
}
.main-description {
    font-size: 0.9rem;
    color: #6c757d;
    line-height: 1.6;
    max-width: 900px;
}

/* Responsive: Teks tetap muncul di mobile */
@media (max-width: 768px) {
    .headline-text {
        font-size: 2rem;
    }
    .feature-card:not(.active) .feature-description,
    .feature-card:not(.active) a {
        opacity: 1;
        max-height: 100px;
        pointer-events: auto;
    }
    /* Di mobile, gunakan rasio yang sedikit lebih tinggi, misalnya 60% (masih lebih pendek dari 75% sebelumnya) */
    .image-ratio-container {
         padding-top: 60%; /* Dikecilkan dari 75% */
    }
}

   /* ======================================
    CSS Kustom untuk Tampilan Full-Width ADAS
    ======================================
    */

    /* Judul Utama */
    .adas-section .adas-title {
        font-weight: 700;
        font-size: 2.5rem; 
        margin-bottom: 2rem;
    }

    /* Style Accordion */
    .adas-accordion .accordion-item {
        border: none;
        border-bottom: 1px solid #dee2e6;
    }
    .adas-accordion .accordion-header button {
        background-color: transparent !important;
        color: #212529;
        font-weight: 600;
        padding: 1rem 0;
        font-size: 1.1rem;
        box-shadow: none;
        width: 100%;
        text-align: left;
        /* KUNCI: Reset tampilan bawaan Bootstrap */
        position: relative; 
    }

    /* KUNCI 1: Menghilangkan ikon panah bawaan Bootstrap */
    .adas-accordion .accordion-header button::before {
        display: none !important; /* Menonaktifkan ikon panah Bootstrap (yang menggunakan ::before) */
    }

    /* .adas-accordion .accordion-header button::after {
    content: '+';
    font-size: 1.5rem;
    font-weight: 300;
    line-height: 1;
    margin-left: auto;
    transition: transform 0.2s ease-in-out;
    flex-shrink: 0;

    /* Padding untuk body accordion */
    .adas-accordion .accordion-body {
        padding-bottom: 1.5rem;
    }

    /* Area Gambar Kiri (Kolom Gambar) */
    .adas-image-wrapper {
        position: relative;
        padding-top: 40%; 
        width: 100%;
        min-height: 400px;
    }
    .adas-feature-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }
    .adas-feature-image.active {
        opacity: 1;
    }

    /* Media Query untuk Responsif di Layar Kecil (Mobile) */
    @media (max-width: 991.98px) {
        .adas-section .adas-title {
            font-size: 2rem;
        }
        .adas-image-wrapper {
            padding-top: 56.25%;
            min-height: 0;
            margin-bottom: 1.5rem;
        }
    }
</style>
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('img/j7-car0.jpg') }}'); min-height: 70vh; background-size: cover; background-position: center;">
            
            {{-- Caption yang sudah responsif --}}
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 px-4">
                <div class="caption-content text-center text-md-start">
                    {{-- Font size lebih kecil di mobile (display-5) dan lebih besar di desktop (display-md-2) --}}
                    <h1 class="display-5 display-md-2 fw-bold">J7 Model</h1>
                    
                    <a href="#advantages-section" class="btn btn-outline-light rounded-pill px-4 py-2 mt-3 fs-5">
                        Selengkapnya<span class="ms-2">&rarr;</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>

{{-- 2. BAGIAN KEUNGGULAN JAECOO J7 (INTERAKTIF BARU) --}}
<section id="advantages-section" class="pt-5 pb-5 pb-lg-6 bg-white">
    <div class="container-fluid px-lg-5">
        
        {{-- Layout Gambar dan Fitur --}}
        <div class="row">
            
            {{-- Kolom Gambar Dinamis --}}
            <div class="col-12">
                <div class="p-0">
                    <div class="image-ratio-container shadow-lg">
                        <img id="feature-display-image" 
                             src="{{ asset('img/j7post1.png') }}" 
                             alt="JAECOO J7 Feature Highlight"
                             class="img-fluid">
                    </div>
                </div>
            </div>

            {{-- Kolom Fitur Interaktif --}}
            <div class="col-12 bg-white pt-4">
                <div class="row g-0 justify-content-center" style="max-width: 1200px; margin: auto;">
                    
                    {{-- Feature 1: Intelligent All-wheel drive system (j7post1.png) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card active" data-feature="j7post1">
                            <h3 class="feature-title">All wheel drive system</h3>
                            <p class="feature-description">
                            Keyakinan di jalan dan di luar aspal. AWD all-wheel drive system dari pemasok ZF dan Borgwarner yang terkenal di dunia.
                            </p>
                            </div>
                    </div>

                    {{-- Feature 2: Stylish di luar (j7post2.png) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card" data-feature="j7post2">
                            <h3 class="feature-title">Stylish Outside</h3>
                            <p class="feature-description">
                            Desain clinging akan menyoroti Anda dalam aliran kota. Penampilan karismatik dan visibilitas yang sangat baik dalam gelap karena optik kepala LED sepenuhnya dengan pola draft yang unik, pegangan pintu tersembunyi dengan penggerak listrik.
                            </p>
                            </div>
                    </div>

                    {{-- Feature 3: Teknologi dalam (j7post3.png) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card" data-feature="j7post3">
                            <h3 class="feature-title">Deep technology</h3>
                            <p class="feature-description">
                            Semua yang Anda butuhkan di abad 21st, dan bahkan lebih. 14.8 "sentuhan layar pusat menjalankan 8-core mikroprosesor Snapdragon 8155 dengan 16 GB RAM. Pemuatan halus dan cepat, definisi tinggi, Apple CarPlay nirkabel dan Android Auto, tampilan proyeksi HUD. 
                            </p>
                            </div>
                    </div>

                    {{-- Feature 4: Keselamatan (j7post4.png) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card" data-feature="j7post4">
                            <h3 class="feature-title">Safety</h3>
                            <p class="feature-description">
                            Dia menjagamu dalam situasi apapun. Desain bodi dengan rangka daya dan zona penyerap energi terdiri dari 80% baja berkekuatan tinggi. 7 airbag, satu set sistem bantuan pengemudi ADAS yang cerdas.
                            </p>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- AKHIR BAGIAN KEUNGGULAN JAECOO J7 --}}

{{-- 3. BAGIAN SPESIFIKASI MODEL (BARU) --}}
<section class="spec-section">
    <div class="container">
        <div class="text-center mb-4">
             <span class="text-primary small fw-bold"> &leftarrow; 1.6 Turbo AWD &rightarrow;</span>
        </div>
        <div class="row justify-content-center">
            
            {{-- Spesifikasi 1: Kapasitas Mesin --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">1.6</span>
                <span class="spec-label">L. ENGINE<br>CAPACITY</span>
            </div>

            {{-- Spesifikasi 2: Tenaga Kuda --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">150</span>
                <span class="spec-label">L.S.<br>POWER</span>
            </div>

            {{-- Spesifikasi 3: Akselerasi --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">9.7</span>
                <span class="spec-label">SEC. ACCELERATION<br>TO 100 KM/H</span>
            </div>

            {{-- Spesifikasi 4: Torsi --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">275</span>
                <span class="spec-label">NM.<br>TORQUE</span>
            </div>
            
        </div>
    </div>
</section>
{{-- AKHIR BAGIAN SPESIFIKASI MODEL --}}


    @include('components.j7-360-viewer')


    <section style="background-color: #1a1a1a; padding: 40px 0;">
  <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-around; flex-wrap: wrap; text-align: left; color: #ffffff;">

    <div style="width: 30%; min-width: 280px; margin-bottom: 30px; padding: 0 15px; box-sizing: border-box;">
      <img src="{{ asset('img/j7post5.jpg') }}" alt="Pelatihan Intensif" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px; max-height: 200px; object-fit: cover;">
      <h2 style="font-size: 24px; margin-bottom: 10px; font-weight: 600;">Pelatihan Intensif</h2>
      <p style="font-size: 16px; line-height: 1.6; color: #b3b3b3;">
        Pelajari dasar hingga mahir dalam pemrograman melalui kurikulum terstruktur yang dipandu oleh mentor berpengalaman.
      </p>
    </div>

    <div style="width: 30%; min-width: 280px; margin-bottom: 30px; padding: 0 15px; box-sizing: border-box;">
      <img src="{{ asset('img/j7post6.jpg') }}" alt="Proyek Portofolio" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px; max-height: 200px; object-fit: cover;">
      <h2 style="font-size: 24px; margin-bottom: 10px; font-weight: 600;">Proyek Portofolio</h2>
      <p style="font-size: 16px; line-height: 1.6; color: #b3b3b3;">
        Bangun aplikasi nyata dari awal hingga akhir untuk memperkuat skill dan menonjol dalam proses rekrutmen.
      </p>
    </div>

    <div style="width: 30%; min-width: 280px; margin-bottom: 30px; padding: 0 15px; box-sizing: border-box;">
      <img src="{{ asset('img/j7post7.jpg') }}" alt="Komunitas Aktif" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px; max-height: 200px; object-fit: cover;">
      <h2 style="font-size: 24px; margin-bottom: 10px; font-weight: 600;">Komunitas Aktif</h2>
      <p style="font-size: 16px; line-height: 1.6; color: #b3b3b3;">
        Terhubung dengan sesama developer, berbagi pengetahuan, dan dapatkan dukungan real-time untuk setiap tantangan.
      </p>
    </div>

  </div>
</section>

<section id="sistem-adas" class="adas-section pt-5 pb-5 bg-white">
    
    <div class="row mb-4 px-4 px-md-5">
        <div class="col-12 text-lg-start">
            <h2 class="adas-title">Sistem ADAS</h2>
        </div>
    </div>

    <div class="row px-4 px-md-5">
        
        <div class="col-12 col-lg-6 order-lg-first">
            <div class="adas-image-wrapper">
                {{-- Menggunakan gambar J8 sebagai placeholder untuk fitur ADAS --}}
                <img src="{{ asset('img/j8post8.avif') }}" class="adas-feature-image active" id="img-acc" alt="Kontrol Pelayaran Adaptif ACC">
                <img src="{{ asset('img/j8post9.avif') }}" class="adas-feature-image" id="img-fcw" alt="Peringatan Tabrakan Frontel FCW">
                <img src="{{ asset('img/j8post10.avif') }}" class="adas-feature-image" id="img-ldwlka" alt="Bantuan Jalur LDW/LKA">
                <img src="{{ asset('img/j8post11.avif') }}" class="adas-feature-image" id="img-ihc" alt="Switching Cahaya Jarak Jauh IHC">
                <img src="{{ asset('img/j8post12.avif') }}" class="adas-feature-image" id="img-bsd" alt="Pemantauan Zona Terblokir BSD">
                <img src="{{ asset('img/j8post13.avif') }}" class="adas-feature-image" id="img-rcta" alt="Peringatan RCTA cross-colaction">
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="accordion adas-accordion" id="adasFeaturesAccordion">
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAcc">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAcc" aria-expanded="true" aria-controls="collapseAcc" data-image-target="img-acc">
                            Kontrol pelayaran adaptif ACC
                        </button>
                    </h2>
                    <div id="collapseAcc" class="accordion-collapse collapse show" aria-labelledby="headingAcc" data-bs-parent="#adasFeaturesAccordion">
                        <div class="accordion-body">
                            <p style="font-size: 0.95rem; line-height: 1.5;">
                                Selain aksi *cruise control* konvensional (mempertahankan kecepatan yang ditetapkan oleh pengemudi), ia dapat menjaga jarak ke mobil di depan. Ambang batas kecepatan minimum adalah 30 km/jam.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFcw">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFcw" aria-expanded="false" aria-controls="collapseFcw" data-image-target="img-fcw">
                            Sistem Peringatan Tabrakan Frontel FCW
                        </button>
                    </h2>
                    <div id="collapseFcw" class="accordion-collapse collapse" aria-labelledby="headingFcw" data-bs-parent="#adasFeaturesAccordion">
                        <div class="accordion-body">
                            <p style="font-size: 0.95rem; line-height: 1.5;">
                                Ketika sistem memperbaiki rintangan di depan dan mobil mendekatinya terlalu cepat, tanpa menggunakan semua kemampuan pengereman biasa, ia melepaskan sinyal yang dapat didengar dan menampilkan peringatan tentang kemungkinan tabrakan ke dasbor.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingLdwLka">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLdwLka" aria-expanded="false" aria-controls="collapseLdwLka" data-image-target="img-ldwlka">
                            Sistem bantuan jalur LDW/LKA
                        </button>
                    </h2>
                    <div id="collapseLdwLka" class="accordion-collapse collapse" aria-labelledby="headingLdwLka" data-bs-parent="#adasFeaturesAccordion">
                        <div class="accordion-body">
                            <p style="font-size: 0.95rem; line-height: 1.5;">
                                Mengontrol posisi kendaraan relatif terhadap garis jalur lalu lintas secara *real time* dengan menganalisis gambar dari kamera video depan. Dalam kasus fiksasi perpindahan melintang kendaraan ke garis penandaan yang menunjukkan batas jalur, sistem bertindak pada kemudi untuk menarik perhatian pengemudi (LDW) dan untuk membantu pengemudi dalam penyimpanan kendaraan di jalur asli (LKA).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingIhc">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIhc" aria-expanded="false" aria-controls="collapseIhc" data-image-target="img-ihc">
                            Sistem *switching* cahaya jarak jauh / jarak jauh IHC
                        </button>
                    </h2>
                    <div id="collapseIhc" class="accordion-collapse collapse" aria-labelledby="headingIhc" data-bs-parent="#adasFeaturesAccordion">
                        <div class="accordion-body">
                            <p style="font-size: 0.95rem; line-height: 1.5;">
                                Secara otomatis menyalakan dan mematikan lampu pelindung mengemudi tergantung pada situasi dan lingkungan untuk memastikan penggunaan lampu depan yang optimal saat mengemudi di malam hari.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBsd">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBsd" aria-expanded="false" aria-controls="collapseBsd" data-image-target="img-bsd">
                            Sistem Pemantauan Zona Terblokir BSD
                        </button>
                    </h2>
                    <div id="collapseBsd" class="accordion-collapse collapse" aria-labelledby="headingBsd" data-bs-parent="#adasFeaturesAccordion">
                        <div class="accordion-body">
                            <p style="font-size: 0.95rem; line-height: 1.5;">
                                Saat mengemudi, parkir, membuka pintu, sistem memantau situasi jalan di zona buta. Di cermin kiri atau kanan, alarm diberikan secara *real time* jika target memasuki zona buta.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingRcta">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRcta" aria-expanded="false" aria-controls="collapseRcta" data-image-target="img-rcta">
                            Peringatan tentang RCTA *cross-colaction*
                        </button>
                    </h2>
                    <div id="collapseRcta" class="accordion-collapse collapse" aria-labelledby="headingRcta" data-bs-parent="#adasFeaturesAccordion">
                        <div class="accordion-body">
                            <p style="font-size: 0.95rem; line-height: 1.5;">
                                Sistem **RCTA** diaktifkan ketika mobil terbelakang (pemilih berada di posisi R). Jika di kanan atau kiri dalam arah *crossarial* di belakang mobil Anda mendekati kendaraan lain dan kondisi untuk memasok peringatan terpenuhi, indikator di kaca spion mulai berkedip dan pada saat yang sama panah bergerak muncul di layar monitor *round-view*, memperingatkan pengemudi tentang bahaya tabrakan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</section>

<script>
    // URL Gambar Fitur (Disesuaikan untuk J7)
    const FEATURE_IMAGES = {
        'j7post1': '{{ asset('img/j7post1.png') }}', 
        'j7post2': '{{ asset('img/j7post2.png') }}',
        'j7post3': '{{ asset('img/j7post3.png') }}',
        'j7post4': '{{ asset('img/j7post4.png') }}',
    };

    const featureCards = document.querySelectorAll('.feature-card');
    const displayImage = document.getElementById('feature-display-image');

    /**
     * Fungsi untuk mengubah gambar dan status card aktif
     */
    function changeFeature(featureKey) {
        // 1. Tambahkan efek fade-out pada gambar
        displayImage.style.opacity = 0;

        // Tunggu sebentar (waktu transisi opacity) sebelum mengubah src
        setTimeout(() => {
            // Ubah Gambar
            // Gunakan `featureKey` langsung di sini, karena sudah di definisikan di FEATURE_IMAGES
            const imagePath = FEATURE_IMAGES[featureKey] || FEATURE_IMAGES['j7post1']; 
            displayImage.src = imagePath;
            
            // 2. Tambahkan efek fade-in pada gambar
            displayImage.style.opacity = 1;
        }, 300); // Waktu ini harus sesuai dengan transition: opacity 0.3s

        // 3. Ubah Status Aktif pada Card
        featureCards.forEach(card => {
            card.classList.remove('active');
        });
        document.querySelector(`.feature-card[data-feature="${featureKey}"]`).classList.add('active');
    }

    // Tambahkan Event Listener ke setiap Card
    featureCards.forEach(card => {
        card.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah link # melompat
            const feature = this.getAttribute('data-feature');
            changeFeature(feature);
        });
    });

    // Inisialisasi: Panggil changeFeature('j7post1') saat pertama kali halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        if (displayImage) {
            changeFeature('j7post1'); 
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        if (typeof bootstrap === 'undefined' || typeof bootstrap.Collapse === 'undefined') {
            console.error('Bootstrap 5 JS (khususnya Collapse) tidak dimuat.');
            return;
        }

        const accordion = document.getElementById('adasFeaturesAccordion');
        const images = document.querySelectorAll('.adas-feature-image');
        
        // Fungsi untuk menampilkan gambar yang sesuai
        const showImage = (targetId) => {
            images.forEach(img => img.classList.remove('active'));
            const targetImage = document.getElementById(targetId);
            if (targetImage) {
                targetImage.classList.add('active');
            }
        };

        // Event listener saat Accordion SHOW (terbuka)
        accordion.addEventListener('show.bs.collapse', function (event) {
            const button = event.target.previousElementSibling.querySelector('button');
            const targetImageId = button.getAttribute('data-image-target');
            showImage(targetImageId);
        });

        // Tampilkan gambar pertama (ACC) dan buka item accordion pertama saat halaman dimuat
        const firstCollapse = document.getElementById('collapseAcc');
        if (firstCollapse) {
            showImage('img-acc');
        }
    });
</script>

@endsection