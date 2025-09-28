@php
    if (!function_exists('formatRupiah')) {
        function formatRupiah($angka)
        {
            return 'IDR ' . number_format($angka, 0, ',', '.');
        }
    }
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Paket - JeWePe Wedding Organizer</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            color: #333;
        }

        .navbar-brand {
            font-family: 'Great Vibes', cursive;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .nav-link {
            font-weight: 500;
        }

        /* Hero */
        .hero-katalog {
            background: linear-gradient(135deg, #fce4ec, #fff);
            padding: 5rem 0;
            text-align: center;
        }

        .hero-katalog h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        .hero-katalog p {
            max-width: 650px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #555;
        }

        /* Card */
        .catalog-card {
            border: 1px solid #eee;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            transition: all .2s ease-in-out;
        }

        .catalog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        .catalog-card img {
            height: 180px;
            object-fit: cover;
        }

        .catalog-card h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        /* Filter */
        .filter-bar {
            background: #fff;
            border-radius: 10px;
            padding: 1rem 1.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        footer {
            background: #f1f1f1;
            padding: 2rem 0;
        }

        footer h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">JeWePe<span
                    class="text-primary">Wedding</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="nav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('katalogs') }}">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-primary ms-lg-3" href="{{ route("katalogs") }}">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Katalog -->
    <section class="hero-katalog">
        <div class="container">
            <h1>Katalog Paket Pernikahan</h1>
            <p class="mt-3">Temukan paket terbaik untuk hari spesial Anda. Dari dekorasi elegan, venue romantis,
                hingga katering
                istimewa, semua tersedia sesuai kebutuhan dan budget Anda.</p>
        </div>
    </section>

    <!-- Daftar Paket -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($katalogs as $katalog)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('katalog', $katalog->id) }}" class="text-decoration-none text-dark">
                            <div class="card catalog-card h-100">
                                <img src="{{ Storage::url($katalog->gambar) }}" alt="{{ $katalog->name }}">
                                <div class="card-body">
                                    <h6 class="mb-1">{{ $katalog->name }}</h6>
                                    <p class="text-muted small mb-1">📍 {{ $katalog->lokasi }}</p>
                                    <p class="fw-bold mb-0">{{ formatRupiah($katalog->harga) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5 border-top">
        <div class="container">
            <div class="row text-center text-md-start align-items-start">

                <!-- Kolom Kiri -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="fw-bold text-primary">JeWePe</h4>
                    <p class="text-muted mt-3" style="max-width: 600px;">
                        Hari spesial Anda seharusnya dipenuhi dengan kebahagiaan, cinta, dan<br>
                        momen tak terlupakan. Tujuan kami adalah membuat pengalaman panjangnya<br>
                        perencanaan pernikahan Anda menjadi menyenangkan.
                    </p>
                </div>

                <!-- Kolom Tengah -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route("home") }}" class="text-decoration-none text-muted d-block mb-2">Beranda</a></li>
                        <li><a href="{{ route("katalogs") }}" class="text-decoration-none text-muted d-block mb-2">Katalog</a></li>
                        <li><a href="{{ route("tentang-kami") }}" class="text-decoration-none text-muted d-block">Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Kontak Kami</h5>
                    <p class="mb-1 text-muted">📞 +62-812-8888-77</p>
                    <p class="text-muted">✉️ <a href="mailto:JeWePe@gmail.com"
                            class="text-decoration-none text-muted">JeWePe@gmail.com</a></p>
                    <a href="mailto:JeWePe@gmail.com" class="btn btn-primary btn-sm mt-2">Kirim Email</a>
                </div>
            </div>

            <hr class="my-4">
            <p class="text-center text-muted small mb-0">&copy; 2025 JeWePe. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
