@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('img/p-dealer.png') }}'); min-height: 70vh; background-size: cover; background-position: center;">
            
            {{-- Caption yang sudah responsif --}}
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 px-4">
                <div class="caption-content text-center text-md-start">
                    {{-- Font size lebih kecil di mobile (display-5) dan lebih besar di desktop (display-md-2) --}}
                    <h1 class="display-5 display-md-2 fw-bold">Teknologi pada Mobil JAECOO</h1>
                    
                    <a href="#harmony" class="btn btn-outline-light rounded-pill px-4 py-2 mt-3 fs-5">
                        Selengkapnya<span class="ms-2">&rarr;</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>

{{-- Section Special Offers --}}
<section id="special-offers" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold mb-4 text-dark">Penawaran Spesial</h2>
        
        <div class="card border-0 shadow-sm overflow-hidden">
            <div class="row g-0">
                {{-- Kolom Gambar (lebih besar) --}}
                <div class="col-lg-7">
                    {{-- Ganti dengan path gambar mobil Anda --}}
                    <img src="{{ asset('img/tawaran1.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="JAECOO J8 Offer">
                </div>
                
                {{-- Kolom Teks (lebih kecil) --}}
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="card-title fw-bold">Syarat Kredit Istimewa untuk JAECOO J8</h3>
                        <p class="card-text text-muted mb-3">10 Juli 2025</p>
                        <p class="card-text">Cicilan bulanan ringan dengan suku bunga rendah.</p>
                        <a href="#" class="btn btn-outline-dark mt-3">
                            Baca Selengkapnya <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


@endsection