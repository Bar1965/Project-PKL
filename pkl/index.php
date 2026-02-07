<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Prakerin Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f3f6fd;
        }

        /* ===== NAVBAR ===== */
        .navbar-custom {
            background: #ffffff;
            border-radius: 18px;
            margin: 20px auto;
            padding: 12px 24px;
            max-width: 1100px;
            box-shadow: 0 10px 30px rgba(0,0,0,.05);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 600;
            color: #5a67f2;
        }

        .navbar-brand img {
            height: 36px;
            margin-right: 10px;
        }

        .nav-link {
            color: #6b7280 !important;
            margin: 0 10px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #5a67f2, #7f8cff);
            border: none;
            border-radius: 12px;
            padding: 8px 22px;
        }

        /* ===== HERO ===== */
        .hero {
            max-width: 1100px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 26px;
            padding: 50px;
            box-shadow: 0 30px 60px rgba(0,0,0,.08);
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
        }

        .hero-text {
            width: 50%;
        }

        .hero-text h1 {
            font-size: 36px;
            font-weight: 600;
            color: #3f3d56;
        }

        .hero-text p {
            margin-top: 14px;
            color: #6b7280;
            line-height: 1.7;
        }

        .hero-text .btn {
            margin-top: 24px;
        }

        /* ===== ILUSTRASI (SUDAH MENYATU) ===== */
        .hero-image {
            width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            width: 100%;
            max-width: 380px; /* <<< ILUSTRASI LEBIH GEDE TAPI AMAN */
            object-fit: contain;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text,
            .hero-image {
                width: 100%;
            }

            .hero-text h1 {
                font-size: 28px;
            }

            .hero-image img {
                max-width: 300px;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo2.png" alt="Logo Sekolah">
            PRAKERIN SMK NEGRI 3 PADANG
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="absensi.php">Absensi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Berkas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
            </ul>
        </div>

        <a href="menu.php" class="btn btn-primary">Mulai</a>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Sistem Informasi<br>Prakerin Siswa</h1>
            <p>
                Selamat Datang Akbar. Website ini 
                merupakan aplikasi Praktik Kerja Industri SMKN 3 PADANG
                yang digunakan untuk absensi siswa, pengelolaan berkas
                prakerin, serta monitoring kegiatan selama PKL.
            </p>
            <a href="#" class="btn btn-primary">More Info</a>
        </div>

        <div class="hero-image">
            <img src="gambar.png" alt="Ilustrasi Prakerin">
        </div>
    </div>
</section>

</body>
</html>