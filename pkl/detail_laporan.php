<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Laporan PKL</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .card {
            border-radius: 14px;
        }
        .label {
            font-weight: 600;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Detail Laporan PKL</h3>
            <p class="text-muted mb-0">Informasi lengkap laporan kegiatan siswa</p>
        </div>
        <a href="laporan.php" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Card Detail -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-6">
                    <p class="label mb-1">Nama Siswa</p>
                    <p>Ahmad Fauzan</p>
                </div>
                <div class="col-md-6">
                    <p class="label mb-1">Tanggal Laporan</p>
                    <p>01 Februari 2026</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <p class="label mb-1">Kelas</p>
                    <p>XII TKJ 1</p>
                </div>
                <div class="col-md-6">
                    <p class="label mb-1">Tempat Magang</p>
                    <p>PT Telkom Indonesia</p>
                </div>
            </div>

            <div class="mb-3">
                <p class="label mb-1">Judul Kegiatan</p>
                <p>Memperbaiki Jaringan Data </p>
            </div>

            <div class="mb-4">
                <p class="label mb-1">Deskripsi Kegiatan</p>
                <div class="border rounded p-3 bg-light">
                    Hari ini saya memperbaiki jaringan data yg rusak ke dalam sistem perusahaan
                    meliputi instalasi, konfigurasi, perbaikan hardware, dan jaringan.
                    Selain itu saya melakukan pengecekan ulang agar data yang dimasukkan
                    sesuai dengan dokumen yang diberikan oleh pembimbing lapangan.
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <p class="label mb-1">Jam Masuk</p>
                    <p>08:00 WIB</p>
                </div>
                <div class="col-md-6">
                    <p class="label mb-1">Jam Pulang</p>
                    <p>16:00 WIB</p>
                </div>
            </div>

            <div class="mb-4">
                <p class="label mb-1">Status Laporan</p>
                <span class="badge bg-success fs-6">Disetujui</span>
            </div>

            <!-- Action -->
            <div class="d-flex gap-2">
                <a href="#" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Setujui
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="bi bi-x-circle"></i> Tolak
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>