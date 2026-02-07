<?php
// simulasi data siswa
$siswa = [
    "nama" => "Eko Prasetya",
    "nisn" => "0056789123",
    "jk" => "Laki-laki",
    "kelas" => "XII TKJ 1",
    "jurusan" => "TEKNIK JARINGAN KOMPUTER",
    "tempat" => "PT Teknologi Nusantara",
    "pembimbing" => "Andi Saputra, S.Kom"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Profil Siswa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Inter',sans-serif;
    background:#f1f5f9;
}

/* ===== HEADER ===== */
.topbar{
    background:#fff;
    padding:14px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 1px 3px rgba(0,0,0,.05);
}
.brand{
    display:flex;
    align-items:center;
    gap:10px;
}
.brand img{
    width:34px;
    height:34px;
    object-fit:contain;
}
.brand span{
    font-weight:600;
    color:#4f46e5;
}

/* ===== CARD ===== */
.card-profile{
    max-width:900px;
    margin:60px auto;
    border-radius:20px;
    padding:40px;
    box-shadow:0 8px 30px rgba(0,0,0,.04);
}
.icon{
    width:52px;
    height:52px;
    border-radius:50%;
    background:#eef2ff;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#4f46e5;
    font-size:22px;
}
.label{
    font-size:13px;
    color:#64748b;
}
.value{
    font-weight:500;
    color:#0f172a;
}
footer{
    text-align:center;
    font-size:13px;
    color:#94a3b8;
    margin:40px 0 20px;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="topbar">
    <div class="brand">
        <!-- LOGO SEKOLAH -->
        <img src="logo2.png" alt="Logo Sekolah">
        <span>Sistem Prakerin</span>
    </div>
    <a href="menu.php" class="text-decoration-none text-muted small">
        ← Kembali ke Dashboard
    </a>
</div>

<!-- CONTENT -->
<div class="card card-profile bg-white">
    <div class="d-flex align-items-center gap-3 mb-4">
        <div class="icon">👤</div>
        <div>
            <h5 class="mb-0 fw-semibold">Profil Siswa</h5>
            <small class="text-muted">Data identitas peserta prakerin</small>
        </div>
    </div>

    <hr>

    <div class="row g-4 mt-2">
        <div class="col-md-6">
            <div class="label">Nama Lengkap</div>
            <div class="value"><?= $siswa['nama'] ?></div>
        </div>
        <div class="col-md-6">
            <div class="label">NISN</div>
            <div class="value"><?= $siswa['nisn'] ?></div>
        </div>
        <div class="col-md-6">
            <div class="label">Jenis Kelamin</div>
            <div class="value"><?= $siswa['jk'] ?></div>
        </div>
        <div class="col-md-6">
            <div class="label">Kelas</div>
            <div class="value"><?= $siswa['kelas'] ?></div>
        </div>
        <div class="col-md-6">
            <div class="label">Jurusan</div>
            <div class="value"><?= $siswa['jurusan'] ?></div>
        </div>
        <div class="col-md-6">
            <div class="label">Tempat Magang</div>
            <div class="value"><?= $siswa['tempat'] ?></div>
        </div>
        <div class="col-md-6">
            <div class="label">Pembimbing</div>
            <div class="value"><?= $siswa['pembimbing'] ?></div>
        </div>
    </div>
</div>

<footer>
    © 2026 Sistem Informasi Prakerin
</footer>

</body>
</html>