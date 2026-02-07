<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Monitoring Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
            font-family: 'Inter', system-ui, sans-serif;
        }
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 1px 3px rgba(0,0,0,.05);
        }
        .badge-soft {
            background: rgba(79,70,229,.1);
            color: #4f46e5;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- HEADER SISWA -->
    <div class="card p-4 mb-4">
        <div class="d-flex align-items-center gap-4">
            <img src="https://ui-avatars.com/api/?name=Eko+Pratama&background=4f46e5&color=fff"
                 class="rounded-circle" width="80">
            <div>
                <h4 class="fw-bold mb-1">DILA TRESTAN ALIYA</h4>
                <div class="text-muted mb-2">
                    Kelas XII TKJ 2 • NISN 1234567890
                </div>
                <span class="badge-soft">
                    PKL di PT Teknologi Nusantara
                </span>
            </div>
        </div>
    </div>

    <!-- RINGKASAN ABSENSI -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="fa-solid fa-check-circle text-success fs-3 mb-2"></i>
                <h5 class="fw-bold">24</h5>
                <p class="text-muted mb-0">Hadir</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="fa-solid fa-envelope text-warning fs-3 mb-2"></i>
                <h5 class="fw-bold">2</h5>
                <p class="text-muted mb-0">Izin</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="fa-solid fa-xmark-circle text-danger fs-3 mb-2"></i>
                <h5 class="fw-bold">1</h5>
                <p class="text-muted mb-0">Alpha</p>
            </div>
        </div>
    </div>

    <!-- RIWAYAT ABSENSI -->
    <div class="card mb-4">
        <div class="p-4 border-bottom">
            <h5 class="fw-semibold mb-0">Riwayat Absensi</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Jam Datang</th>
                        <th>Jam Pulang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10 Feb 2026</td>
                        <td><span class="badge bg-success">Hadir</span></td>
                        <td>07:45</td>
                        <td>16:10</td>
                    </tr>
                    <tr>
                        <td>11 Feb 2026</td>
                        <td><span class="badge bg-warning text-dark">Izin</span></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>12 Feb 2026</td>
                        <td><span class="badge bg-danger">Alpha</span></td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- LAPORAN KEGIATAN -->
    <div class="card">
        <div class="p-4 border-bottom">
            <h5 class="fw-semibold mb-0">Laporan Kegiatan PKL</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Tanggal</th>
                        <th>Judul Kegiatan</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10 Feb 2026</td>
                        <td>Membuat Topologi Jaringan</td>
                        <td><span class="badge bg-success">Dikirim</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                Detail
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>11 Feb 2026</td>
                        <td>Perbaikan bug Jaringan Nirkabel</td>
                        <td><span class="badge bg-secondary">Belum Dicek</span></td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                Detail
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