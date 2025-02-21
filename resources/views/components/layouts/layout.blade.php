<!doctype html>
    <title>Blog Hotspot</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <link
        rel="icon"
        href="{{asset('/images/LOGO.png')}}"
        type="image/x-icon"
    />

    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .clamp.one-line {
            -webkit-line-clamp: 1;
        }


    </style>
    
    <link href="{{ asset('Frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('Frontend/assets/css/main.css') }}" rel="stylesheet">



<body style="font-family: Open Sans, sans-serif margin: 0; padding: 0;" class="index-page">
    <x-layouts.navbar />

        {{ $slot }}

        <x-layouts.subscribe />

        <x-layouts.footer />
        <x-flash />

        <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Main JS File -->
    <script src="{{ asset('Frontend/assets/js/main.js') }}"></script>

    </body>
</html>
