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
            background-image:url("picture/bg_main.jpg");
        }
        .jt-body {
            padding-left:60px;
            padding-right:60px;
        }
        .jt-form {
            border-radius:6px;
            border:2px solid lightgray;
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
            <a href="data_mahasiswa.php" class="nav-link pt-3 pb-3">Data Mahasiswa</a>
            <a href="data_konsultasi.php" class="nav-link active pt-3 pb-3 text-light activated">Data Konsultasi</a>
            <a href="rekomendasi.php" class="nav-link pt-3 pb-3">Rekomendasi</a>
            <a href="distribusi_khs.php" class="nav-link pt-3 pb-3">Distribusi KHS</a>
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
     <div class="container-fluid pt-5 jt-body">
        <h4 class="pb-2"><i class="bi bi-book me-2"></i>Form Janji Temu</h4>
        <div class="container-fluid p-4 bg-light shadow jt-form">
            <form action="" class="row mb-5 mt-3">
                <div class="col-md-1 d-flex align-items-center">
                    <label for="nama" class="form-lable">Nama</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="name" id="name" placeholder="nama mahasiswa">
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <label for="date" class="form-lable">Tgl Konsul</label>
                </div>
                <div class="col-md-5">
                    <input type="datetime" class="form-control" name="date" id="date">
                </div>
            </form>
            <form action="" class="row mb-3 formulir">
                <div class="col-md-1 d-flex align-items-center">
                    <label for="nim" class="form-lable">NIM</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="nim" id="nim" placeholder="nim mahasiswa">
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <label for="topic" class="form-lable">Materi</label>
                </div>
                <div class="col-md-5">
                    <input type="datetime" class="form-control" name="topic" id="topic">
                </div>
            </form>
            <div class="container-fluid d-flex flex-row pt-2 justify-content-end mt-3 mb-2">
                <button type="submit" class="btn btn-success me-2">Simpan<i class="bi bi-save ms-2"></i></button>
                <button type="reset" class="btn btn-danger">Bersihkan<i class="bi bi-trash ms-2"></i></button>
            </div>
        </div>
     </div>
     <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>