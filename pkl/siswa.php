<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6fa;
        }
        .sidebar {
            min-height: 100vh;
            background: #1e293b;
        }
        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 6px;
            font-weight: 500;
        }
        .sidebar a:hover,
        .sidebar a.active {
            background: #334155;
            color: #fff;
        }
        .profile {
            color: white;
        }
        .table th {
            white-space: nowrap;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- ===== SIDEBAR ===== -->
        <div class="col-md-3 col-lg-2 sidebar p-4">
            <div class="profile mb-4">
                <h5 class="mb-0">Ana Ameliya</h5>
                <small>Guru Pembimbing</small>
            </div>

            <a href="dashboard.php">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="data_siswa.php" class="active">
                <i class="bi bi-people me-2"></i> Data Siswa
            </a>
            <a href="kehadiran.php">
                <i class="bi bi-calendar-check me-2"></i> Kehadiran
            </a>
            <a href="laporan.php">
                <i class="bi bi-file-earmark-text me-2"></i> Laporan
            </a>
        </div>

        <!-- ===== MAIN CONTENT ===== -->
        <div class="col-md-9 col-lg-10 p-4">
            <h4 class="fw-bold">Data Siswa PKL</h4>
            <p class="text-muted">Daftar siswa praktik kerja lapangan</p>

            <div class="card shadow-sm border-0 mt-3">
                <div class="card-body">

                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>NISN</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Tempat Magang</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Ahmad Fauzan</td>
                                <td>0058743211</td>
                                <td>XII TKJ 1</td>
                                <td>TEKNIK JARINGAN KOMPUTER</td>
                                <td>PT Digital Solusi</td>
                                <td class="text-center">
                                    <a href="detail.php?id=1" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Siti Aisyah</td>
                                <td>0058743212</td>
                                <td>XII ULW 1</td>
                                <td>USAHA LAYANAN WISATA</td>
                                <td>CV Techno Media</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=2" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Muhammad Rizki</td>
                                <td>0058743213</td>
                                <td>XII TKJ 2</td>
                                <td>Teknik Komputer & Jaringan</td>
                                <td>PT Net Informatika</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=3" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Nurul Hidayah</td>
                                <td>0058743214</td>
                                <td>XII BDP 1</td>
                                <td>Bisnis Daring & Pemasaran</td>
                                <td>Toko Online Nusantara</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=4" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Andi Pratama</td>
                                <td>0058743215</td>
                                <td>XII BDP 2 2</td>
                                <td>Bisnis Digital & Pemasaran</td>
                                <td>Basko Grand Mall Padang</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=5" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Dewi Lestari</td>
                                <td>0058743216</td>
                                <td>XII AKL 1</td>
                                <td>Akuntansi & Keuangan Lembaga</td>
                                <td>Kantor Akuntan Jaya</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=6" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Rian Saputra</td>
                                <td>0058743217</td>
                                <td>XII TKJ 1</td>
                                <td>Teknik Komputer & Jaringan</td>
                                <td>PT Global Network</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=7" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Putri Maharani</td>
                                <td>0058743218</td>
                                <td>XII BDP 2</td>
                                <td>Bisnis Daring & Pemasaran</td>
                                <td>Marketplace ID</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=8" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>Fajar Ramadhan</td>
                                <td>0058743219</td>
                                <td>XII MPLB 2</td>
                                <td>Perkantoran Dan Menagement Bisnis</td>
                                <td>Startup Kreatif</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=9" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>Lina Oktaviani</td>
                                <td>0058743220</td>
                                <td>XII AKL 2</td>
                                <td>Akuntansi & Keuangan Lembaga</td>
                                <td>PT Finance Sejahtera</td>
                                <td class="text-center">
                                    <a href="detail_siswa.php?id=10" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>