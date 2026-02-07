<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kehadiran Siswa</title>

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
            <a href="data_siswa.php">
                <i class="bi bi-people me-2"></i> Data Siswa
            </a>
            <a href="kehadiran.php" class="active">
                <i class="bi bi-calendar-check me-2"></i> Kehadiran
            </a>
            <a href="laporan.php">
                <i class="bi bi-file-earmark-text me-2"></i> Laporan
            </a>
        </div>

        <!-- ===== MAIN CONTENT ===== -->
        <div class="col-md-9 col-lg-10 p-4">
            <h4 class="fw-bold">Kehadiran Siswa PKL</h4>
            <p class="text-muted">Daftar hadir siswa magang</p>

            <div class="card shadow-sm border-0 mt-3">
                <div class="card-body">

                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Pulang</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Dila Tresetan Aliya</td>
                                <td>01-02-2026</td>
                                <td>08:00</td>
                                <td>16:00</td>
                                <td><span class="badge bg-success">Hadir</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Siti Aisyah</td>
                                <td>01-02-2026</td>
                                <td>08:05</td>
                                <td>16:00</td>
                                <td><span class="badge bg-success">Hadir</span></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Muhammad Rizki</td>
                                <td>01-02-2026</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge bg-warning text-dark">Izin</span></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Nurul Hidayah</td>
                                <td>01-02-2026</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge bg-danger">Alfa</span></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Andi Pratama</td>
                                <td>01-02-2026</td>
                                <td>07:55</td>
                                <td>16:10</td>
                                <td><span class="badge bg-success">Hadir</span></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Dewi Lestari</td>
                                <td>01-02-2026</td>
                                <td>08:10</td>
                                <td>15:50</td>
                                <td><span class="badge bg-success">Hadir</span></td>
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