<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>BSPAM Online : Upload KHS</title>
    <link rel="stylesheet" href="../user-m/style/style.css">
    <link rel="stylesheet" href="../user-d/style/upload_khs.css">
    



</head>
<style>
    body {
        background-image:url('picture/bg_main.jpg');
    }
</style>
<body>
    <div class="offcanvas offcanvas-start" id="mycanvas">
        <div class="offcanvas-header text-bg-dark">
            <h4 class="canvas-title pt-2">Dashboard</h4>
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

    <div class="container mt-5 pt-5">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <form action="">
                        <div class="mb-3 mt-3">
                           
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Semua Mahasiswa</option>
                                    <option value="1">Siti Sabrina</option>
                                </select>  
                        </div>


                        <div class="mb-3 mt-3">
                            <input type="file" class="form-control" id="formfile">
                        </div>
                          <div class="form-check mb-3">
                          </div>
                          <div class="mb-3 mt-3 text-center">
                            <button type="submit" class="btn btn-primary shadow" >Submit</button>
                          </div>
                          

                    </form>


                </div>
            </div>
        </div>

      </div>




    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>