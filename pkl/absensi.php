<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Absensi Harian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-slate-100">

<!-- HEADER -->
<header class="bg-white border-b">
    <div class="container py-3 flex justify-between items-center">
        <a href="index.php" class="text-indigo-600 font-semibold text-lg">
            ← Dashboard
        </a>
        <span class="text-sm text-gray-500">
            Absensi Harian
        </span>
    </div>
</header>

<!-- CONTENT -->
<section class="container py-5">

    <!-- STATUS -->
    <div class="bg-white rounded-2xl p-4 mb-4 border">
        <h4 class="text-gray-800 font-semibold mb-1">
            Status Absensi Hari Ini
        </h4>
        <p class="text-sm text-gray-500">
            Silakan lakukan absensi sesuai waktu
        </p>

        <div class="mt-3 flex flex-wrap gap-3 text-sm">
            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700">
                ⏳ Belum Absen
            </span>
            <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-600">
                Datang: -
            </span>
            <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-600">
                Pulang: -
            </span>
        </div>
    </div>

    <!-- ACTION -->
    <div class="row g-4">

        <!-- DATANG -->
        <div class="col-md-6">
            <div class="bg-white rounded-2xl p-4 border h-100">
                <h5 class="font-semibold text-gray-800 mb-2">
                    Absensi Datang
                </h5>
                <p class="text-sm text-gray-500 mb-3">
                    Ambil foto untuk konfirmasi kehadiran
                </p>

                <button class="w-full py-3 rounded-lg
                               bg-indigo-600 text-white font-medium
                               hover:bg-indigo-700 transition">
                    📷 Ambil Absen Datang
                </button>
            </div>
        </div>

        <!-- PULANG -->
        <div class="col-md-6">
            <div class="bg-white rounded-2xl p-4 border h-100 opacity-50">
                <h5 class="font-semibold text-gray-800 mb-2">
                    Absensi Pulang
                </h5>
                <p class="text-sm text-gray-500 mb-3">
                    Tersedia setelah absen datang
                </p>

                <button disabled class="w-full py-3 rounded-lg
                                       bg-gray-300 text-gray-500 font-medium">
                    🔒 Absen Pulang
                </button>
            </div>
        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="text-center text-xs text-gray-400 py-3">
    © <?= date('Y') ?> Sistem Informasi Prakerin
</footer>

</body>
</html>
