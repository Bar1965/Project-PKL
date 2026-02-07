import os

structure = {
    "pkl": {
        "app": {
            "config": ["database.php"],
            "controllers": [
                "AuthController.php",
                "AbsensiController.php",
                "LaporanController.php"
            ],
            "models": [
                "User.php",
                "Absensi.php",
                "Laporan.php"
            ],
            "helpers": ["auth.php"]
        },
        "api": [
            "login.php",
            "logout.php",
            "absensi.php",
            "laporan.php"
        ],
        "public": {
            "assets": {
                "css": [],
                "img": []
            },
            "index.php": None,
            "login.php": None
        },
        "views": {
            "layout": [
                "header.php",
                "footer.php",
                "menu.php"
            ],
            "siswa": [],
            "guru": [],
            "admin": []
        },
        ".htaccess": None
    }
}

def create(path, tree):
    for name, content in tree.items():
        current_path = os.path.join(path, name)

        if isinstance(content, dict):
            os.makedirs(current_path, exist_ok=True)
            create(current_path, content)

        elif isinstance(content, list):
            os.makedirs(current_path, exist_ok=True)
            for file in content:
                open(os.path.join(current_path, file), "a").close()

        else:  # file
            open(current_path, "a").close()


create(".", structure)
print("✅ Struktur folder PKL berhasil dibuat.")
