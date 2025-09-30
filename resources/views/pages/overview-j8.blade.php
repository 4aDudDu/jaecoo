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

{{-- 1. BAGIAN KAROSEL --}}
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('img/j8-model.png') }}'); min-height: 70vh; background-size: cover; background-position: center;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 px-4">
                <div class="caption-content text-center text-md-start">
                    <h1 class="display-5 display-md-2 fw-bold">J8 Model</h1>
                    <a href="#advantages-section" class="btn btn-outline-light rounded-pill px-4 py-2 mt-3 fs-5">
                        Selengkapnya<span class="ms-2">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 2. BAGIAN KEUNGGULAN JAECOO J8 (INTERAKTIF BARU) --}}
<section id="advantages-section" class="pt-5 pb-5 pb-lg-6 bg-white">
    <div class="container-fluid px-lg-5">
        
        {{-- Headline dan Deskripsi --}}
        <div class="row mb-5 px-3 px-lg-0">
            <div class="col-12 col-lg-8 mx-auto text-lg-start">
                <h2 class="headline-text mb-3">JAECOO J8 –*The new flagship crossover of the brand</h2>
                <p class="main-description">
                    JAECOO J8 adalah crossover yang *stylish* dan elegan yang menonjol di lalu lintas perkotaan dan terasa percaya diri di permukaan apa pun, aspal, salju, *off-road* ringan. Dilengkapi dengan teknologi TORQUE VECTORING yang memberikan akselerasi dan traksi yang sangat akurat di semua kondisi berkendara.
                </p>
            </div>
        </div>

        {{-- Layout Gambar dan Fitur --}}
        <div class="row">
            
            {{-- Kolom Gambar Dinamis --}}
            <div class="col-12">
                <div class="p-0">
                    <!-- Kontainer Rasio Aspek (Aspect Ratio Container) -->
                    <div class="image-ratio-container shadow-lg">
                        <img id="feature-display-image" 
                             src="{{ asset('img/j8post1.avif') }}" 
                             alt="JAECOO J8 Feature Highlight"
                             class="img-fluid">
                    </div>
                </div>
            </div>

            {{-- Kolom Fitur Interaktif --}}
            <div class="col-12 bg-white pt-4">
                <div class="row g-0 justify-content-center" style="max-width: 1200px; margin: auto;">
                    
                    {{-- Feature 1: Intelligent All-wheel drive system (j8post1.avif) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card active" data-feature="j8post1">
                            <h3 class="feature-title">Intelligent All-wheel drive system</h3>
                            <p class="feature-description">
                            TORQUE VECTORING adalah sistem penggerak semua roda (AWD) dua arah yang mendistribusikan torsi secara independen di antara roda belakang. Fitur ini meningkatkan daya tembus (saat melewati medan sulit) dan memperbaiki kemampuan kontrol saat berbelok.
                            </p>
                            <!-- <a href="#" class="small text-primary text-decoration-none">More details &rarr;</a> -->
                        </div>
                    </div>

                    {{-- Feature 2: Adaptive Suspension (j8post2.avif) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card" data-feature="j8post2">
                            <h3 class="feature-title">Adaptive Suspension</h3>
                            <p class="feature-description">
                            Sublay (sub-lapisan atau sub-rangka) dengan tingkat kekakuan peredam kejut (shock absorber) elektronik. Secara otomatis beradaptasi dengan kondisi jalan, memberikan kenyamanan dan stabilitas di permukaan apa pun.
                            </p>
                            <!-- <a href="#" class="small text-primary text-decoration-none">More details &rarr;</a> -->
                        </div>
                    </div>

                    {{-- Feature 3: Maximum protection (j8post3.avif) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card" data-feature="j8post3">
                            <h3 class="feature-title">Maximum protection</h3>
                            <p class="feature-description">
                            Hingga 10 kantung udara (airbag), termasuk kantung udara sentral untuk mencegah benturan kepala pengemudi dan penumpang depan, serta dua kantung udara samping belakang. Fitur ini memastikan keamanan semua penumpang.
                            </p>
                            <!-- <a href="#" class="small text-primary text-decoration-none">More details &rarr;</a> -->
                        </div>
                    </div>

                    {{-- Feature 4: Premium comfort (j8post4.avif) --}}
                    <div class="col-6 col-md-3">
                        <div class="feature-card" data-feature="j8post4">
                            <h3 class="feature-title">Premium comfort</h3>
                            <p class="feature-description">
                            Kursi kulit Nappa dengan 12 penyesuaian untuk pengemudi, dilengkapi fitur pijat, ventilasi, dan memori pengaturan. Terdapat kursi lipat untuk penumpang (depan) dan kursi baris kedua yang dapat disesuaikan dengan pemanas.    
                            </p>
                            <!-- <a href="#" class="small text-primary text-decoration-none">More details &rarr;</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- AKHIR BAGIAN KEUNGGULAN JAECOO J8 --}}

{{-- 3. BAGIAN SPESIFIKASI MODEL (BARU) --}}
<section class="spec-section">
    <div class="container">
        <div class="text-center mb-4">
             <span class="text-primary small fw-bold"> &leftarrow; 2.0 AWD &rightarrow;</span>
        </div>
        <div class="row justify-content-center">
            
            {{-- Spesifikasi 1: Kapasitas Mesin --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">2</span>
                <span class="spec-label">L. ENGINE<br>CAPACITY</span>
            </div>

            {{-- Spesifikasi 2: Tenaga Kuda --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">249</span>
                <span class="spec-label">L.S.<br>POWER</span>
            </div>

            {{-- Spesifikasi 3: Akselerasi --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">8.5</span>
                <span class="spec-label">SEC. ACCELERATION<br>TO 100 KM/H</span>
            </div>

            {{-- Spesifikasi 4: Torsi --}}
            <div class="col-6 col-md-3 spec-item">
                <span class="spec-value">385</span>
                <span class="spec-label">NM.<br>TORQUE</span>
            </div>
            
        </div>
    </div>
</section>
{{-- AKHIR BAGIAN SPESIFIKASI MODEL --}}

{{-- 3. BAGIAN VIEWER 360 DERAJAT J8 --}}
<section class="py-5">
    <h2 style="text-align: center; margin-bottom: 20px; font-size: 2rem; color: #2c3e50;">
        Lihat Model J8 dalam 360°
    </h2>
    @include('components.j8-360-viewer') 
</section>

<section id="jaecoo-j8-full-features" class="pt-5 pb-5 pb-lg-6 bg-white">
    <div class="container-fluid px-lg-5">
        <div class="row px-3 px-lg-0">



            <div class="col-12 col-lg-8 mx-auto text-lg-start">
            <h1 class="headline-text mb-2" style="font-weight: 700; font-size: 2.5rem;">
            Sistem penggerak semua roda yang inovatif dengan vektor dorong AWD TORQUE VECTORING
                </h1>
                <h2 class="mb-4" style="font-weight: 700; font-size: 1.8rem;">
                    Sistem Penggerak Semua Roda Inovatif dengan Vektor Dorong<br> AWD TORQUE VECTORING
                </h2>

                <div class="accordion" id="jaecooJ8Features">
                    
                    <div class="accordion-item" style="border: none;">
                        <h3 class="accordion-header" id="headingAWD" style="border-bottom: 1px solid #ccc; padding-bottom: 0.5rem;">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAWD" aria-expanded="false" aria-controls="collapseAWD" style="font-size: 1.2rem; font-weight: 600; background-color: white; color: black; border: none; padding: 0.5rem 0; /* Padding disesuaikan */">
                                Memungkinkan Anda melewati tikungan lebih cepat dan aman, serta meningkatkan daya jelajah
                            </button>
                        </h3>
                        
                        <div id="collapseAWD" class="accordion-collapse collapse" aria-labelledby="headingAWD" data-bs-parent="#jaecooJ8Features">
                            <div class="accordion-body" style="padding: 1rem 0 0 0; color: #555;">
                                <p style="text-align: justify; margin-bottom: 1rem;">
                                    Perbedaan utama antara sistem penggerak semua roda <b>TORQUE VECTORING</b> canggih dari yang dipasang pada versi Active dan Supreme adalah bahwa tidak hanya satu kopling yang dipasang di bodi diferensial belakang, tetapi ada <b>dua kopling</b> pada poros semi-gandar yang mendistribusikan kembali torsi ke roda kiri dan kanan secara independen satu sama lain. Di dalam bodi diferensial belakang, serta di roda gigi sudut, dipasang kopling cam, yang membuka koneksi antara diferensial belakang dan poros untuk kasus-kasus di mana penggunaan penggerak semua roda tidak praktis.
                                </p>
                                <p style="text-align: justify; margin-bottom: 1rem;">
                                    Dengan demikian, *card shaft* dimatikan, yang memiliki efek positif pada konsumsi bahan bakar dan keramahan lingkungan. Sistem penggerak semua roda <b>TORQUE VECTORING</b> canggih tidak hanya memungkinkan Anda melewati tikungan lebih cepat dan lebih aman, tetapi juga meningkatkan daya tembus JAECOO J8. Sebagai contoh, ketika kedua roda gandar depan dan satu roda belakang 'kehilangan daya cengkeram' ke permukaan, sistem penggerak semua roda canggih akan mengarahkan sebagian besar torsi ke roda belakang, yang memiliki cengkeraman terbaik.
                                </p>
                                <p style="text-align: justify;">
                                    Dalam sistem penggerak semua roda konvensional, efek ini dicapai dengan memperlambat roda belakang yang macet, dan dalam sistem penggerak semua roda <b>TORQUE VECTORING</b> canggih, berkat <b>dua kopling</b> pada poros semi-gandar kiri dan kanan, kendali independen terhadap penyebaran torsi ke roda belakang dapat dilakukan. Anda dapat mengontrol sistem penggerak semua roda <b>TORQUE VECTORING</b> canggih dengan memilih salah satu dari **tujuh mode berkendara**: IVF, COMFORT, SPORTS, SNOW, DIRT, SAND, ROAD. Tergantung pada modenya, algoritma sistem mobil utama akan berubah.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id="j8-torque-vectoring-features" class="py-5 bg-dark text-white">
    <div class="container-fluid px-lg-5">
        <div class="row text-center">

            <div class="col-12 col-md-4 mb-5 mb-md-0">
                <img src="{{ asset('img/j8post5.avif') }}" class="img-fluid mb-3" alt="Sistem Penggerak Roda TORQUE VECTORING">
                <h3 class="h5 mb-2" style="font-weight: 600;">Sistem Penggerak Semua Roda Lanjut <b>TORQUE VECTORING</b></h3>
                <p class="small text-muted px-3" style="font-size: 0.85rem; line-height: 1.4;">
                    Dosis distribusi torsi ke roda belakang, untuk operasi optimal baik di **jalan raya** maupun **off-road** ringan. Meningkatkan efisiensi bahan bakar.
                </p>
            </div>

            <div class="col-12 col-md-4 mb-5 mb-md-0">
                <img src="{{ asset('img/j8post6.avif') }}" class="img-fluid mb-3" alt="Berbelok dengan Penuh Percaya Diri">
                <h3 class="h5 mb-2" style="font-weight: 600;">Berbelok Sulit dengan Penuh Percaya Diri</h3>
                <p class="small text-muted px-3" style="font-size: 0.85rem; line-height: 1.4;">
                    Sistem cerdas ini secara otomatis mengarahkan torsi ke roda yang lebih terbebani, membantu melewati tikungan lebih efisien dan aman.
                </p>
            </div>

            <div class="col-12 col-md-4">
                <img src="{{ asset('img/j8post7.avif') }}" class="img-fluid mb-3" alt="Standar Manuver Baru di Jalan">
                <h3 class="h5 mb-2" style="font-weight: 600;">Standar Baru Manuver di Jalan</h3>
                <p class="small text-muted px-3" style="font-size: 0.85rem; line-height: 1.4;">
                    Dalam situasi apa pun di perjalanan Anda, torsi akan diarahkan ke roda dengan kontak terbaik ke permukaan untuk meningkatkan daya jelajah dan stabilitas di jalan; baik itu kotoran, salju, atau batu.
                </p>
            </div>

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
    // URL Gambar Fitur (MENGGUNAKAN NAMA FILE DARI PENGGUNA)
    const FEATURE_IMAGES = {
        'j8post1': '{{ asset('img/j8post1.avif') }}', 
        'j8post2': '{{ asset('img/j8post2.avif') }}',
        'j8post3': '{{ asset('img/j8post3.avif') }}',
        'j8post4': '{{ asset('img/j8post4.avif') }}',
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
            const imagePath = FEATURE_IMAGES[featureKey] || FEATURE_IMAGES['j8post1']; 
            displayImage.src = imagePath;
            
            // 2. Tambahkan efek fade-in pada gambar
            displayImage.style.opacity = 1;
        }, 300); // Waktu ini harus sesuai dengan transition: opacity 0.3s

        // 3. Ubah Status Aktif pada Card (Tidak perlu timeout karena hanya CSS)
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

    // Inisialisasi: Panggil changeFeature('j8post1') saat pertama kali halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        if (displayImage) {
            changeFeature('j8post1'); 
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
            // Jika Anda ingin memastikan item pertama terbuka (sudah ada di HTML: show class)
            // Anda bisa lewati inisialisasi Collapse di JS karena sudah ada class "show"
        }
    });
</script>
@endsection
