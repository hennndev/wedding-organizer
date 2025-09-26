<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - JeWePe Wedding Organizer</title>

    <!-- Google Fonts -->
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

        /* Hero */
        .hero-about {
            background: url('{{ asset('images/wedding7.jpeg') }}') center/cover no-repeat;
            padding: 6rem 0;
            color: #fff;
            text-align: center;
            position: relative;
        }

        .hero-about::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .hero-about .content {
            position: relative;
            z-index: 2;
        }

        .hero-about h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 2.8rem;
        }

        /* Visi Misi */
        .visi-misi .icon {
            font-size: 40px;
            color: #7c3aed;
            margin-bottom: 1rem;
        }

        /* Tim */
        .team-member img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
        }

        /* Testimoni */
        .testimonial {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1.5rem;
            font-style: italic;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

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
    <section class="hero-about d-flex align-items-center justify-content-center">
        <div class="content">
            <h1>Tentang JeWePe Wedding Organizer</h1>
            <p class="lead mt-3">Menghadirkan momen pernikahan yang penuh cinta, indah, dan tak terlupakan.</p>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Siapa Kami?</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                JeWePe Wedding Organizer dengan tujuan membantu setiap pasangan
                mewujudkan pernikahan impian mereka. Kami percaya bahwa hari pernikahan bukan hanya sekadar
                acara, melainkan momen sekali seumur hidup yang layak direncanakan dengan sepenuh hati.
            </p>
        </div>
    </section>

    <!-- Visi Misi -->
    <section class="visi-misi py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Visi & Misi Kami</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon"><i class="bi bi-heart"></i></div>
                    <h5>Visi</h5>
                    <p class="text-muted">Menjadi wedding organizer terpercaya yang menghadirkan kebahagiaan bagi setiap
                        pasangan.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon"><i class="bi bi-stars"></i></div>
                    <h5>Misi</h5>
                    <p class="text-muted">Menciptakan pengalaman tak terlupakan melalui layanan profesional dan detail
                        yang sempurna.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon"><i class="bi bi-people"></i></div>
                    <h5>Komitmen</h5>
                    <p class="text-muted">Selalu mengutamakan kepuasan klien dengan sentuhan personal dan hangat.</p>
                </div>
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
