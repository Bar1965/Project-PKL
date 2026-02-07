<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Notifikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100">

<!-- NAVBAR -->
<header class="bg-white border-b">
    <div class="container py-3 flex justify-between items-center">
        <div class="flex items-center gap-2 text-indigo-600 font-bold text-lg">
            <i class="bi bi-bell-fill"></i>
            Notifikasi
        </div>

        <a href="index.php"
           class="text-sm text-gray-500 hover:text-indigo-600">
            ← Kembali ke Dashboard
        </a>
    </div>
</header>

<!-- CONTENT -->
<section class="container py-5">

    <div class="mb-4">
        <h1 class="text-2xl font-semibold text-gray-800">
            Informasi dari Pembimbing
        </h1>
        <p class="text-sm text-gray-500">
            Semua pemberitahuan resmi dari guru pembimbing akan muncul di sini
        </p>
    </div>

    <?php
    /**
     * =========================
     * DATA NOTIFIKASI (CONTOH)
     * nanti bisa diganti database
     * =========================
     */

    $notifikasi = [
        // contoh data (hapus/comment kalau mau kondisi kosong)
        [
            "judul" => "Perubahan Jadwal Monitoring",
            "isi"   => "Monitoring PKL minggu ini dipindahkan ke hari Jumat pukul 10.00 WIB.",
            "tanggal" => "2026-02-01"
        ],
        [
            "judul" => "Laporan Mingguan",
            "isi"   => "Jangan lupa mengumpulkan laporan mingguan sebelum hari Sabtu.",
            "tanggal" => "2026-01-28"
        ]
    ];

    // jika mau uji kondisi kosong, pakai:
    // $notifikasi = [];
    ?>

    <!-- JIKA ADA NOTIFIKASI -->
    <?php if(count($notifikasi) > 0): ?>
        <div class="space-y-3">
            <?php foreach($notifikasi as $n): ?>
            <div class="bg-white p-4 rounded-2xl border hover:shadow transition">

                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-indigo-100
                                flex items-center justify-center">
                        <i class="bi bi-info-circle-fill text-indigo-600"></i>
                    </div>

                    <div class="flex-1">
                        <h5 class="font-semibold text-gray-800 text-sm mb-1">
                            <?= $n['judul'] ?>
                        </h5>

                        <p class="text-sm text-gray-600 mb-1">
                            <?= $n['isi'] ?>
                        </p>

                        <span class="text-xs text-gray-400">
                            <?= date('d F Y', strtotime($n['tanggal'])) ?>
                        </span>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    <!-- JIKA TIDAK ADA NOTIFIKASI -->
    <?php else: ?>
        <div class="bg-white p-5 rounded-2xl border text-center">
            <i class="bi bi-bell-slash text-4xl text-gray-300 mb-3"></i>
            <p class="text-gray-500 text-sm">
                Belum Ada Informasi Terbaru Dari Pembimbing
            </p>
        </div>
    <?php endif; ?>

</section>

<!-- FOOTER -->
<footer class="text-center text-xs text-gray-400 py-3">
    © <?= date('Y') ?> Sistem Informasi Prakerin
</footer>

</body>
</html>