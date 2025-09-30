<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JAECOO Indonesia')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <style>
        /*
  CSS Kustom Scrollbar (Hitam & Putih)
*/

/* --------------------------------------
   1. UNTUK WEBKIT (Chrome, Safari, Edge, Opera)
   -------------------------------------- */

/* Lebar scrollbar */
::-webkit-scrollbar {
  width: 12px; /* Lebar vertical scrollbar */
  height: 12px; /* Tinggi horizontal scrollbar */
}

/* Track/jalur scrollbar */
::-webkit-scrollbar-track {
  background: #f0f0f0; /* Warna track: Putih keabu-abuan */
  border-radius: 10px; /* Sudut melengkung pada track */
}

/* Handle/pegangan scrollbar */
::-webkit-scrollbar-thumb {
  background-color: #333333; /* Warna handle: Hitam gelap */
  border-radius: 10px; /* Sudut melengkung pada handle */
  border: 3px solid #f0f0f0; /* Memberikan padding visual di sekitar handle */
}

/* Handle saat di-hover */
::-webkit-scrollbar-thumb:hover {
  background-color: #000000; /* Warna handle saat hover: Hitam pekat */
}

/* --------------------------------------
   2. UNTUK FIREFOX
   -------------------------------------- */

/* Properti khusus untuk Firefox */
* {
  /* Syntax: scrollbar-color: <thumb-color> <track-color> */
  scrollbar-color: #333333 #f0f0f0; 
  /* #333333 adalah warna handle (pegangan) */
  /* #f0f0f0 adalah warna track (jalur) */
  scrollbar-width: thin; /* Ukuran: auto, thin, or none */
}
    </style>
</head>
<body class="bg-dark text-white">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>