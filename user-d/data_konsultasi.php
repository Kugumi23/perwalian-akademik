<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Konsultasi</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
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
    <!-- Menu sidebar -->
    <div class="offcanvas offcanvas-start" id="canvas">
        <div class="offcanvas-header text-bg-dark">
            <h4 class="canva-title pt-2">Dashboard</h4>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body sides">
            <div class="container-fluid">
                <?php
                include("dashboard1.php");
                echo "<br>";
                include("dashboard2.php");
                echo "<br>";
                include("dashboard3.php");
                ?>
            </div>
            <div class="container-fluid" style="font-size:12px;">
                <hr>
                <span>MENU</span>
                <hr>
            </div>
            <a href="data_mahasiswa.php" class="nav-link pt-3 pb-3">Data Mahasiswa</a>
            <a href="data_konsultasi.php" class="nav-link active pt-3 pb-3 text-light activated">Data Konsultasi</a>
            <a href="distribusi_khs.php" class="nav-link pt-3 pb-3">Distribusi KHS</a>
            <a href="permintaan_so.php" class="nav-link pt-3 pb-3">Permintaan Stop Out</a>
        </div>
    </div>
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
                        <a href="#" class="nav-link active">Data Konsultasi</a>
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
    <div class="container-fluid pt-5 dk-body">
        <div class="container-fluid pt-5">
            <div class="container-fluid flex-row d-flex pb-2">
                <h4>Data Konsultasi Mahasiswa</h4>
                <button type="button" class="btn btn-success shadow ms-auto">
                    <a href="janji_temu.php" class="nav-link text-light"><i class="bi bi-plus me-1"></i>Buat Janji</a>
                </button>
                <button type="button" class="btn btn-primary shadow ms-2">
                    <a href="p_janji_temu.php" class="nav-link text-light"><i class="bi bi-book me-2"></i>Permintaan janji temu</a>
                </button>
            </div>
            <table class="table table-striped">
                <thead class="table-danger">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Kelas</th>
                        <th>Semester</th>
                        <th>Tanggal Konsultasi</th>
                        <th>Materi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // URL API
                $api_url = 'http://127.0.0.1:8000/api/konsul'; // Ganti dengan URL API yang sesuai

                // Mengambil data dari API
                $response = file_get_contents($api_url);
                $data = json_decode($response, true);

                // Mengecek apakah data berhasil diambil
                if ($data['success']) {
                    $no = 1; // Untuk nomor urut
                    foreach ($data['data'] as $item) {
                        $nim = isset($item['nim']) ? $item['nim'] : 'Data tidak ditemukan';
                        $nama = isset($item['mahasiswa']['nama']) ? $item['mahasiswa']['nama'] : 'Data tidak ditemukan';
                        $id_kelas = isset($item['mahasiswa']['kelas']['abjad_kelas']) ? $item['mahasiswa']['kelas']['abjad_kelas'] : 'Data tidak ditemukan';
                        $semester = isset($item['mahasiswa']['semester']) ? $item['mahasiswa']['semester'] : 'Data tidak ditemukan';
                        $tanggal = isset($item['tanggal']) ? date('d/m/Y', strtotime($item['tanggal'])) : 'Data tidak ditemukan';
                        $materi = isset($item['materi']) ? $item['materi'] : 'Data tidak ditemukan';

                        echo "<tr>";
                        echo "<td>{$no}</td>";
                        echo "<td>{$nim}</td>";
                        echo "<td>{$nama}</td>";
                        echo "<td>{$id_kelas}</td>";
                        echo "<td>{$semester}</td>";
                        echo "<td>{$tanggal}</td>"; // Format tanggal
                        echo "<td>{$materi}</td>";
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Data tidak ditemukan</td></tr>";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>