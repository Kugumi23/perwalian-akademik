<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Beranda</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/beranda.css">
</head>
<style>
    body {
        background-image:url('picture/bg_main.jpg');
    }
</style>
<body>
    <div class="offcanvas offcanvas-start" id="mycanvas">
        <div class="offcanvas-header text-bg-dark">
            <h4 class="canvas-title pt-2">Menu</h4>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body sides">
            <!-- Actived on Beranda -->
            <a href="#" class="nav-link active active pt-3 pb-3 text-light activated">Beranda</a> 
            <a href="data_konsultasi.php" class="nav-link pt-3 pb-3">Data Konsultasi & Janji Temu</a>
            <a href="cetak_khs.php" class="nav-link pt-3 pb-3">Cetak KHS</a>
            <a href="rekomendasi.php" class="nav-link pt-3 pb-3">Rekomendasi</a>
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
                        <a href="#" class="nav-link active">Beranda</a>
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
    <!-- Batas navigation-bar -->
    <div class="container-sm shadow centering-h">
        <h2><b>Buku Perwalian Akademik Mahasiswa Online<br>Prodi Teknik Informatika</b></h2>
    </div>
    <div class="container-fluid pt-4 centering-body">
        <p>
            Proses Pembibingan Akademik (PA) merupakan proses bimbingan bagi mahasiswa dalam menjalani dan menghadapi masalah
            <br>dan tantangan terkait aktivitas akademik selama masa studinya.
        </p>
    </div>
    <div class="container-fluid pt-4 centering-body">
        <p>
            Dalam buku Pedoman Akademik, yang tercantum dalam Peraturan Direktur Nomor: 12 Tahun 2019 <br>
            tentang Penyelenggara Pendidikan Politeknik Negeri Pontianak. <br>
        </p>
    </div>
    <div class="container-fluid pt-4 centering-body">
        <p>
            Pelaksanaan pembimbingan akademik di lingkungan Jurusan Teknik Elektro lebih lanjut diatur <br>
            dalam <b>Standard Operating Procedure Pembimbingan Akademik Nomor Dokumen :</b><br>
            <a href="#">SOP/03/8.5.3/EL/013/E01</a> 
        </p>
    </div>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>