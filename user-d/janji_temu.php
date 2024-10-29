<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Janji Temu</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-image: url("picture/bg_main.jpg");
        }
        .jt-body {
            padding-left: 60px;
            padding-right: 60px;
        }
        .jt-form {
            border-radius: 6px;
            border: 2px solid lightgray;
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
                        <a href="#" class="nav-link active">Data Konsultasi / Janji Temu</a>
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
     <div class="container-fluid pt-3 jt-body">
        <h4 class="pb-2"><i class="bi bi-book me-2"></i>Form Janji Temu</h4>
        <div class="container-fluid p-4 bg-light shadow jt-form">
            <form id="janjiTemuForm" method="post">
                <div class="row mb-3 mt-4">
                    <div class="col-6">
                        <div class="input-group">
                            <span class="input-group-text">Nama</span>
                            <select class="form-select" id="namaMahasiswa" name="mahasiswa" onchange="updateNim()">
                                <!-- Opsi akan diisi secara dinamis oleh JavaScript -->
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <span class="input-group-text">NIM</span>
                            <input type="text" class="form-control" id="nim" name="nim" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="input-group">
                            <span class="input-group-text">Tgl Konsul</span>
                            <input type="datetime-local" name="datetime" id="datetime" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <span class="input-group-text">Materi</span>
                            <input type="text" class="form-control" name="materi" required>
                        </div>
                    </div>
                </div>
                <div class="container-fluid d-flex flex-row pt-2 justify-content-end mt-3 mb-2">
                    <button type="submit" class="btn btn-success me-2" name="simpan">Simpan<i class="bi bi-save ms-2"></i></button>
                    <button type="reset" class="btn btn-danger">Bersihkan<i class="bi bi-trash ms-2"></i></button>
                </div>
            </form>
        </div>
     </div>

    <script>
    // Periksa apakah token ada di localStorage atau sessionStorage
    var token = localStorage.getItem('token'); // Atau sessionStorage jika diperlukan

    // Jika token tidak ditemukan, arahkan ke halaman login
    if (!token) {
        alert("Anda harus login terlebih dahulu.");
        window.location.href = "../login.php";
    }

    // Fungsi untuk mengambil data mahasiswa bimbingan dari API
    function fetchMahasiswaBimbingan() {
        fetch("http://127.0.0.1:8000/api/perwalian/d/mahasiswa", {
            method: "GET",
            headers: {
                "Authorization": "Bearer " + token  // Sertakan token jika API memerlukan autentikasi
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                const mahasiswaSelect = document.getElementById('namaMahasiswa');
                mahasiswaSelect.innerHTML = "";
                data.data.mahasiswa.forEach(mhs => {
                    const option = document.createElement("option");
                    option.value = mhs.nim;
                    option.textContent = mhs.nama;
                    option.setAttribute("data-nim", mhs.nim); // Menyimpan NIM sebagai data attribute
                    mahasiswaSelect.appendChild(option);
                });
            } else {
                alert("Gagal mengambil data mahasiswa.");
            }
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });
    }

    // Fungsi untuk memperbarui NIM berdasarkan nama mahasiswa yang dipilih
    function updateNim() {
        const mahasiswaSelect = document.getElementById('namaMahasiswa');
        const nimInput = document.getElementById('nim');
        const selectedOption = mahasiswaSelect.options[mahasiswaSelect.selectedIndex];
        nimInput.value = selectedOption.getAttribute("data-nim"); // Mengambil NIM dari data attribute
    }

    // Fungsi untuk submit janji temu
    function submitJanjiTemu(event) {
        event.preventDefault();  // Mencegah refresh halaman

        // Ambil data dari form
        const nim = document.getElementById('nim').value; // Ambil NIM dari input
    const tanggal = document.getElementById("datetime").value; // Pastikan ini mengandung tanggal
    const materi = document.getElementsByName("materi")[0].value;

        // Siapkan data untuk dikirim ke API
        const data = {
        nim: nim,            // Pastikan ini sesuai dengan field yang diharapkan oleh API
        tanggal: tanggal,    // Pastikan nama field ini sesuai
        materi: materi       // Pastikan nama field ini sesuai
    };

        // Kirim data ke API
    fetch("https://apiteam.v-project.my.id/api/perwalian/d/janjitemu/tambah", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": "Bearer " + token
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Janji temu berhasil disimpan.");
        } else {
            alert("Gagal menyimpan janji temu.");
        }
    })
    .catch(error => {
        console.error("Error submitting form:", error);
    });
}

    // Event listener untuk form submit
    document.getElementById("janjiTemuForm").addEventListener("submit", submitJanjiTemu);

    // Panggil fungsi fetchMahasiswaBimbingan saat halaman dimuat
    window.onload = fetchMahasiswaBimbingan;

    </script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 