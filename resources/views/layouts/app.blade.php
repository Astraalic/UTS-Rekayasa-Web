<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktori UMKM</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <!-- CSS AOS Lokal -->
    <link rel="stylesheet" href="{{ asset('assets/aos.css') }}">
    
    <style>
        body {
            background-color: #1a1a1a !important;
            color: #d4af37 !important;
        }
        .navbar {
            background-color: #111111 !important;
            border-bottom: 1px solid #d4af37;
        }
        .navbar-brand, .nav-link {
            color: #d4af37 !important;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: #ffffff !important;
            transform: translateY(-2px);
        }
        
        /* Efek Animasi Card */
        .card-anim {
            background-color: #262626 !important;
            border: 1px solid #d4af37 !important;
            color: #e0e0e0 !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }
        .card-anim:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3) !important;
            border-color: #ffffff !important;
        }
        .card-anim img {
            transition: transform 0.4s ease;
        }
        .card-anim:hover img {
            transform: scale(1.05);
        }

        .text-gold, h1, h2, h3, h5, .card-title {
            color: #d4af37 !important;
        }
        .text-sub {
            color: #cccccc !important;
        }
        .btn-gold {
            color: #d4af37;
            border-color: #d4af37;
            transition: all 0.3s ease;
        }
        .btn-gold:hover {
            background-color: #d4af37;
            color: #111111;
            font-weight: bold;
            transform: scale(1.03);
        }
        .badge-gold {
            background-color: #d4af37;
            color: #111111;
            font-weight: bold;
        }
        footer {
            background-color: #111111 !important;
            border-top: 1px solid #333333 !important;
            color: #d4af37 !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg sticky-top mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">Direktori UMKM</a>
            <button class="navbar-toggler border-gold" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('product') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container flex-grow-1">
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-5">
        <p class="mb-0">&copy; 2026 Direktori UMKM &mdash; Ibnu Fayi Defci Putra (251011700507)</p>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- JS AOS Lokal -->
<script src="{{ asset('assets/aos.js') }}"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>
</body>
</html>