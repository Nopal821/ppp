<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jurnal</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom Styles */
        .carousel-item img {
            width: 100%;
            height: 100vh; /* Menggunakan viewport height agar gambar memenuhi lebih banyak area vertikal */
            object-fit: cover;
            border-radius: 0.5rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .carousel-caption h5 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 1rem;
        }

        /* Tombol Navigasi Carousel */
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }

        /* Posisi tombol dashboard */
        .dashboard-button {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        /* Mengatur bagian tombol di dalam gambar carousel */
        .header-buttons a {
            margin-left: 1rem;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Tombol Dashboard -->
    <div class="dashboard-button">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-lg">Dashboard</a>
    </div>
    
    <!-- Carousel -->
    <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/img1.jpg') }}" alt="Gambar 1">
                <div class="carousel-caption">
                    <h5>Selamat datang di lapas kelas IIA GARUT</h5>
                    <p>Lembaga Pemasyarakatan (Lapas) ini melayani pembinaan kepada narapidana untuk daerah Kabupaten Garut dan narapidana dari daerah lain sesuai dengan kondisi kasus/perkaranya.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/lapas2.jpg') }}" alt="Gambar 2">
                <div class="carousel-caption">
                    <h5>Sejarah Berdirinya Lembaga Pemasyarakatan (Lapas)</h5>
                    <p>Lembaga Pemasyarakatan (Lapas) pertama kali didirikan pada masa kolonial Belanda sebagai bagian dari sistem hukum di Indonesia.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/lapas-garut.jpeg') }}" alt="Gambar 3">
                <div class="carousel-caption">
                    <h5>Reformasi Sistem Lapas</h5>
                    <p>Pada tahun 1964, setelah Indonesia merdeka, sistem Lapas mulai mengalami reformasi. Reformasi sistem peradilan pidana bertujuan untuk meningkatkan keadilan dan efisiensi dalam penanganan kasus pidana.</p>
                </div>
            </div>
        </div>

        <!-- Navigasi tombol -->
        <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
