<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Prakerin - SMKN 3 Padang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins', sans-serif;
    background:#f8f9fb;
}

/* NAVBAR */
.navbar-brand img{
    height:38px;
    margin-right:10px;
}

/* HERO */
.hero{
    padding:45px 0;
}

.hero h1{
    font-size:2.2rem;
}

/* ===== ILUSTRASI (DIPERBAIKI SAJA) ===== */
.hero-illustration{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#ffffff);
    border-radius:32px;
    padding:28px;
    box-shadow: 0 12px 30px rgba(251, 250, 250, 0.06);
}

.hero-illustration img{
    max-width:420px;
    width:100%;
    height:auto;
    display:block;
}
/* ===== END ILUSTRASI ===== */

/* MENU */
#menu{
    padding:40px 0;
}

.menu-card{
    border:0;
    border-radius:16px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
    padding:18px;
    height:100%;
    display:flex;
    flex-direction:column;
}

.menu-card .btn{
    margin-top:auto;
}

/* ICON */
.icon-box{
    width:52px;
    height:52px;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    margin-bottom:12px;
}

.bg-blue{background:#e0f2fe;color:#0284c7;}
.bg-green{background:#dcfce7;color:#16a34a;}
.bg-purple{background:#f3e8ff;color:#9333ea;}
.bg-orange{background:#ffedd5;color:#ea580c;}
.bg-red{background:#fee2e2;color:#dc2626;}
.bg-teal{background:#ccfbf1;color:#0d9488;}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
<div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
        <img src="logo2.png" alt="Logo SMKN 3 Padang">
        SMKN 3 PADANG
    </a>

    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav align-items-center">
            <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Panduan</a></li>
            <li class="nav-item dropdown ms-3">
                <a class="btn btn-light rounded-pill dropdown-toggle" data-bs-toggle="dropdown">
                    Hi, Akbar
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>

<!-- HERO -->
<section class="hero">
<div class="container">
<div class="row align-items-center">

    <div class="col-lg-6">
        <span class="badge bg-primary mb-2">BARU</span>
        <h1 class="fw-bold mb-2">
            Siap Menjalani<br>
            <span class="text-primary">Masa Prakerin?</span> 🚀
        </h1>
        <p class="text-muted mb-3">
            Platform terintegrasi untuk siswa SMKN 3 Padang. Kelola absensi,
            laporan, dan komunikasi dengan mudah.
        </p>
        <a href="#menu" class="btn btn-primary px-4 py-2 rounded-pill">
            Eksplor Menu
        </a>
    </div>

    <!-- ILUSTRASI (POSISI & UKURAN SAMA) -->
    <div class="col-lg-6 text-center">
        <div class="hero-illustration">
            <img src="gambar2.png" alt="Ilustrasi Prakerin">
        </div>
    </div>

</div>
</div>
</section>

<!-- MENU UTAMA -->
<section id="menu">
<div class="container">
    <h5 class="fw-semibold mb-0">Menu Utama</h5>
    <p class="text-muted mb-3">Akses fitur yang kamu butuhkan hari ini.</p>

    <div class="row g-3">

        <div class="col-md-4">
            <div class="menu-card">
                <div class="icon-box bg-blue"><i class="bi bi-person"></i></div>
                <h6>Profile Siswa</h6>
                <p class="text-muted small">Lihat dan update biodata siswa.</p>
                <a href="data.php" class="btn btn-light btn-sm">Buka Profile</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="menu-card">
                <div class="icon-box bg-green"><i class="bi bi-clipboard-check"></i></div>
                <h6>Absensi Harian</h6>
                <p class="text-muted small">Absen harian dengan validasi.</p>
                <a href="absensi.php" class="btn btn-light btn-sm">Isi Absen</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="menu-card">
                <div class="icon-box bg-purple"><i class="bi bi-building"></i></div>
                <h6>Daftar Tempat</h6>
                <p class="text-muted small">Daftarkan tempat PKL.</p>
                <a href="tempat_pkl.php" class="btn btn-light btn-sm">Daftar Baru</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="menu-card">
                <div class="icon-box bg-orange"><i class="bi bi-star"></i></div>
                <h6>Rekomendasi</h6>
                <p class="text-muted small">Tempat PKL rekomendasi.</p>
                <a href="rekomendasi.php" class="btn btn-light btn-sm">Cek Lowongan</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="menu-card">
                <div class="icon-box bg-red"><i class="bi bi-bell"></i></div>
                <h6>Notifikasi</h6>
                <p class="text-muted small">Info penting dari sekolah.</p>
                <a href="notifikasi.php" class="btn btn-light btn-sm">Lihat Info</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="menu-card">
                <div class="icon-box bg-teal"><i class="bi bi-chat-dots"></i></div>
                <h6>Pesan & Diskusi</h6>
                <p class="text-muted small">Diskusi dengan pembimbing.</p>
                <a href="chat.php" class="btn btn-light btn-sm">Mulai Chat</a>
            </div>
        </div>

    </div>
</div>
</section>

<footer class="text-center py-3 bg-white border-top">
<small class="text-muted">
© 2026 SMKN 3 Padang - Sistem Informasi Prakerin
</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>