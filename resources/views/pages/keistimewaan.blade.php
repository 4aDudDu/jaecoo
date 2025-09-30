@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('img/p-keistimewaan.png') }}'); min-height: 70vh; background-size: cover; background-position: center;">
            
            {{-- Caption yang sudah responsif --}}
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 px-4">
                <div class="caption-content text-center text-md-start">
                    {{-- Font size lebih kecil di mobile (display-5) dan lebih besar di desktop (display-md-2) --}}
                    <h1 class="display-5 display-md-2 fw-bold">Dukungan JAECOO</h1>
                    
                    <a href="#harmony" class="btn btn-outline-light rounded-pill px-4 py-2 mt-3 fs-5">
                        Selengkapnya<span class="ms-2">&rarr;</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>

{{-- Innovation Description Section --}}
<section class="innovation-section py-5 bg-white text-dark">
    <div class="container text-center" id="harmony">
        <div class="row">
            <div class="col-lg-10 offset-lg-1"> {{-- Sedikit dilebarkan agar sesuai dengan gambar --}}
                <p class="lead text-secondary">
                    Kenyamanan dan keamanan Anda adalah tanggung jawab kami. Di bagian ini, Anda akan menemukan semua layanan dan informasi yang diperlukan untuk pengoperasian mobil tanpa gangguan: mulai dari perawatan darurat di jalan hingga layanan premium "Autoconcierge". Kami peduli pada setiap tahap interaksi Anda dengan JAECOO – cukup pilih layanan yang tepat.
                </p>
            </div>
        </div>
    </div>
</section>


{{-- ======================================================= --}}
{{-- START: Bagian Card Layanan Baru                          --}}
{{-- ======================================================= --}}
<section class="service-cards-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row g-4">
            {{-- Card 1 --}}
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card-link">
                    <div class="card text-white border-0 shadow-sm overflow-hidden">
                        <img src="{{ asset('img/istimewa1.jpg') }}" class="card-img" alt="Bantuan di Jalan">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title fw-bold">Bantuan di Jalan</h5>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 2 --}}
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card-link">
                    <div class="card text-white border-0 shadow-sm overflow-hidden">
                        <img src="{{ asset('img/istimewa2.jpg') }}" class="card-img" alt="Garansi">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title fw-bold">Garansi</h5>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 3 --}}
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card-link">
                    <div class="card text-white border-0 shadow-sm overflow-hidden">
                        <img src="{{ asset('img/istimewa3.jpg') }}" class="card-img" alt="Panduan Penggunaan">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title fw-bold">Panduan Penggunaan</h5>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 4 --}}
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card-link">
                    <div class="card text-white border-0 shadow-sm overflow-hidden">
                        <img src="{{ asset('img/istimewa4.jpg') }}" class="card-img" alt="Dukungan Teknis Tambahan">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title fw-bold">Dukungan Teknis Tambahan</h5>
                        </div>
                    </div>  
                </a>
            </div>

            {{-- Card 5 --}}
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card-link">
                    <div class="card text-white border-0 shadow-sm overflow-hidden">
                        <img src="{{ asset('img/istimewa5.jpg') }}" class="card-img" alt="Layanan Auto Concierge">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title fw-bold">Layanan Auto Concierge</h5>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 6 --}}
            <div class="col-lg-4 col-md-6">
                <a href="#" class="card-link">
                    <div class="card text-white border-0 shadow-sm overflow-hidden">
                        <img src="{{ asset('img/istimewa6.jpg') }}" class="card-img" alt="Pendaftaran Servis">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title fw-bold">Pendaftaran Servis</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Tambahkan CSS ini di file CSS utama Anda atau di dalam tag <style> --}}
<style>
    .card-link {
        text-decoration: none;
    }
    .card-img {
        transition: transform 0.4s ease;
        height: 450px; /* Atur tinggi kartu agar seragam */
        object-fit: cover; /* Pastikan gambar memenuhi area kartu */
    }
    .card-link:hover .card-img {
        transform: scale(1.05); /* Efek zoom saat hover */
    }
    .card-img-overlay {
        /* Gradien dari bawah ke atas agar teks mudah dibaca */
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 30%, rgba(0,0,0,0) 100%);
    }
    /* Mengatur posisi teks di atas dan bawah */
    .card-img-overlay .card-title {
        align-self: flex-start; /* Judul selalu di atas */
    }
    .card-img-overlay .card-text {
        align-self: flex-start; /* Link selalu di bawah */
    }
</style>
{{-- ======================================================= --}}
{{-- END: Bagian Card Layanan Baru                            --}}
{{-- ======================================================= --}}

@endsection