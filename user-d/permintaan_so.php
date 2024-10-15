<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Permintaan SO</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/permintaan_so.css">

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
            <a href="dashboard.php" class="nav-link pt-3 pb-3">Dashboard</a>
            <a href="data_mahasiswa.php" class="nav-link pt-3 pb-3">Data Mahasiswa</a>
            <a href="data_konsultasi.php" class="nav-link pt-3 pb-3">Data Konsultasi</a>
            <a href="distribusi_khs.php" class="nav-link pt-3 pb-3">Distribusi KHS</a>
            <a href="p_janji_temu.php" class="nav-link pt-3 pb-3">Permintaan Janji Temu</a>
            <a href="janji_temu.php" class="nav-link pt-3 pb-3">Janji Temu</a>
            <a href="permintaan_so.php" class="nav-link active pt-3 pb-3 text-light activated">Permintaan Stop Out</a>

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
                        <a href="#" class="nav-link active">Permintaan Stop Out</a>
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
    <div class="container-fluid pt-4 pjt-body">
       
        <div class="container-fluid d-flex flex-row">
            <h4>Permintaan Janji Temu</h4>
            <form action="" class="d-flex flex-row ms-auto">
                <input type="text" class="form-control" name="cari" id="cari" palceholder="cari..">
                <button type="submit" class="btn btn-primary ms-2" value="submit" name="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>

        <div class="container-fluid d-flex flex-row mt-2">
            <select name="semester" id="semester" class="me-2">
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
            </select>
            <select name="angkatan" id="angkatan">
                <option value="1">2022</option>
                <option value="2">2023</option>
                <option value="3">2024</option>
            </select>
        </div>


        <div class="container-fluid mt-2">
            <table class="table table-striped">
                <thead class="table-danger">
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>No Telepon</th>
                        <th>Tanggal & Waktu</th>
                        <th>Tahun Angkatan</th>
                        <th>Semester</th>
                        <th>Alasan</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mahasiswa 1</td>
                        <td>3202216000</td>
                        <td>08959367</td>
                        <td>20/01/2024</td>
                        <td>2022</td>
                        <td>5</td>
                        <td>Banyak penyakit</td>
                        <td>
                            <select name="status" id="status" class = "status">
                                <option value="1" class = "hijau">Disetujui</option>
                                <option value="2" class = "merah">Ditolak</option>
                            </select>
                        </td>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>