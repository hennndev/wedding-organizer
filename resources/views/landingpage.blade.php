<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeWePe Wedding Organizer</title>

    <!-- ✅ Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">

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
        .hero { background: #f8f9fa; padding: 5rem 0; text-align: center; }
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
        .catalog-card img { height: 120px; object-fit: cover; }
        .catalog-card h6 { font-family: 'Playfair Display', serif; font-weight: 600; }

        /* Services */
        .services { background: #f8f9fa; padding: 4rem 0; }
        .services .icon { font-size: 40px; margin-bottom: 1rem; color: #7c3aed; }
        .services h5 { font-family: 'Playfair Display', serif; font-weight: 600; }

        /* Gallery */
        .gallery img { height: 200px; object-fit: cover; width: 100%; }

        /* Footer */
        footer { background: #f1f1f1; padding: 2rem 0; }
        footer h6 { font-family: 'Playfair Display', serif; font-weight: 600; }

    </style>
</head>

<body>

@php
    if (!function_exists('formatRupiah')) {
        function formatRupiah($angka) {
            return 'IDR ' . number_format($angka, 0, ',', '.');
        }
    }

    $packages = [
        (object)[ 'name'=>'Araya Club House Jakarta', 'price'=>125000000, 'vendor'=>'Weddings Elloy', 'tags'=>['500 pax','Katering'], 'image'=>asset('images/paket1.jpg') ],
        (object)[ 'name'=>'Diamond Package', 'price'=>110000000, 'vendor'=>'Dewata Bunga - Wedding', 'tags'=>['500 pax','Katering','Venue'], 'image'=>asset('images/paket2.jpeg') ],
        (object)[ 'name'=>'Wedding Asik Package 1', 'price'=>110000000, 'vendor'=>'Dewata Bunga - Wedding', 'tags'=>['500 pax','Venue'], 'image'=>asset('images/paket3.jpeg') ],
        (object)[ 'name'=>'Wedding Asik Package 2', 'price'=>110000000, 'vendor'=>'Dewata Bunga - Wedding', 'tags'=>['500 pax','Decoration'], 'image'=>asset('images/paket4.jpeg') ],
    ];

    $services = [
        (object)['title'=>'Perencanaan Penuh','desc'=>'Kami bantu merencanakan setiap detail agar hari spesial berjalan sempurna.','icon'=>'bi-calendar-check'],
        (object)['title'=>'Koordinasi','desc'=>'Kami pastikan semua persiapan, jadwal, dan kebutuhan pernikahan terlaksana dengan lancar.','icon'=>'bi-people'],
        (object)['title'=>'Pernikahan','desc'=>'Paket sederhana & hangat dengan layanan sesuai keinginan Anda.','icon'=>'bi-heart'],
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
        <a class="navbar-brand fw-bold" href="#">JeWePe<span class="text-primary">Wedding</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="#hero">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Our Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
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
        <p class="text-muted mt-3">Hari istimewa Anda harus dipenuhi kebahagiaan, cinta, dan momen tak terlupakan. Tujuan kami adalah menjadikan perencanaan pernikahan lebih menyenangkan.</p>
        <a href="#katalog" class="btn btn-dark mt-4">Lihat Katalog</a>
    </div>
</section>

<!-- Katalog -->
<section class="py-5" id="katalog">
    <div class="container">
        <h3 class="text-center mb-4">Paket Katalog</h3>
        <div class="row">
            @foreach($packages as $pkg)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 catalog-card">
                        <img src="{{ $pkg->image }}" alt="{{ $pkg->name }}" class="card-img-top">
                        <div class="card-body">
                            <h6 class="fw-bold">{{ $pkg->name }}</h6>
                            <p class="text-muted small mb-1">by {{ $pkg->vendor }}</p>
                            <p class="fw-bold">{{ formatRupiah($pkg->price) }}</p>
                            <div>
                                @foreach($pkg->tags as $tag)
                                    <span class="badge bg-secondary">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services -->
<section class="services" id="services">
    <div class="container">
        <h3 class="text-center mb-5">Our Services</h3>
        <div class="row text-center">
            @foreach($services as $srv)
                <div class="col-md-4">
                    <div class="icon"><i class="bi {{ $srv->icon }}"></i></div>
                    <h5>{{ $srv->title }}</h5>
                    <p class="text-muted">{{ $srv->desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About -->
<section class="py-5" id="about">
    <div class="container text-center">
        <h3>JeWePe</h3>
        <p class="text-muted">Hari spesial Anda seharusnya dipenuhi kebahagiaan, cinta, dan momen tak terlupakan. Tujuan kami adalah membuat pengalaman perencanaan pernikahan menyenangkan.</p>
    </div>
</section>

<!-- Gallery -->
<section class="py-5 bg-white" id="gallery">
    <div class="container">
        <h3 class="text-center mb-4">Galeri</h3>
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
            <div class="carousel-inner">
                @foreach($gallery as $index => $img)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ $img }}" 
                             class="d-block w-100 rounded shadow-sm" 
                             style="height:450px; object-fit:cover;" 
                             alt="Galeri">
                    </div>
                @endforeach
            </div>
            
            <!-- Tombol Next & Prev -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

            <!-- Indicator (bulat di bawah) -->
            <div class="carousel-indicators">
                @foreach($gallery as $index => $img)
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="{{ $index }}" 
                            class="{{ $index === 0 ? 'active' : '' }}" aria-current="true"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="py-5" id="contact">
    <div class="container text-center">
        <h3>Kontak Kami</h3>
        <p class="text-muted">Hubungi kami untuk informasi lebih lanjut atau pemesanan.</p>
        <p class="mb-1">📞 +62-812-9780-028</p>
        <p>✉️ JeWePe@gmail.com</p>
        <a href="mailto:JeWePe@gmail.com" class="btn btn-primary mt-3">Kirim Email</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container d-flex justify-content-between flex-wrap">
        <div>
            <h6>Navigasi</h6>
            <ul class="list-unstyled">
                <li><a href="#hero" class="text-decoration-none text-dark">Beranda</a></li>
                <li><a href="#katalog" class="text-decoration-none text-dark">Katalog</a></li>
                <li><a href="#services" class="text-decoration-none text-dark">Our Services</a></li>
                <li><a href="#about" class="text-decoration-none text-dark">Tentang Kami</a></li>
                <li><a href="#gallery" class="text-decoration-none text-dark">Galeri</a></li>
                <li><a href="#contact" class="text-decoration-none text-dark">Kontak</a></li>
            </ul>
        </div>
        <div>
            <h6>Kontak</h6>
            <p class="mb-1">📞 +62-812-9780-028</p>
            <p>✉️ JeWePe@gmail.com</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
