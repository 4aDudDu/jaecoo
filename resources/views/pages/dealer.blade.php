@extends('layouts.app')

@section('content')

{{-- Bagian Peta Google Maps --}}
<section id="google-map-section" class="py-5 bg-light">
    <div class="container">
        {{-- Judul Seksi --}}
        <div class="row mb-4 mapss">
        
        </div>
        
        {{-- Wrapper untuk Peta Responsif dengan Border --}}
        <div class="row">
            <div class="col">
                <div class="map-responsive-wrapper shadow">
                    <iframe 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        loading="lazy" 
                        allowfullscreen 
                        referrerpolicy="no-referrer-when-downgrade" 
                        src="https://maps.google.com/maps?q=0.505412,101.433368&z=15&output=embed">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection