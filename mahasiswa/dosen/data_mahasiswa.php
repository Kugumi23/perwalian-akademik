<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSPAM Online : Data Mahasiswa</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/dm.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            font-family: Times new roman;
        }
    </style>
</head>
<body>
    <!-- Menu sidebar -->
     <div class="offcanvas offcanvas-start" id="canvas">
        <h4 class="offcanvas-header text-bg-dark">Dashboard</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
     </div>
     <div class="offcanvas-body sidebar-content">
        <a href="#" class="nav-link active pt-3 pb-3 text-light activated">Data Mahasiswa</a>
        <a href="data_konsultasi.php" class="nav-link pt-3 pb-3">Data Konsultasi</a>
        <a href="rekomendasi.php" class="nav-link pt-3 pb-3">Rekomendasi</a>
        <a href="distriusi_khs.php" class="nav-link pt-3 pb-3">Distribusi KHS</a>
     </div>
    <!-- Navigation-bar laman -->
    <div class="container-fluid" style="margin-botto:70px">
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container-fluid">
                <!-- Bagian Sidebar -->
                 <ul class="navbar-nav">
                    <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#canvas"></button>
                 </ul>
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link active">Data Mahasiswa</a>
                    </li>
                 </ul>
                 <ul class="navbar-nav flex-row d-flex ms-auto">
                    <li class="nav-item dropdown"> 
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            Nama_dosen
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
    <div class="container-fluid pt-5 dm-body">
        <div class="container-fluid pt-4">
            <h4>Data Mahasiswa</h4>
            <table class="table tabel-striped">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telp</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3202216000</td>
                        <td>Mahasiswa 1</td>
                        <td>Laki-Laki</td>
                        <td>1234567890</td>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>