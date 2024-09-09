<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moka Point | {{ $title }} </title>
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    {{-- tailwind --}}
    {{-- <script src="https://cdn.tailwindcss.com/3.4.5"></script> --}}
    @vite('resources/css/app.css')
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- swal --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- gsap --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script> --}}
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
    @yield('styles')
</head>
<body>
    {{-- @include('partials.loader') --}}
    @include('partials.nav')
    
    @yield('content')

    @include('partials.footer')
    @yield('scripts')
</body>
</html>