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
            background-image:url('picture/bg_main.jpg');
        }
        .dm-body {
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
            <a href="data_mahasiswa.php" class="nav-link active pt-3 pb-3 text-light activated">Data Mahasiswa</a>
            <a href="data_konsultasi.php" class="nav-link pt-3 pb-3">Data Konsultasi</a>
            <a href="distribusi_khs.php" class="nav-link pt-3 pb-3">Distribusi KHS</a>
            <a href="p_janji_temu.php" class="nav-link pt-3 pb-3">Permintaan Janji Temu</a>
            <a href="janji_temu.php" class="nav-link pt-3 pb-3">Janji Temu</a>
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
                        <a href="#" class="nav-link active">Data Mahasiswa</a>
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
    <div class="container-fluid pt-5 dm-body">
        <div class="container-fluid pt-5">
            <div class="container-fluid d-flex flex-row">
                <h4>Data Mahasiswa Bimbingan</h4>
                <form action="#" class="ms-auto">
                    <div class="d-flex pb-2">
                        <input type="text" class="form-control" placeholder="cari" style="height:32px;">
                        <button type="submit" class="btn btn-primary ms-1 shadow" name="submit" value="submit" style="height:32px;"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead class="table-danger">
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