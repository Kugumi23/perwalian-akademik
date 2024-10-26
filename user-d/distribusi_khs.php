<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Distribusi KHS</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/upload_khs.css">
</head>
<style>
    body {
        background-image:url('picture/bg_main.jpg');
    }
    .dk-body {
            padding-left:60px;
            padding-right:60px;
        }

</style>
<body>
    <div class="offcanvas offcanvas-start" id="mycanvas">
        <div class="offcanvas-header text-bg-dark">
            <h4 class="canvas-title pt-2">Dashboard</h4>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body sides">
            <div class="container-fluid">
                <?php
                    include ("dashboard1.php");
                    echo "<br>";
                    include ("dashboard2.php");
                    echo "<br>";
                    include ("dashboard3.php");
                ?>
            </div>
            <div class="container-fluid" style="font-size:12px;">
                <hr>
                <span>MENU</span>
                <hr>
            </div>
            <a href="data_mahasiswa.php" class="nav-link pt-3 pb-3">Data Mahasiswa</a>
            <a href="data_konsultasi.php" class="nav-link pt-3 pb-3">Data Konsultasi</a>
            <a href="distribusi_khs.php" class="nav-link active pt-3 pb-3 text-light activated">Distribusi KHS</a>
            <a href="permintaan_so.php" class="nav-link pt-3 pb-3">Permintaan Stop Out</a>

        </div>
    </div>
    <div class="container-fluid" style="margin-bottom:70px;">    
    <!-- Navigation-bar laman -->
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container-fluid">
                <!-- Bagian button sidebar -->
                <ul class="navbar-nav">
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mycanvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a href="#" class="nav-link active">Distribusi KHS</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row ms-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            Nama_dosen
                            <img src="picture/profile.png" alt="Foto profil" style="width:24px; margin-right: 2px; margin-left: 3px;" class="rounded-pill">
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
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Distribusi KHS</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/upload_khs.css">
    <style>
        body {
            background-image: url('picture/bg_main.jpg');
        }
        .dk-body {
            padding-left: 60px;
            padding-right: 60px;
        }
    </style>
</head>

<body>
    <!-- Sidebar dan Navigasi -->
    <!-- ... (kode sidebar dan navigasi tetap) ... -->

    <div class="container mt-5 pt-5">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <form action="">
                        <div class="mb-3 mt-3">
                            <!-- Dropdown nama mahasiswa -->
                            <select id="mahasiswaDropdown" class="form-select" aria-label="Default select example">
                                <option selected>Memuat data mahasiswa...</option>
                            </select>
                        </div>
                        <div class="input-group mt-3 mb-3">
                            <span class="input-group-text">Semester KHS</span>
                            <select name="sms_khs" id="sms_khs" class="form-select">
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <input type="file" class="form-control" id="formfile">
                        </div>
                        <div class="form-check mb-3"></div>
                        <div class="mb-3 mt-3 text-center">
                            <button type="submit" class="btn btn-primary shadow">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
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
                const dropdown = document.getElementById("mahasiswaDropdown");
                dropdown.innerHTML = ""; // Kosongkan dropdown sebelum mengisi

                if (data.success) {
                    data.data.mahasiswa.forEach((mahasiswa) => {
                        const option = document.createElement("option");
                        option.value = mahasiswa.nim; // Atur value sebagai NIM
                        option.text = mahasiswa.nama; // Atur teks sebagai nama mahasiswa
                        dropdown.appendChild(option); // Tambah opsi ke dropdown
                    });
                } else {
                    const option = document.createElement("option");
                    option.text = "Gagal memuat data mahasiswa";
                    dropdown.appendChild(option);
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                const dropdown = document.getElementById("mahasiswaDropdown");
                dropdown.innerHTML = `<option>Terjadi kesalahan saat memuat data mahasiswa.</option>`;
            });
        });
    </script>

    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
