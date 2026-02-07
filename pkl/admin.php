<?php
$data_guru = [
    ["nama"=>"Budi Santoso","mapel"=>"Pemasaran","status"=>"Aktif"],
    ["nama"=>"Siti Aminah","mapel"=>"Teknik Jaringan Komputer","status"=>"Offline"],
    ["nama"=>"Rahmat Hidayat","mapel"=>"Teknik Jaringan Komputer","status"=>"Aktif"],
    ["nama"=>"Dewi Sartika","mapel"=>"Perkantoran","status"=>"Offline"],
    ["nama"=>"Eko Kurniawan","mapel"=>"Usaha Layanan Wisata","status"=>"Aktif"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Guru</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
:root{
    --primary:#4f46e5;
    --sidebar:#0f172a;
    --sidebar2:#020617;
    --bg:#f1f5f9;
}

body{
    font-family:'Inter',sans-serif;
    background:var(--bg);
    margin:0;
}

/* ===== SIDEBAR ===== */
.sidebar{
    width:240px;
    height:100vh;
    position:fixed;
    background:linear-gradient(180deg,var(--sidebar),var(--sidebar2));
    color:#cbd5f5;
    padding:20px 0;
}

.brand{
    display:flex;
    align-items:center;
    gap:12px;
    padding:0 20px 20px;
    border-bottom:1px solid rgba(255,255,255,.08);
}
.brand img{
    width:34px;
    height:34px;
    object-fit:contain;
}
.brand span{
    color:#fff;
    font-weight:600;
    font-size:15px;
}

.nav-title{
    font-size:11px;
    color:#64748b;
    padding:20px 20px 8px;
    text-transform:uppercase;
}

.sidebar a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:10px 20px;
    color:#cbd5f5;
    text-decoration:none;
    font-size:14px;
    border-radius:8px;
    margin:2px 10px;
}
.sidebar a i{width:18px}
.sidebar a.active,
.sidebar a:hover{
    background:rgba(99,102,241,.15);
    color:#fff;
}

/* ===== CONTENT ===== */
.content{
    margin-left:240px;
    padding:25px;
}

/* TOPBAR */
.topbar{
    background:#fff;
    padding:15px 20px;
    border-radius:12px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 1px 3px rgba(0,0,0,.05);
}
.search{
    background:#f1f5f9;
    border-radius:20px;
    padding:6px 15px;
    width:300px;
    display:flex;
    gap:10px;
}
.search input{
    border:none;
    background:transparent;
    outline:none;
    font-size:14px;
}

/* STATS */
.stat{
    background:#fff;
    border-radius:14px;
    padding:18px;
    display:flex;
    gap:15px;
    align-items:center;
    box-shadow:0 1px 3px rgba(0,0,0,.05);
}
.stat i{
    font-size:22px;
    padding:14px;
    border-radius:12px;
}

/* TABLE */
.table-card{
    background:#fff;
    border-radius:14px;
    box-shadow:0 1px 3px rgba(0,0,0,.05);
    overflow:hidden;
}
.table thead{
    background:#f8fafc;
}
.badge-active{
    background:#dcfce7;
    color:#166534;
}
.badge-off{
    background:#e5e7eb;
    color:#374151;
}
.avatar{
    width:36px;
    height:36px;
    border-radius:50%;
    background:#6366f1;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:600;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="brand">
        <img src="logo1.png" alt="Logo">
        <span>SMKN 3 PADANG</span>
    </div>

    <div class="nav-title">Utama</div>
    <a href="#"><i class="fa fa-house"></i>Dashboard</a>
    <a href="#"><i class="fa fa-bell"></i>Notifikasi</a>

    <div class="nav-title">Data Master</div>
    <a href="#"><i class="fa fa-user-graduate"></i>Daftar Siswa</a>
    <a href="#" class="active"><i class="fa fa-chalkboard-teacher"></i>Daftar Guru</a>
    <a href="#"><i class="fa fa-layer-group"></i>Jurusan</a>

    <div class="nav-title">Prakerin</div>
    <a href="#"><i class="fa fa-file"></i>Nilai PKL</a>
    <a href="#"><i class="fa fa-desktop"></i>Monitoring</a>
    <a href="#"><i class="fa fa-building"></i>Tempat PKL</a>
    <a href="#"><i class="fa fa-comments"></i>Chat Diskusi</a>

    <a href="#" style="margin-top:30px;color:#f87171">
        <i class="fa fa-right-from-bracket"></i>Logout
    </a>
</div>

<!-- CONTENT -->
<div class="content">

    <div class="topbar mb-4">
        <div class="search">
            <i class="fa fa-search text-muted"></i>
            <input placeholder="Cari data siswa, guru...">
        </div>
        <div class="fw-semibold">Administrator</div>
    </div>

    <h4 class="fw-bold mb-1">Daftar Guru Pembimbing</h4>
    <p class="text-muted mb-4">Kelola data guru dan status monitoring lapangan.</p>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="stat">
                <i class="fa fa-users text-primary bg-primary bg-opacity-10"></i>
                <div>
                    <div class="text-muted small">Total Guru</div>
                    <h5 class="mb-0 fw-bold">42</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat">
                <i class="fa fa-check text-success bg-success bg-opacity-10"></i>
                <div>
                    <div class="text-muted small">Guru Aktif</div>
                    <h5 class="mb-0 fw-bold">38</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat">
                <i class="fa fa-location-dot text-warning bg-warning bg-opacity-10"></i>
                <div>
                    <div class="text-muted small">Lokasi PKL</div>
                    <h5 class="mb-0 fw-bold">15</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="table-card">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Bidang Keahlian</th>
                    <th>Status</th>
                    <th>Last Login</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data_guru as $i=>$g): ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar"><?= substr($g['nama'],0,1) ?></div>
                            <?= $g['nama'] ?>
                        </div>
                    </td>
                    <td><?= $g['mapel'] ?></td>
                    <td>
                        <span class="badge <?= $g['status']=='Aktif'?'badge-active':'badge-off' ?>">
                            <?= $g['status'] ?>
                        </span>
                    </td>
                    <td class="text-muted">2 Jam lalu</td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>