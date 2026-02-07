<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tempat PKL</title>
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
            <i class="bi bi-building"></i>
            Daftar Tempat PKL
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
    <div class="flex justify-between items-center mb-4">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">
                Tempat Praktik Kerja Lapangan
            </h1>
            <p class="text-sm text-gray-500">
                Daftar perusahaan / instansi tempat PKL
            </p>
        </div>

        <a href="#"
           class="px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm
                  hover:bg-indigo-700 transition">
            <i class="bi bi-plus-circle"></i> Ajukan Tempat PKL
        </a>
    </div>

    <!-- LIST TEMPAT PKL -->
    <div class="row g-4">

        <?php
        $pkl = [
            [
                "nama" => "PT Teknologi Nusantara",
                "alamat" => "Jl. Sudirman No. 45, Padang",
                "bidang" => "Teknologi Informasi",
                "status" => "Diterima"
            ],
            [
                "nama" => "CV Media Kreatif",
                "alamat" => "Jl. Ahmad Yani No. 12, Padang",
                "bidang" => "Desain Grafis",
                "status" => "Menunggu"
            ],
            [
                "nama" => "Dinas Kominfo Kota Padang",
                "alamat" => "Jl. Bagindo Aziz Chan",
                "bidang" => "Administrasi & IT",
                "status" => "Diterima"
            ]
        ];

        foreach ($pkl as $t):
            $warna = $t['status'] == "Diterima"
                     ? "bg-green-100 text-green-700"
                     : "bg-yellow-100 text-yellow-700";
        ?>

        <div class="col-md-4">
            <div class="bg-white rounded-2xl p-4 border hover:shadow-md transition h-100">

                <h5 class="font-semibold text-gray-800 mb-1">
                    <?= $t['nama'] ?>
                </h5>

                <p class="text-sm text-gray-500 mb-2">
                    <i class="bi bi-geo-alt"></i> <?= $t['alamat'] ?>
                </p>

                <p class="text-sm text-gray-600 mb-3">
                    <i class="bi bi-briefcase"></i> <?= $t['bidang'] ?>
                </p>

                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium <?= $warna ?>">
                    <?= $t['status'] ?>
                </span>

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