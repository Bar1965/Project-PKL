<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan PKL Siswa</title>

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
        .table th {
            white-space: nowrap;
        }
        .badge {
            padding: 6px 10px;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Header -->
    <div class="mb-4">
        <h3 class="fw-bold">Laporan Kegiatan PKL</h3>
        <p class="text-muted">Daftar laporan harian siswa magang</p>
    </div>

    <!-- Card Table -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal</th>
                        <th>Judul Kegiatan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmad Fauzan</td>
                        <td>01-02-2026</td>
                        <td>Menginput Data Produk</td>
                        <td>
                            <span class="badge bg-success">Disetujui</span>
                        </td>
                        <td>
                            <a href="detail_laporan.php?id=1" class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Siti Aisyah</td>
                        <td>01-02-2026</td>
                        <td>Mengarsip Dokumen</td>
                        <td>
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        </td>
                        <td>
                            <a href="detail_laporan.php?id=2" class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Muhammad Rizki</td>
                        <td>02-02-2026</td>
                        <td>Maintenance Jaringan</td>
                        <td>
                            <span class="badge bg-success">Disetujui</span>
                        </td>
                        <td>
                            <a href="detail_laporan.php?id=3" class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Nurul Hidayah</td>
                        <td>02-02-2026</td>
                        <td>Observasi Sistem Kerja</td>
                        <td>
                            <span class="badge bg-danger">Ditolak</span>
                        </td>
                        <td>
                            <a href="detail_laporan.php?id=4" class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>