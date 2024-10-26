<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Permintaan Janji Temu</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-image:url("picture/bg_main.jpg");
        }
        .pjt-body {
            padding-left:60px;
            padding-right:60px;
        }
    </style>
</head>
<body>
    <!-- Menu sidebar -->
    <div class="offcanvas offcanvas-start" id="canvas">
        <div class="offcanvas-header text-bg-dark">
            <h4 class="canva-title pt-2">Dashboard</h4>
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
            <a href="distribusi_khs.php" class="nav-link pt-3 pb-3">Distribusi KHS</a>
            <a href="permintaan_so.php" class="nav-link pt-3 pb-3">Permintaan Stop Out</a>
        </div>
    </div>
    <!-- Navigation-bar laman -->
    <div class="container-fluid" style="margin-bottom:70px;">
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container-fluid">
                <!-- Bagian Sidebar -->
                 <ul class="navbar-nav">
                    <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#canvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                 </ul>
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Data Konsultasi / Permintaan Janji Temu</a>
                    </li>
                 </ul>
                 <ul class="navbar-nav flex-row d-flex ms-auto">
                    <li class="nav-item dropdown"> 
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            Nama_dosen
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
    <div class="ps-3">
        <button type="submit" class="btn btn-primary shadow"><a href="data_konsultasi.php" class="nav-link"><i class="bi bi-arrow-left-short me-1"></i>Back</a></button>
    </div>
    <div class="container-fluid pt-2 pjt-body">
        <div class="container-fluid d-flex flex-row">
            <h4>Permintaan Janji Temu</h4>
            <form action="" method="post" class="d-flex flex-row ms-auto">
                <div class="row">
                    <div class="col-5">
                        <select class="form-select me-2" name="cell" id="cell">
                            <option>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 4</option>
                            <option>Semester 5</option>
                            <option>Semester 6</option>
                        </select>
                    </div>
                    <div class="col-7">
                        <div class="input-group">
                            <input type="search" name="cari" id="cari" class="form-control" placeholder="cari nama mahasiswa">
                            <button type="submit" class="btn btn-primary" name="pencarian"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container-fluid mt-2">
            <table class="table table-striped">
                <thead class="table-danger">
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Tanggal & Waktu</th>
                        <th>Materi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="konsultasi-table-body">
                    <!-- Data dari API akan dimuat di sini -->
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
        window.location.href = "../login.php";
        return;
    }

    // Mengambil data janji temu dari API
    fetch("http://127.0.0.1:8000/api/perwalian/d/janjitemu", {
            method: "GET",
            headers: {
                "Authorization": `Bearer ${token}`,
                "Content-Type": "application/json"
            }
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                const tableBody = document.getElementById("konsultasi-table-body");
                tableBody.innerHTML = ""; 

                // Menampilkan data janji temu dalam tabel
                data.data.forEach((mahasiswa) => {
                    mahasiswa.janji_temu.forEach((janji) => {
                        const row = `
                            <tr>
                                <td>${mahasiswa.nama}</td>
                                <td>${mahasiswa.nim}</td>
                                <td>${new Date(janji.tanggal).toLocaleDateString()} ${new Date(janji.tanggal).toLocaleTimeString()}</td>
                                <td>${janji.materi}</td>
                                <td>
                                    <button class="btn btn-success" onclick="handleApproval('${janji.id}', '${mahasiswa.nim}', '${mahasiswa.nama}', '${mahasiswa.semester}', '${janji.tanggal}', '${janji.materi}')">Setuju</button>
                                    <button class="btn btn-danger" onclick="handleApproval('${janji.id}', false)">Tolak</button>
                                </td>
                            </tr>`;
                        tableBody.innerHTML += row;
                    });
                });
            } else {
                alert("Gagal memuat data janji temu.");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("Terjadi kesalahan saat memuat data janji temu.");
        });
});

// Fungsi untuk menangani persetujuan atau penolakan
function handleApproval(id, nim, nama, semester, tanggal, materi, approve) {
    const token = localStorage.getItem('token');
    const status = approve ? "accepted" : "rejected";

    // Pertama, update status janji temu
    fetch(`http://127.0.0.1:8000/api/perwalian/d/janjitemu/${id}`, {
        method: "POST",
        headers: {
            "Authorization": `Bearer ${token}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ status })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            if (status === "accepted") {
                // Jika disetujui, tambahkan ke data konsultasi
                addToKonsultasi(nim, nama, semester, tanggal, materi);
            } else {
                alert("Permintaan janji temu ditolak.");
            }
        } else {
            alert("Gagal memproses permintaan.");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Terjadi kesalahan dalam memproses permintaan.");
    });
}

// Fungsi untuk menambahkan data janji temu ke konsultasi
function addToKonsultasi(nim, nama, semester, tanggal, materi) {
    const token = localStorage.getItem('token');
    
    fetch("http://127.0.0.1:8000/api/perwalian/d/konsul", {
        method: "POST",
        headers: {
            "Authorization": `Bearer ${token}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            nim: nim,
            nama: nama,
            semester: semester,
            tanggal: tanggal,
            materi: materi
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Janji temu berhasil disetujui dan ditambahkan ke data konsultasi.");
            location.reload(); // Reload halaman untuk update data
        } else {
            alert("Gagal menambahkan ke data konsultasi.");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Terjadi kesalahan saat menambahkan ke data konsultasi.");
    });
}


    </script>

    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
