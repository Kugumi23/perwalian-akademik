<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSPAM Online : Rekomendasi</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">
    <style>
        body {
            background-image:url("picture/bg_main.jpg")
        }
    </style>
</head>
<body>
    <div class="offcanvas offcanvas-start" id="mycanvas">
        <div class="offcanvas-header text-bg-dark">
            <h4 class="canvas-title pt-2">Dashboard</h4>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body sides">
            <!-- Actived on Beranda -->
            <a href="beranda.php" class="nav-link pt-3 pb-3">Beranda</a> 
            <a href="data_konstul" class="nav-link pt-3 pb-3">Data Konsultasi & Janji Temu</a>
            <a href="cetak_khs.php" class="nav-link pt-3 pb-3">Cetak KHS</a>
            <a href="#" class="nav-link active pt-3 pb-3 text-light activated">Rekomendasi</a>
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
                        <a href="#" class="nav-link active">Data Konsultasi & Janji Temu</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row ms-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            Nama_mahasiswa
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
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>