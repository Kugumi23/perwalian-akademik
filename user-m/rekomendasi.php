<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSPAM Online : Rekomendasi</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/rk.css">
    <style>
        body {
            background-image: url("picture/bg_main.jpg")
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
            <a href="data_konsultasi.php" class="nav-link pt-3 pb-3">Data Konsultasi & Janji Temu</a>
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
                        <a href="#" class="nav-link active">Rekomendasi</a>
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
    <div class="container-fluid rk-body">
        <div class="container-fluid pt-5 pb-2">
            <h4><i class="bi bi-book"></i> Form Surat Pengajuan Stop Out</h4>
        </div>
        <div class="container-fluid text-bg-light rk-form pt-4 ps-4 pe-4">
            <form action="#">
                <div class="mt-3 mb-3 pb-3">
                    <label for="nama" form="form-label">Nama Mahasiswa :</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mt-3 mb-3 pb-4">
                    <label for="nim" form="form-label">NIM Mahasiswa :</label>
                    <input type="text" class="form-control" id="nim" name="nama" required>
                </div>
                <div class="mt-3 mb-3 pb-1">
                    <label for="textarea" form="form-label">Alasan yang dapat dibenarkan :</label>
                    <textarea name="textarea" id="textarea" class="form-control" style="height:200px;" required></textarea>
                </div>
                <div class="container-fluid d-flex pb-3">
                    <button type="submit" class="btn btn-success me-2"><i class="bi bi-save me-4 ms-4"></i></button>
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash me-4 ms-4"></i></button>
                </div>
            </form>
        </div>
        <div class="container-fluid pt-5">
            <h4 class="pb-2">Daftar Surat Rekomendasi</h4>
            <table class="table table-striped">
                <thead class="table-danger">
                    <tr">
                        <th>Perihal</th>
                        <th>Tanggal Terbit</th>
                        <th>File</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Surat Stop Out</td>
                        <td>12-02-2023</td>
                        <td>
                            <div class="container-fluid p-3 d-flex bg-light file-box">
                                <h5><i class="bi bi-folder"><a href="">surat-so.pdf</a></i></h5>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Surat Drop Out</td>
                        <td>20-10-2024</td>
                        <td>
                            <div class="container-fluid p-3 d-flex bg-light file-box">
                                <h5><i class="bi bi-folder"><a href="">surat-do.pdf</a></i></h5>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>