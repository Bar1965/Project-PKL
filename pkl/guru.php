<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Monitoring</title>

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
            color: #fff;
        }
        .card-stat {
            border: none;
            border-radius: 16px;
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

            <a href="dashboard.php" class="active">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="siswa.php">
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

            <h4 class="fw-bold mb-1">Dashboard Monitoring</h4>
            <p class="text-muted">Pantauan siswa praktik kerja lapangan</p>

            <div class="row g-4 mt-3">

                <!-- Jumlah Siswa -->
                <div class="col-md-4">
                    <div class="card card-stat shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Jumlah Siswa</p>
                                    <h2 class="fw-bold mb-0">25</h2>
                                </div>
                                <i class="bi bi-people fs-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kehadiran -->
                <div class="col-md-4">
                    <div class="card card-stat shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Kehadiran Hari Ini</p>
                                    <h2 class="fw-bold text-success mb-0">23</h2>
                                </div>
                                <i class="bi bi-calendar-check fs-1 text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Laporan -->
                <div class="col-md-4">
                    <div class="card card-stat shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Laporan Masuk</p>
                                    <h2 class="fw-bold text-danger mb-0">18</h2>
                                </div>
                                <i class="bi bi-file-earmark-text fs-1 text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>