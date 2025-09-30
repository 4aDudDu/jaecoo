@extends('layouts.app')

@section('content')
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('img/p-kredit.png') }}'); min-height: 70vh; background-size: cover; background-position: center;">
            
            {{-- Caption yang sudah responsif --}}
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 px-4">
                <div class="caption-content text-center text-md-start">
                    {{-- Font size lebih kecil di mobile (display-5) dan lebih besar di desktop (display-md-2) --}}
                    <h1 class="display-5 display-md-2 fw-bold">Garansi JAECOO</h1>
                    
                    <a href="#warranty-section" class="btn btn-outline-light rounded-pill px-4 py-2 mt-3 fs-5">
                        Selengkapnya<span class="ms-2">&rarr;</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>

{{-- ======================================================= --}}
{{-- START: Bagian Accordion Garansi                       --}}
{{-- ======================================================= --}}
<section id="warranty-section" class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <div class="accordion accordion-custom" id="warrantyAccordion">

                    {{-- Item 1: Ketentuan Garansi --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Ketentuan Garansi
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#warrantyAccordion">
                            <div class="accordion-body">
                                <p>Untuk mendapatkan Perbaikan dalam Garansi, kondisi berikut harus dipenuhi:</p>
                                <ul>
                                    <li>Melakukan Perbaikan Garansi, perbaikan lain, dan perawatan Mobil JAECOO hanya di Dealer dan sesuai dengan persyaratan volume dan waktu yang tertera di Buku Manual Pengoperasian Mobil dan Buku Servis.</li>
                                    <li>Adanya tanda di Buku Servis dari Dealer mengenai pelaksanaan pekerjaan perawatan rutin atau tambahan mobil Anda (bagian "Catatan Perawatan", "Tanda pelaksanaan inspeksi rutin bodi"). Keberadaan tanda ini dikontrol oleh Pemilik.</li>
                                    <li>Pengoperasian, perawatan, penyimpanan, transportasi, dan pemeliharaan Mobil JAECOO sesuai dengan persyaratan Buku Manual Mobil JAECOO dan Buku Servis.</li>
                                    <li>Ketersediaan cek, nota, pesanan, dan dokumen lain yang terkait dengan pembelian dan perawatan Mobil JAECOO dan suku cadang asli JAECOO.</li>
                                    <li>Menyediakan Mobil JAECOO untuk melakukan kampanye servis resmi yang diumumkan oleh Pabrikan dalam batas waktu yang ditentukan bersama Dealer, tetapi tidak lebih dari 14 (empat belas) hari kalender sejak tanggal Pemilik menerima pemberitahuan.</li>
                                    <li>Menyediakan Mobil JAECOO ke Dealer untuk jadwal perawatannya dan/atau layanan teknis tambahan sesuai dengan jadwal perawatan. Pada saat yang sama, perlu diperhatikan jarak tempuh antar servis sebesar 10.000 kilometer atau masa pakai mobil 12 (dua belas) bulan (tergantung mana yang lebih dulu) sejak saat perawatan sebelumnya.</li>
                                    <li>Pelaksanaan inspeksi Mobil JAECOO sebelum memulai perjalanan sesuai dengan petunjuk yang terdapat dalam Buku Servis.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Item 2: Kondisi Garansi --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Kondisi Garansi
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#warrantyAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li>Garansi untuk Mobil JAECOO adalah 3 (tiga) tahun atau 100.000 km jarak tempuh, tergantung mana yang lebih dulu, dengan batasan pada beberapa komponen dan suku cadang yang ditentukan dalam Buku Servis.</li>
                                    <li>Garansi 3 (tiga) tahun atau 100.000 km jarak tempuh, tergantung mana yang lebih dulu, berlaku untuk lapisan cat bodi dan jaminan bebas dari korosi tembus.</li>
                                    <li>Masa pakai Mobil JAECOO adalah 7 tahun atau 200.000 km jarak tempuh, tergantung mana yang lebih dulu.</li>
                                    <li>Setelah masa pakai Mobil JAECOO berakhir, pengoperasian lebih lanjut dimungkinkan asalkan kondisi teknisnya memenuhi persyaratan keselamatan wajib sesuai dengan undang-undang yang berlaku, serta melakukan perawatan dan perbaikan rutin di Dealer.</li>
                                    <li>Perhitungan periode garansi dimulai dari tanggal kalender Penyerahan Mobil JAECOO baru kepada Pemilik pertama, dan berlaku terlepas dari perpindahan hak kepemilikan selanjutnya.</li>
                                    <li>Pada unit/suku cadang/agregat yang digunakan dalam perbaikan garansi, jaminan diberikan hingga berakhirnya Garansi Mobil JAECOO, sesuai dengan syarat dan batasan yang ditentukan dalam Buku Servis.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Item 3: Batasan Garansi pada Komponen --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Batasan Garansi pada Komponen, Unit, dan Detailnya
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#warrantyAccordion">
                            <div class="accordion-body">
                                <p><strong>Garansi 3 (tiga) bulan atau 5.000 km jarak tempuh, mana yang lebih dulu, berlaku untuk komponen berikut:</strong></p>
                                <ul>
                                    <li>Baterai Aki Starter</li>
                                    <li>Busi</li>
                                    <li>Kampas dan bantalan rem</li>
                                    <li>Elemen kaca bodi, termasuk kaca spion eksternal</li>
                                    <li>Karet sikat pembersih kaca (wiper)</li>
                                    <li>Cakram rem</li>
                                    <li>Mekanisme kopling transmisi manual</li>
                                </ul>
                                <p><strong>Garansi 1 (satu) tahun atau 30.000 km jarak tempuh, mana yang lebih dulu, berlaku untuk komponen berikut:</strong></p>
                                <ul>
                                    <li>Elemen dekoratif eksternal pada bodi</li>
                                    <li>Sistem Pemanas Serat</li>
                                    <li>Pijakan kaki elektrik yang dapat ditarik</li>
                                </ul>
                                <p><strong>Garansi 3 (tiga) tahun atau 60.000 km, mana yang lebih dulu:</strong></p>
                                <ul>
                                    <li>Tie rod kemudi dan ujung kemudi</li>
                                    <li>Silent block, ball joint, lengan suspensi, elemen penyangga karet sasis, rak stabilizer, bantalan hub</li>
                                    <li>Roda kemudi</li>
                                    <li>Peredam kejut dan pegas suspensi depan dan belakang</li>
                                    <li>Produk karet lainnya (karet penutup debu, segel, dan gasket)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Item 4: Syarat Garansi untuk LCP & Korosi --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Syarat Pemberian Garansi untuk Lapisan Cat & Pernis (LCP) dan Korosi Tembus pada Bodi
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#warrantyAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li>Garansi hanya berlaku untuk lapisan cat yang diaplikasikan pada Mobil JAECOO saat produksi.</li>
                                    <li>Garansi untuk lapisan cat dan bebas korosi tembus pada bodi Mobil JAECOO hanya berlaku jika aturan pengoperasian dan persyaratan perawatan lapisan cat bodi yang tercantum dalam Buku Manual dan Buku Servis dipatuhi.</li>
                                    <li>Prasyarat untuk mempertahankan garansi adalah melakukan inspeksi bodi dan menghilangkan kerusakan yang teridentifikasi di Dealer JAECOO dalam waktu 1 (satu) bulan sejak tanggal kerusakan dicatat.</li>
                                    <li>Tanda mengenai perawatan bodi harus dicantumkan oleh Dealer di dalam Buku Servis.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Item 5: Garansi Suku Cadang --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Garansi Suku Cadang
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#warrantyAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li>Garansi yang diberikan untuk suku cadang asli JAECOO yang dibeli dari Dealer dan dipasang di Dealer JAECOO adalah 1 (satu) tahun atau 30.000 km, mana yang lebih dulu, kecuali untuk suku cadang yang disebutkan di bawah.</li>
                                    <li>Garansi 3 (tiga) bulan atau 5.000 km jarak tempuh, mana yang lebih dulu, berlaku untuk suku cadang berikut: Baterai Aki Starter, Busi, Kampas dan bantalan rem, Elemen kaca bodi termasuk kaca spion eksternal, Karet sikat pembersih kaca (wiper), Cakram rem, Mekanisme kopling transmisi manual.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Item 6: Definisi --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Definisi
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#warrantyAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>PABRIKAN</strong> - CHERY AUTOMOBILE Co., Ltd atau perusahaan yang memproduksi mobil merek CHERY-JAECOO / JAECOO berdasarkan lisensi atau perjanjian lain dengan CHERY AUTOMOBILE CO., Ltd, yang tertera di Paspor Kendaraan (STNK/BPKB).</li>
                                    <li><strong>DISTRIBUTOR</strong> - Perusahaan yang berwenang untuk penjualan mobil dan suku cadang asli merek JAECOO kepada dealer.</li>
                                    <li><strong>DEALER</strong> - Organisasi yang berwenang oleh Distributor untuk penjualan mobil dan/atau suku cadang asli merek JAECOO, dengan menyediakan layanan pra-penjualan, teknis, garansi, pasca-garansi kepada Pemilik.</li>
                                    <li><strong>MOBIL JAECOO (MOBIL)</strong> - Mobil JAECOO yang dikirim oleh Pabrikan ke Distributor dan dibeli oleh Pemilik dari Dealer atau dari Pemilik sebelumnya.</li>
                                    <li><strong>GARANSI</strong> - Jaminan kualitas untuk Mobil dan suku cadang asli merek JAECOO, yang disediakan oleh Pabrikan selama Periode Garansi.</li>
                                    <li><strong>PEMILIK</strong> - Orang yang membeli Mobil dari Dealer atau dari Pemilik sebelumnya.</li>
                                    <li><strong>SUKU CADANG ASLI</strong> - Suku cadang yang diproduksi sesuai dengan persyaratan teknis Pabrikan, yang dipasok ke Dealer oleh Distributor.</li>
                                    <li><strong>PERBAIKAN GARANSI</strong> - Perbaikan Mobil JAECOO menggunakan suku cadang asli JAECOO untuk menghilangkan kekurangan yang teridentifikasi yang disebabkan oleh kualitas bahan, manufaktur, dan/atau perakitan (kekurangan produksi), yang dilakukan oleh Dealer secara gratis bagi pemilik mobil selama periode garansi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
{{-- CSS Kustom untuk Accordion --}}
<style>
    .accordion-custom .accordion-item {
        border: none;
        border-bottom: 1px solid #dee2e6; /* Garis pemisah antar item */
    }

    .accordion-custom .accordion-header {
        margin-bottom: 0;
    }

    .accordion-custom .accordion-button {
        background-color: #fff;
        color: #212529;
        font-size: 1.25rem;
        padding: 1.5rem 1.25rem;
        border: none;
        box-shadow: none; /* Menghilangkan shadow saat focus */
    }

    /* Mengubah warna saat accordion aktif */
    .accordion-custom .accordion-button:not(.collapsed) {
        background-color: #fff;
        color: #000;
        box-shadow: none;
    }

    /* Menghilangkan ikon panah default bootstrap */
    .accordion-custom .accordion-button::after {
        background-image: none;
        font-family: 'FontAwesome'; /* Pastikan FontAwesome sudah diload jika ingin ikon lain */
        content: '+';
        font-size: 2rem;
        font-weight: 300;
        transform: none; /* Menonaktifkan rotasi default */
        transition: transform 0.2s ease-in-out;
    }

    /* Mengubah ikon menjadi '-' saat accordion terbuka */
    .accordion-custom .accordion-button:not(.collapsed)::after {
        content: '−'; /* Karakter minus */
        transform: rotate(0deg); /* Tidak perlu rotasi */
    }
    
    .accordion-body {
        font-size: 1rem;
        color: #6c757d;
    }
</style>
@endpush