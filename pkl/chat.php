<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan & Diskusi</title>
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
            <i class="bi bi-chat-dots-fill"></i>
            Pesan & Diskusi
        </div>

        <a href="index.php"
           class="text-sm text-gray-500 hover:text-indigo-600">
            ← Kembali ke Dashboard
        </a>
    </div>
</header>

<!-- CONTENT -->
<section class="container py-4 max-w-3xl">

<?php
/**
 * =========================
 * DATA PESAN (CONTOH)
 * nanti diganti database
 * =========================
 */
$pesan = [
    [
        "pengirim" => "pembimbing",
        "nama" => "Pak Andi",
        "isi" => "Selamat pagi, jangan lupa isi absensi dan laporan hari ini ya.",
        "waktu" => "08:15"
    ],
    [
        "pengirim" => "siswa",
        "nama" => "Eko",
        "isi" => "Baik pak, siap dilaksanakan.",
        "waktu" => "08:17"
    ]
];

// Untuk kondisi kosong (uji):
// $pesan = [];
?>

<div class="bg-white rounded-2xl shadow-sm border overflow-hidden">

    <!-- HEADER CHAT -->
    <div class="p-4 border-b flex items-center gap-3 bg-slate-50">
        <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
            <i class="bi bi-person-badge text-indigo-600"></i>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-800">Guru Pembimbing</p>
            <p class="text-xs text-gray-500">Diskusi Prakerin</p>
        </div>
    </div>

    <!-- CHAT AREA -->
    <div class="p-4 space-y-4 max-h-[400px] overflow-y-auto">

        <?php if(count($pesan) > 0): ?>
            <?php foreach($pesan as $p): ?>

                <?php if($p['pengirim'] == 'pembimbing'): ?>
                <!-- PESAN PEMBIMBING -->
                <div class="flex items-start gap-2">
                    <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center">
                        <i class="bi bi-person text-indigo-600 text-sm"></i>
                    </div>

                    <div class="bg-indigo-50 p-3 rounded-xl max-w-[75%]">
                        <p class="text-xs font-semibold text-indigo-700 mb-1">
                            <?= $p['nama'] ?>
                        </p>
                        <p class="text-sm text-gray-700">
                            <?= $p['isi'] ?>
                        </p>
                        <span class="text-[11px] text-gray-400">
                            <?= $p['waktu'] ?>
                        </span>
                    </div>
                </div>

                <?php else: ?>
                <!-- PESAN SISWA -->
                <div class="flex justify-end">
                    <div class="bg-indigo-600 text-white p-3 rounded-xl max-w-[75%] text-right">
                        <p class="text-sm">
                            <?= $p['isi'] ?>
                        </p>
                        <span class="text-[11px] text-indigo-200">
                            <?= $p['waktu'] ?>
                        </span>
                    </div>
                </div>
                <?php endif; ?>

            <?php endforeach; ?>

        <?php else: ?>
            <!-- JIKA BELUM ADA PESAN -->
            <div class="text-center py-10">
                <i class="bi bi-chat-left-dots text-4xl text-gray-300 mb-3"></i>
                <p class="text-sm text-gray-500">
                    Belum ada pesan. Mulailah diskusi dengan pembimbing.
                </p>
            </div>
        <?php endif; ?>

    </div>

    <!-- INPUT PESAN -->
    <div class="p-3 border-t bg-slate-50">
        <form>
            <div class="flex gap-2">
                <input type="text"
                       placeholder="Ketik pesan..."
                       class="flex-1 border rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500">

                <button type="button"
                        class="bg-indigo-600 text-white px-4 rounded-xl text-sm">
                    Kirim
                </button>
            </div>
        </form>
    </div>

</div>

</section>

<!-- FOOTER -->
<footer class="text-center text-xs text-gray-400 py-3">
    © <?= date('Y') ?> Sistem Informasi Prakerin
</footer>

</body>
</html>