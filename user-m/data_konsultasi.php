    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
        <title>BSPAM Online : Data Konsultasi</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/jt.css">
        <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
        <style>
            body {
                background-image:url('picture/bg_main.jpg');
            }
        </style>
    </head>
    <body>
        <div class="offcanvas offcanvas-start" id="mycanvas">
            <div class="offcanvas-header text-bg-dark">
                <h4 class="canvas-title pt-2">Menu</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body sides">
                <!-- Actived on Beranda -->
                <a href="beranda.php" class="nav-link pt-3 pb-3">Beranda</a> 
                <a href="#" class="nav-link active pt-3 pb-3 text-light activated">Data Konsultasi & Janji Temu</a>
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
        <!-- Batas navigation-bar -->
        <div class="container-fluid pt-5 jt-body">
            <h4 class="ps-3">Jadwal Konsultasi Mahasiswa</h4>
            <div class="container-fluid pt-4">
                <p class="text-warning">Perhatian : Anda dapat mengajukan janji temu yang nantinya akan ditampilkan di dalam <b>Jadwal Konsultasi Mahasiswa</b>, proses ini melibatkan mahasiswa dan dosen pembimbing dimana tidak semua janji temu akan masuk ke tabel jadwal atau bila tidak setujui oleh dosen pembimbing</p>
                <table class="table table-striped">
                    <tr class="table-danger">
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Tanggal/waktu bimbingan</th>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa 1</td>
                        <td>3202216000</td>
                        <td>2/10/2024 12.00</td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa 2</td>
                        <td>3202216000</td>
                        <td>2/10/2024 14.00</td>
                    </tr>
                </table>
            </div>
            <div class="container-fluid pt-5">
                <h4><i class="bi bi-book me-2"></i> Form Janji Temu</h4>
            </div>
            <div class="container-fluid ps-4 pe-4 pb-3 text-bg-light jt-form">
                <form action="#">
                    <div class="mt-3 mb-3 pt-3">
                        <label for="datetime" form="form-label">Tanggal/Waktu bimbingan :</label>
                        <input type="datetime" class="form-control" id="datetime" name="datetime">
                    </div>
                    <div class="mb-3 pb-1">
                        <label for="textarea" form="form-label">Materi/Keterangan :</label>
                        <textarea name="textarea" class="form-control" id="textarea" style="height: 200px;"></textarea>
                    </div>
                    <div class="container d-flex flex-row">
                        <button type="submit" class="btn btn-success me-2"><i class="bi bi-save ms-4 me-4"></i></button>
                        <button type="reset" class="btn btn-danger"><i class="bi bi-trash ms-4 me-4"></i></button>
                    </div>
                </form>
            </div>
            <br>
        </div>
        <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>