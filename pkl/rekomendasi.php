<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekomendasi Tempat PKL</title>
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
            <i class="bi bi-star-fill"></i>
            Rekomendasi PKL
        </div>

        <a href="index.php"
           class="text-sm text-gray-500 hover:text-indigo-600">
            ← Kembali ke Dashboard
        </a>
    </div>
</header>

<!-- CONTENT -->
<section class="container py-5">

    <!-- HEADER -->
    <div class="mb-4">
        <h1 class="text-2xl font-semibold text-gray-800">
            Rekomendasi Tempat Praktik Kerja Lapangan
        </h1>
        <p class="text-sm text-gray-500 max-w-xl">
            Rekomendasi tempat PKL terbaik berdasarkan jurusan,
            pengalaman siswa sebelumnya, dan kerja sama sekolah.
        </p>
    </div>

    <!-- FILTER (DUMMY) -->
    <div class="bg-white p-4 rounded-2xl border mb-4">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="text-sm font-medium text-gray-600">Jurusan</label>
                <select class="form-select text-sm">
                    <option>Semua Jurusan</option>
                    <option>RPL</option>
                    <option>TKJ</option>
                    <option>MM</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="text-sm font-medium text-gray-600">Bidang</label>
                <select class="form-select text-sm">
                    <option>Semua Bidang</option>
                    <option>IT</option>
                    <option>Desain</option>
                    <option>Administrasi</option>
                </select>
            </div>

            <div class="col-md-4 flex items-end">
                <button class="w-full bg-indigo-600 text-white py-2 rounded-lg text-sm">
                    Tampilkan
                </button>
            </div>
        </div>
    </div>

    <!-- LIST REKOMENDASI -->
    <div class="row g-4">

        <?php
        $rekomendasi = [
            [
                "nama" => "PT Digital Solusi Indonesia",
                "alamat" => "Padang",
                "bidang" => "Software & Web Development",
                "jurusan" => "RPL",
                "rating" => 5
            ],
            [
                "nama" => "CV Creative Media",
                "alamat" => "Bukittinggi",
                "bidang" => "Desain Grafis & Multimedia",
                "jurusan" => "MM",
                "rating" => 4
            ],
            [
                "nama" => "Dinas Kominfo Provinsi",
                "alamat" => "Padang",
                "bidang" => "IT & Administrasi",
                "jurusan" => "TKJ / RPL",
                "rating" => 5
            ]
        ];

        foreach ($rekomendasi as $r):
        ?>

        <div class="col-md-4">
            <div class="bg-white rounded-2xl p-4 border hover:shadow-md transition h-100">

                <!-- TITLE -->
                <h5 class="font-semibold text-gray-800 mb-1">
                    <?= $r['nama'] ?>
                </h5>

                <p class="text-sm text-gray-500 mb-1">
                    <i class="bi bi-geo-alt"></i> <?= $r['alamat'] ?>
                </p>

                <p class="text-sm text-gray-600 mb-2">
                    <i class="bi bi-briefcase"></i> <?= $r['bidang'] ?>
                </p>

                <!-- JURUSAN -->
                <span class="inline-block text-xs px-3 py-1 rounded-full
                             bg-indigo-100 text-indigo-700 mb-3">
                    <?= $r['jurusan'] ?>
                </span>

                <!-- RATING -->
                <div class="flex gap-1 mb-3">
                    <?php for($i=1;$i<=5;$i++): ?>
                        <i class="bi bi-star-fill <?= $i <= $r['rating'] ? 'text-yellow-400' : 'text-gray-300' ?>"></i>
                    <?php endfor; ?>
                </div>

                <!-- ACTION -->
                <a href="tempat_pkl.php"
                   class="inline-block text-sm font-medium text-indigo-600">
                    Lihat Detail →
                </a>

            </div>
        </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- FOOTER -->
<footer class="text-center text-xs text-gray-400 py-3">
    © <?= date('Y') ?> Sistem Informasi Prakerin
</footer>

</body>
</html>