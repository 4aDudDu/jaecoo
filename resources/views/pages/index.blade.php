@extends('layouts.app')

@section('content')

<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    {{-- Indikator sudah benar untuk 6 slide --}}
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>

    <div class="carousel-inner">
        {{-- Slide 1 --}}
        <div class="carousel-item active" style="background-image: url('{{ asset('img/caro1.jpg') }}'); min-height: 100vh; background-size: cover; background-position: center;">
            <div class="carousel-caption d-none d-md-flex flex-column align-items-start text-start">
                <h1 class="display-2 fw-bold">JAECOO J7</h1>
                <h1 class="display-2 fw-bold">dari 0.01 %</h1>
                <p class="fs-4 mt-3">Kredit selama 4 tahun!</p>
                <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 mt-4 fs-5">Tentang Model <span class="ms-2">&rarr;</span></a>
            </div>
        </div>

        {{-- Slide 2 --}}
        <div class="carousel-item" style="background-image: url('{{ asset('img/caro2.jpg') }}'); min-height: 100vh; background-size: cover; background-position: center;">
            <div class="carousel-caption d-none d-md-flex flex-column align-items-start text-start">
                <h1 class="display-2 fw-bold">Edisi Terbatas</h1>
                <h1 class="display-2 fw-bold">JAECOO J8</h1>
                <p class="fs-4 mt-3">Tampil beda dengan desain eksklusif.</p>
                <a href="overview-j8" class="btn btn-outline-light rounded-pill px-4 py-2 mt-4 fs-5">Lihat Detail <span class="ms-2">&rarr;</span></a>
            </div>
        </div>

        {{-- Slide 3 --}}
        <div class="carousel-item" style="background-image: url('{{ asset('img/caro3.jpg') }}'); min-height: 100vh; background-size: cover; background-position: center;">
            <div class="carousel-caption d-none d-md-flex flex-column align-items-start text-start">
                <h1 class="display-2 fw-bold">Teknologi Cerdas</h1>
                <h1 class="display-2 fw-bold">Fitur Terdepan</h1>
                <p class="fs-4 mt-3">Jelajahi inovasi dalam setiap perjalanan.</p>
                <a href="/teknologi" class="btn btn-outline-light rounded-pill px-4 py-2 mt-4 fs-5">Pelajari Fitur <span class="ms-2">&rarr;</span></a>
            </div>
        </div>

        {{-- Slide 4 --}}
        <div class="carousel-item" style="background-image: url('{{ asset('img/caro4.jpg') }}'); min-height: 100vh; background-size: cover; background-position: center;">
            <div class="carousel-caption d-none d-md-flex flex-column align-items-start text-start">
                <h1 class="display-2 fw-bold">Performa Tangguh</h1>
                <h1 class="display-2 fw-bold">Semua Medan</h1>
                <p class="fs-4 mt-3">Siap menemani petualangan Anda.</p>
                <a href="/keistimewaan" class="btn btn-outline-light rounded-pill px-4 py-2 mt-4 fs-5">Uji Kemampuan <span class="ms-2">&rarr;</span></a>
            </div>
        </div>

        {{-- Slide 5 --}}
        <div class="carousel-item" style="background-image: url('{{ asset('img/caro5.jpg') }}'); min-height: 100vh; background-size: cover; background-position: center;">
            <div class="carousel-caption d-none d-md-flex flex-column align-items-start text-start">
                <h1 class="display-2 fw-bold">Interior Premium</h1>
                <h1 class="display-2 fw-bold">Kenyamanan Maksimal</h1>
                <p class="fs-4 mt-3">Rasakan kemewahan di setiap sudut.</p>
                <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 mt-4 fs-5">Lihat Interior <span class="ms-2">&rarr;</span></a>
            </div>
        </div>
        
        {{-- Slide 6 --}}
        <div class="carousel-item" style="background-image: url('{{ asset('img/caro6.jpg') }}'); min-height: 100vh; background-size: cover; background-position: center;">
            <div class="carousel-caption d-none d-md-flex flex-column align-items-start text-start">
                <h1 class="display-2 fw-bold">Penawaran Spesial</h1>
                <h1 class="display-2 fw-bold">Hanya Bulan Ini</h1>
                <p class="fs-4 mt-3">Dapatkan promo terbaik sekarang juga.</p>
                <a href="/penawaran" class="btn btn-outline-light rounded-pill px-4 py-2 mt-4 fs-5">Cek Promo <span class="ms-2">&rarr;</span></a>
            </div>
        </div>
    </div>

    {{-- Tombol Previous & Next --}}
    {{-- Tombol Previous & Next Kustom --}}
    <button class="carousel-control-prev carousel-control-custom" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        {{-- Ikon SVG Panah Kiri --}}
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 18L9 12L15 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next carousel-control-custom" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        {{-- Ikon SVG Panah Kanan --}}
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- Bagian Info Card Pertama (Tidak Diubah) --}}
<section class="info-card-section">
    <div class="container-fluid px-md-5">
        <div class="row g-3 g-lg-4">
            {{-- Card Teknologi, Keistimewaan, Penawaran Spesial di sini... --}}
            <div class="col-lg-4 col-md-12">
                <a href="/teknologi" class="info-card-link">
                    <div class="info-card h-100">
                        <img src="{{ asset('img/teknologi.jpg') }}" class="card-img" alt="Teknologi Jaecoo">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <div><h3 class="card-title">Teknologi</h3></div>
                            <p class="card-text-link">Pelajari lebih lanjut &rarr;</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12">
                <a href="/keistimewaan" class="info-card-link">
                    <div class="info-card h-100">
                        <img src="{{ asset('img/keistimewaan.jpg') }}" class="card-img" alt="Keistimewaan Jaecoo">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                             <div><h3 class="card-title">Keistimewaan</h3></div>
                            <p class="card-text-link">Pelajari lebih lanjut &rarr;</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12">
                <a href="/penawaran" class="info-card-link">
                    <div class="info-card h-100">
                        <img src="{{ asset('img/penawaran-spesial.jpg') }}" class="card-img" alt="Penawaran Spesial Jaecoo">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                             <div><h3 class="card-title">Penawaran Spesial</h3></div>
                            <p class="card-text-link">Pelajari lebih lanjut &rarr;</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Bagian Model Viewer (Tidak Diubah) --}}
