@extends('layouts.app')

@section('content')
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('img/p-service.png') }}'); min-height: 70vh; background-size: cover; background-position: center;">
            
            {{-- Caption yang sudah responsif --}}
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 px-4">
                <div class="caption-content text-center text-md-start">
                    {{-- Font size lebih kecil di mobile (display-5) dan lebih besar di desktop (display-md-2) --}}
                    <h1 class="display-5 display-md-2 fw-bold">Layanan Service JAECOO</h1>
                    
                    <a href="#advantages-section" class="btn btn-outline-light rounded-pill px-4 py-2 mt-3 fs-5">
                        Selengkapnya<span class="ms-2">&rarr;</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>

{{-- ======================================================= --}}
{{-- START: Section Keunggulan Dealer                      --}}
{{-- ======================================================= --}}
<section id="advantages-section" class="py-5 bg-light text-dark">
    <div class="container">
        {{-- Judul Utama Seksi --}}
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Keunggulan Dealer Resmi JAECOO</h2>
            </div>
        </div>

        {{-- Baris untuk Tiga Kolom Keunggulan --}}
        <div class="row g-4">
            
            {{-- Kolom 1: Standar Pelayanan Tinggi --}}
            <div class="col-lg-4 col-md-6">
                <div class="p-4 bg-white shadow-sm h-100">
                    <h4 class="fw-bold mb-3">Standar Pelayanan Tinggi</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">✓ Suku cadang asli</li>
                        <li class="mb-2">✓ Kepatuhan pada teknologi perbaikan</li>
                        <li class="mb-2">✓ Peralatan modern</li>
                        <li class="mb-2">✓ Staf yang berkualitas</li>
                    </ul>
                </div>
            </div>

            {{-- Kolom 2: Garansi --}}
            <div class="col-lg-4 col-md-6">
                <div class="p-4 bg-white shadow-sm h-100">
                    <h4 class="fw-bold mb-3">Garansi</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">✓ Garansi untuk pekerjaan yang dilakukan</li>
                        <li class="mb-2">✓ Biaya pekerjaan yang transparan</li>
                    </ul>
                </div>
            </div>

            {{-- Kolom 3: Layanan untuk Pemilik --}}
            <div class="col-lg-4 col-md-6">
                <div class="p-4 bg-white shadow-sm h-100">
                    <h4 class="fw-bold mb-3">Layanan untuk Pemilik</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">✓ Dukungan selama 7 tahun</li>
                        <li class="mb-2">✓ Bantuan di jalan</li>
                        <li class="mb-2">✓ Layanan Auto Concierge</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection