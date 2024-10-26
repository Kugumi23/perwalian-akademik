

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Data Mahasiswa</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-image: url('picture/bg_main.jpg');
        }

        .dm-body {
            padding-left: 60px;
            padding-right: 60px;
        }
    </style>
</head>

<body>
    <!-- Navigation-bar laman -->
    <div class="container-fluid" style="margin-bottom:70px;">
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#canvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Data Mahasiswa</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row d-flex ms-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            <span class="me-2" id="id-show"></span>
                            <img src="picture/profile.png" alt="Foto profil" style="width:24px; margin-left:2px; margin-right:2px;">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Pengaturan</a></li>
                            <li><a href="#" class="dropdown-item">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Batas Navigation-Bar -->
    <div class="container-fluid pt-5 dm-body">
        <div class="container-fluid pt-5">
            <h4>Data Mahasiswa Bimbingan</h4>
            <table class="table table-striped">
                <thead class="table-danger">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>No. Telp</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody id="table-body">
            
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const token = localStorage.getItem('token');

            // Jika token tidak ditemukan, arahkan ke halaman login
            if (!token) {
                alert("Anda harus login terlebih dahulu.");
                window.location.href = "../login.html";
                return;
            }

            // Mengambil data mahasiswa dari API
            fetch("http://localhost:8000/api/perwalian/d/mahasiswa", {
                    method: "GET",
                    headers: {
                        "Authorization": `Bearer ${token}`,
                        "Content-Type": "application/json"
                    }
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        const tableBody = document.getElementById("table-body");
                        tableBody.innerHTML = ""; // Kosongkan tabel jika ada data lama

                        // Menampilkan data mahasiswa dalam tabel
                        data.data.mahasiswa.forEach((mahasiswa, index) => {
                            const row = `<tr>
                                        <td>${index + 1}</td>
                                        <td>${mahasiswa.nim}</td>
                                        <td>${mahasiswa.nama}</td>
                                        <td>${mahasiswa.no_hp}</td>
                                        <td>${mahasiswa.semester}</td>
                                    </tr>`;
                            tableBody.innerHTML += row;
                        });
                    } else {
                        alert("Gagal memuat data mahasiswa.");
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert("Terjadi kesalahan saat memuat data mahasiswa.");
                });
        });

        // Fungsi untuk logout
        function logout() {
            localStorage.removeItem('token'); // Hapus token dari localStorage
            alert("Anda telah keluar.");
        }
    </script>

    <script src="../login-u/user-id-show.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
    </script>
</body>

</html>