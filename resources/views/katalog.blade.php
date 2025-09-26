<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Detail - JeWePe Wedding Organizer</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .navbar-brand {
            font-family: 'Great Vibes', cursive;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .hero-img {
            max-height: 400px;
            object-fit: cover;
            width: 100%;
            border-radius: 12px;
        }

        .form-section {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">JeWePe<span
                    class="text-primary">Wedding</span></a>
        </div>
    </nav>

    <!-- Detail Katalog -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-start">
                <!-- Gambar & Info -->
                <div class="col-md-6 mb-4">
                    <img src="{{ Storage::url($katalog->gambar ?? 'images/default.jpg') }}"
                        alt="{{ $katalog->name ?? 'Katalog' }}" class="hero-img mb-3">
                    <h2>{{ $katalog->name ?? 'Nama Paket Pernikahan' }}</h2>
                    <p class="text-muted">Lokasi: {{ $katalog->lokasi ?? 'Jakarta' }}</p>
                    <h4 class="text-primary">Rp {{ number_format($katalog->harga ?? 100000000, 0, ',', '.') }}</h4>
                    <p>{!! $katalog->deskripsi !!}</p>
                </div>

                <!-- Form Pemesanan -->
                <div class="col-md-6">
                    <div class="form-section">
                        <h4 class="mb-3">Form Pemesanan</h4>
                        <form action="{{ route('submit-pesanan', $katalog['id']) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" value="{{ old('nama_pemesan') }}"
                                    name="nama_pemesan">
                                @error('nama_pemesan')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Pemesan</label>
                                <input type="email" class="form-control" value="{{ old('email_pemesan') }}"
                                    name="email_pemesan">
                                @error('email_pemesan')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">No. Telepon</label>
                                <input type="number" class="form-control" value="{{ old('no_telp') }}" name="no_telp">
                                @error('no_telp')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggal Acara</label>
                                <input type="date" class="form-control" value="{{ old('tanggal_acara') }}"
                                    name="tanggal_acara">
                                @error('tanggal_acara')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Catatan</label>
                                <textarea class="form-control" value="{{ old('catatan') }}" name="catatan" rows="4"></textarea>
                                @error('catatan')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Kirim Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-4 border-top mt-5">
        <div class="container text-center">
            <p class="mb-0 text-muted small">&copy; 2025 JeWePe Wedding Organizer. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        })
    </script>
@endif