<section class="model-viewer-section bg-white text-dark py-5">
    <div class="container">
        <ul class="nav nav-tabs justify-content-center border-0 mb-4" id="modelTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="j8-tab" data-bs-toggle="tab" data-bs-target="#j8-pane" type="button"
                    role="tab" aria-controls="j8-pane" aria-selected="true">J8</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="j7-tab" data-bs-toggle="tab" data-bs-target="#j7-pane" type="button"
                    role="tab" aria-controls="j7-pane" aria-selected="false">J7</button>
            </li>
        </ul>

        <div class="tab-content" id="modelTabContent">
            <div class="tab-pane fade show active" id="j8-pane" role="tabpanel" aria-labelledby="j8-tab">
                <div class="model-display-area">
                    <img src="{{ asset('img/j8-1.png') }}" class="side-image left-image" alt="Jaecoo J8 Detail 1">
                    <img src="{{ asset('img/j8-2.png') }}" class="side-image right-image" alt="Jaecoo J8 Detail 2">
                    <div class="center-car-wrapper">
                        <img src="{{ asset('img/j8-car.png') }}" id="carImageJ8" class="center-car-image" alt="Jaecoo J8">
                    </div>
                </div>
                <div class="model-info-panel text-center mt-4">
                    <h2>Jaecoo J8</h2>
                    <div class="color-options mt-3">
                        <button class="color-swatch active" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car.png') }}" style="background-color: #FFFFFF;"></button>
                        <button class="color-swatch" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car2.png') }}" style="background-color: #6C7A89;"></button>
                        <button class="color-swatch" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car3.png') }}" style="background-color: #61666B;"></button>
                        <button class="color-swatch" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car4.png') }}" style="background-color: #8C929C;"></button>
                        <button class="color-swatch" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car5.png') }}" style="background-color: #2F363F;"></button>
                        
                        <button class="color-swatch two-tone" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car6.png') }}">
                            <div class="top-half" style="background-color: #FFFFFF;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                        <button class="color-swatch two-tone" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car7.png') }}">
                            <div class="top-half" style="background-color: #6C7A89;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                        <button class="color-swatch two-tone" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car8.png') }}">
                            <div class="top-half" style="background-color: #61666B;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                        <button class="color-swatch two-tone" data-target-car="carImageJ8" data-img-src="{{ asset('img/j8-car9.png') }}">
                            <div class="top-half" style="background-color: #8C929C;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="j7-pane" role="tabpanel" aria-labelledby="j7-tab">
                <div class="model-display-area">
                    <img src="{{ asset('img/j7-1.png') }}" class="side-image left-image" alt="Jaecoo J7 Detail 1">
                    <img src="{{ asset('img/j7-2.png') }}" class="side-image right-image" alt="Jaecoo J7 Detail 2">
                    <div class="center-car-wrapper">
                        <img src="{{ asset('img/j7-car.png') }}" id="carImageJ7" class="center-car-image" alt="Jaecoo J7">
                    </div>
                </div>
                <div class="model-info-panel text-center mt-4">
                    <h2>Jaecoo J7</h2>
                    <div class="color-options mt-3">
                        <button class="color-swatch active" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car.png') }}" style="background-color: #A3B5A6;"></button>
                        <button class="color-swatch" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car2.png') }}" style="background-color: #B3C2C6;"></button>
                        <button class="color-swatch" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car3.png') }}" style="background-color: #6C7A89;"></button>
                        <button class="color-swatch" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car4.png') }}" style="background-color: #FFFFFF;"></button>
                        
                        <button class="color-swatch two-tone" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car5.png') }}">
                            <div class="top-half" style="background-color: #A3B5A6;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                        <button class="color-swatch two-tone" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car6.png') }}">
                            <div class="top-half" style="background-color: #B3C2C6;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                        <button class="color-swatch two-tone" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car7.png') }}">
                            <div class="top-half" style="background-color: #6C7A89;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                        <button class="color-swatch two-tone" data-target-car="carImageJ7" data-img-src="{{ asset('img/j7-car8.png') }}">
                            <div class="top-half" style="background-color: #FFFFFF;"></div>
                            <div class="bottom-half" style="background-color: #000000;"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =================================================================== --}}
{{-- ============= BAGIAN KARTU INFO KEDUA (BARU) ====================== --}}
{{-- =================================================================== --}}
<section class="info-card-section">
    <div class="container-fluid px-md-5">
        <div class="row g-3 g-lg-4">
            {{-- Card 1: Dealer Resmi --}}
            <div class="col-lg-4 col-md-12">
                <a href="/dealer" class="info-card-link">
                    <div class="info-card h-100">
                        <img src="{{ asset('img/dealer-resmi.jpg') }}" class="card-img" alt="Dealer Resmi Jaecoo">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                            <div>
                                <h3 class="card-title">Lokasi Dealer</h3>
                            </div>
                            <p class="card-text-link">Temukan Dealer &rarr;</p>
                        </div>
                    </div>
                </a>
            </div>
            {{-- Card 2: Layanan Servis --}}
            <div class="col-lg-4 col-md-12">
                <a href="/service" class="info-card-link">
                    <div class="info-card h-100">
                        <img src="{{ asset('img/layanan-servis.jpg') }}" class="card-img" alt="Layanan Servis Jaecoo">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                             <div>
                                 <h3 class="card-title">Layanan Servis</h3>
                            </div>
                            <p class="card-text-link">Jadwalkan Servis &rarr;</p>
                        </div>
                    </div>
                </a>
            </div>
            {{-- Card 3: Kredit & Pembiayaan --}}
            <div class="col-lg-4 col-md-12">
                <a href="/credit" class="info-card-link">
                    <div class="info-card h-100">
                        <img src="{{ asset('img/kredit-pembiayaan.jpg') }}" class="card-img" alt="Kredit & Pembiayaan Jaecoo">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-4">
                             <div>
                                 <h3 class="card-title">Garansi JAECOO</h3>
                            </div>
                            <p class="card-text-link">Lihat Opsi &rarr;</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- =================================================================== --}}
{{-- ============= BAGIAN BERITA (BARU) ================================ --}}
{{-- =================================================================== --}}
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-dark" id="news">JAECOO NEWS</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/berita1.jpg') }}" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title mb-2">JAECOO J8: Kemewahan dalam Kesunyian di Tengah Hiruk Pikuk Kota</h5>
                        <p class="text-muted small">10 September 2025</p>
                        <a href="/the-luxury-of-silence-among-the-city-noise" class="btn btn-link p-0">Learn more &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/beritata2.jpg') }}" class="card-img-top" alt="Berita 2">
                    <div class="card-body">
                        <h5 class="card-title mb-2">OMODA & JAECOO Cetak Rekor Penjualan Global Baru pada Agustus 2025</h5>
                        <p class="text-muted small">8 September 2025</p>
                        <a href="/new-records-markets-and-superhybrids" class="btn btn-link p-0">Learn more &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/berita3.jpg') }}" class="card-img-top" alt="Berita 3">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Mengenal Teknologi Superhybrid SHS: Solusi Mobilitas Masa Depan dari OMODA & JAECOO</h5>
                        <p class="text-muted small">5 September 2025</p>
                        <a href="/omoda-and-jaecoo-set-new-standard-of-hybrids-with-SHS-technology" class="btn btn-link p-0">Learn more &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
