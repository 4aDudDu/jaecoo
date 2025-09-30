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

{{-- Innovation Description Section --}}
<section class="innovation-section py-5 bg-white text-dark">
    <div class="container text-center" id="harmony">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h3 class="fw-bold mb-4">JAECOO adalah harmoni dari inovasi, kenyamanan, dan keamanan</h3>
                <p class="lead text-secondary">
                    Layar HD dengan dukungan untuk Android Auto/Apple CarPlay, asisten suara pintar,
                    pengisian daya nirkabel, dan akustik premium. Keamanan didukung
                    oleh sistem ADAS cerdas – adaptive cruise control, pemantauan
                    titik buta, dan bantuan menjaga lajur.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- START: New Feature Layout Section --}}
<section class="feature-layout-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center g-5 my-4">
            <div class="col-md-6 text-dark text-center text-md-start">
                <h2 class="fw-bold">JAECOO CONNECT</h2>
                <a href="#" class="btn btn-outline-dark mt-3">Selengkapnya &rarr;</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/teknologi1.jpg') }}" class="img-fluid rounded shadow mb-4 mb-md-0" alt="Pria melihat SUV Jaecoo di pegunungan.">
            </div>
        </div>

        <div class="row align-items-center g-5 my-4">
            <div class="col-md-6 order-md-2 text-dark text-center text-md-start">
                <h2 class="fw-bold">Sistem Penggerak Semua Roda TORQUE VECTORING</h2>
                <a href="#" class="btn btn-outline-dark mt-3">Selengkapnya &rarr;</a>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('img/teknologi2.jpg') }}" class="img-fluid rounded shadow mb-4 mb-md-0" alt="SUV Jaecoo mendaki bukit berbatu yang curam.">
            </div>
        </div>

        <div class="row align-items-center g-5 my-4">
            <div class="col-md-6 text-dark text-center text-md-start">
                <h2 class="fw-bold">Fitur Bodi Mobil JAECOO: Kombinasi Kekuatan, Keamanan, dan Gaya</h2>
                <a href="#" class="btn btn-outline-dark mt-3">Selengkapnya &rarr;</a>
            </div>
            <div class="col-md-6">
                 <img src="{{ asset('img/teknologi3.jpg') }}" class="img-fluid rounded shadow mb-4 mb-md-0" alt="Tampilan dekat SUV Jaecoo di medan berbatu.">
            </div>
        </div>

        <div class="row align-items-center g-5 my-4">
            <div class="col-md-6 order-md-2 text-dark text-center text-md-start">
                <h2 class="fw-bold">Multimedia dan Antarmuka Mobil JAECOO: Inovasi untuk Pengemudi Modern</h2>
                <a href="#" class="btn btn-outline-dark mt-3">Selengkapnya &rarr;</a>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('img/teknologi4.jpg') }}" class="img-fluid rounded shadow mb-4 mb-md-0" alt="SUV Jaecoo mendaki bukit berbatu yang curam.">
            </div>
        </div>

        <div class="row align-items-center g-5 my-4">
            <div class="col-md-6 text-dark text-center text-md-start">
                <h2 class="fw-bold">Suspensi Inovatif JAECOO</h2>
                <a href="#" class="btn btn-outline-dark mt-3">Selengkapnya &rarr;</a>
            </div>
            <div class="col-md-6">
                 <img src="{{ asset('img/teknologi5.jpg') }}" class="img-fluid rounded shadow mb-4 mb-md-0" alt="Tampilan dekat SUV Jaecoo di medan berbatu.">
            </div>
        </div>
        <div class="row align-items-center g-5 my-4">
            <div class="col-md-6 order-md-2 text-dark text-center text-md-start">
                <h2 class="fw-bold">Sistem Keamanan dan Bantuan Pengemudi</h2>
                <a href="#" class="btn btn-outline-dark mt-3">Selengkapnya &rarr;</a>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('img/teknologi6.jpg') }}" class="img-fluid rounded shadow mb-4 mb-md-0" alt="SUV Jaecoo mendaki bukit berbatu yang curam.">
            </div>
        </div>
    </div>
</section>
{{-- END: New Feature Layout Section --}}
@endsection