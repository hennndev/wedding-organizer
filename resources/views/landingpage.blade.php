<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeWePe Wedding Organizer</title>

    <!-- ✅ Google Fonts -->
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

        /* Navbar */
        .navbar-brand {
            font-family: 'Great Vibes', cursive;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .nav-link {
            font-weight: 500;
        }

        /* Hero */
        .hero {
            background: #f8f9fa;
            padding: 5rem 0;
            text-align: center;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        .hero p {
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.05rem;
        }

        /* Katalog Cards */
        .catalog-card img {
            height: 120px;
            object-fit: cover;
        }

        .catalog-card h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        /* Services */
        .services {
            background: #f8f9fa;
            padding: 4rem 0;
        }

        .services .icon {
            font-size: 40px;
            margin-bottom: 1rem;
            color: #7c3aed;
        }

        .services h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        /* Gallery */
        .gallery img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }


        /* Footer */
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

    @php
        if (!function_exists('formatRupiah')) {
            function formatRupiah($angka)
            {
                return 'IDR ' . number_format($angka, 0, ',', '.');
            }
        }

        $packages = [
            (object) [
                'name' => 'Araya Club House Jakarta',
                'price' => 125000000,
                'vendor' => 'Weddings Elloy',
                'tags' => ['500 pax', 'Katering'],
                'image' => asset('images/paket1.jpg'),
            ],
            (object) [
                'name' => 'Diamond Package',
                'price' => 110000000,
                'vendor' => 'Dewata Bunga - Wedding',
                'tags' => ['500 pax', 'Katering', 'Venue'],
                'image' => asset('images/paket2.jpeg'),
            ],
            (object) [
                'name' => 'Wedding Asik Package 1',
                'price' => 110000000,
                'vendor' => 'Dewata Bunga - Wedding',
                'tags' => ['500 pax', 'Venue'],
                'image' => asset('images/paket3.jpeg'),
            ],
            (object) [
                'name' => 'Wedding Asik Package 2',
                'price' => 110000000,
                'vendor' => 'Dewata Bunga - Wedding',
                'tags' => ['500 pax', 'Decoration'],
                'image' => asset('images/paket4.jpeg'),
            ],
        ];

        $services = [
            (object) [
                'title' => 'Perencanaan Penuh',
                'desc' => 'Kami bantu merencanakan setiap detail agar hari spesial berjalan sempurna.',
                'icon' => 'bi-calendar-check',
            ],
            (object) [
                'title' => 'Koordinasi',
                'desc' => 'Kami pastikan semua persiapan, jadwal, dan kebutuhan pernikahan terlaksana dengan lancar.',
                'icon' => 'bi-people',
            ],
            (object) [
                'title' => 'Pernikahan',
                'desc' => 'Paket sederhana & hangat dengan layanan sesuai keinginan Anda.',
                'icon' => 'bi-heart',
            ],
        ];

        $gallery = [
            asset('images/wedding1.jpeg'),
            asset('images/wedding2.jpeg'),
            asset('images/wedding3.jpeg'),
            asset('images/wedding4.jpeg'),
            asset('images/wedding5.jpeg'),
            asset('images/wedding6.jpeg'),
            asset('images/wedding7.jpeg'),
            asset('images/wedding8.jpeg'),
        ];
    @endphp

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route("home") }}">JeWePe<span class="text-primary">Wedding</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="nav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route("home") }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route("tentang-kami") }}">Tentang Kami</a></li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-primary ms-lg-3" href="#contact">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero" id="hero">
        <div class="container">
            <img src="{{ asset('images/logo.jpeg') }}" class="mb-4" alt="Logo">
            <h1>Mewujudkan Kenangan Indah di Hari Pernikahan Anda</h1>
            <p class="text-muted mt-3">Hari istimewa Anda harus dipenuhi kebahagiaan, cinta, dan momen tak terlupakan.
                Tujuan kami adalah menjadikan perencanaan pernikahan lebih menyenangkan.</p>
            <a href="#katalog" class="btn btn-dark mt-4">Lihat Katalog</a>
        </div>
    </section>

    <!-- Katalog -->
    <section class="py-5" id="katalog">
        <div class="container">
            <h3 class="text-center mb-4">Paket Katalog</h3>
            <div class="row">
                @foreach ($katalogs as $katalog)
                    <a href="{{ route("katalog", $katalog["id"]) }}" class="col-md-3 mb-4">
                        <div class="card h-100 catalog-card">
                            <img src="{{ Storage::url($katalog->gambar) }}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h6 class="fw-bold">{{ $katalog->name }}</h6>
                                <p class="text-muted small mb-1">Lokasi: {{ $katalog->lokasi }}</p>
                                <p class="fw-bold">{{ formatRupiah($katalog->harga) }}</p>
                            </div>
                        </div>
                      </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Perencana Pernikahan di Indonesia -->
    <section class="py-5">
        <div class="container">
            <div class="section-title mb-3 d-flex justify-content-between align-items-center">
                <div>
                    <h3>Perencana Pernikahan di Indonesia</h3>
                    <small class="text-muted">Lihat rekomendasi dengan semua budget</small>
                </div>
            </div>

            <div class="d-flex flex-row flex-nowrap overflow-auto">
                <!-- Card 1 -->
                <div class="card me-3 planner-card" style="width:220px;">
                    <img src="{{ asset('images/bali1.jpeg') }}" class="card-img-top" alt="Nika di Bali">
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Nikah di Bali</h6>
                        <div class="text-danger small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-muted">132</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card me-3 planner-card" style="width:220px;">
                    <img src="{{ asset('images/nikah1.jpeg') }}" class="card-img-top"
                        alt="Amanda Renassa Wedding Organizer">
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Amanda Raisa Prewedding</h6>
                        <div class="text-danger small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-muted">8</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card me-3 planner-card" style="width:220px;">
                    <img src="{{ asset('images/nikah2.jpeg') }}" class="card-img-top" alt="Malaika Wedding Planner">
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Malika Love</h6>
                        <div class="text-danger small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-muted">31</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card me-3 planner-card" style="width:220px;">
                    <img src="{{ asset('images/nikah3.jpeg') }}" class="card-img-top" alt="FIVE Seasons WO">
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">AOC Cutie</h6>
                        <div class="text-danger small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-muted">107</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card me-3 planner-card" style="width:220px;">
                    <img src="{{ asset('images/nikah4.jpeg') }}" class="card-img-top" alt="Top Fusion Wedding">
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Top Fusion Wedding</h6>
                        <div class="text-danger small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-muted">63</span>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card me-3 planner-card" style="width:220px;">
                    <img src="{{ asset('images/nikah5.jpeg') }}" class="card-img-top" alt="Royal Wedding Planner">
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Royal Wedding Planner</h6>
                        <div class="text-danger small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="text-muted">54</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tambahkan CSS -->
    <style>
        .planner-card {
            border: 1px solid #eee;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }

        .planner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .planner-card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 150px;
            object-fit: cover;
        }
    </style>

    <!-- Services -->
    <section class="services" id="services" style="background-color: #fce4ec;">
        <div class="container">
            <h3 class="text-center mb-5">Our Services</h3>
            <div class="row text-center">
                @foreach ($services as $srv)
                    <div class="col-md-4">
                        <div class="icon">
                            <i class="bi {{ $srv->icon }}"></i>
                        </div>
                        <h5>{{ $srv->title }}</h5>
                        <p class="text-muted">{{ $srv->desc }}</p>
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
                        <li><a href="#hero" class="text-decoration-none text-muted d-block mb-2">Beranda</a></li>
                        <li><a href="#katalog" class="text-decoration-none text-muted d-block mb-2">Katalog</a></li>
                        <li><a href="#about" class="text-decoration-none text-muted d-block">Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Kontak Kami</h5>
                    <p class="mb-1 text-muted">📞 +62-812-9780-028</p>
                    <p class="text-muted">✉️ <a href="mailto:JeWePe@gmail.com"
                            class="text-decoration-none text-muted">JeWePe@gmail.com</a></p>
                    <a href="mailto:JeWePe@gmail.com" class="btn btn-primary btn-sm mt-2">Kirim Email</a>
                </div>
            </div>

            <!-- Garis Pembatas dan Copyright -->
            <hr class="my-4">
            <p class="text-center text-muted small mb-0">&copy; 2025 JeWePe. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>
