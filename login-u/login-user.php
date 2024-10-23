<?php
    include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BSPAM Online | Login</title>
    <link
      rel="stylesheet"
      href="../vendor/twbs/bootstrap/dist/css/bootstrap.css"
    />
    <link
      rel="stylesheet"
      href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css"
    />
    <style>
      body {
        background-image: url("picture/polnep_bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        font-family: arial;
      }
    </style>
  </head>
  <body>
    <div
      class="container-fluid h-100 d-flex justify-content-center align-items-center"
    >
      <div class="container-sm p-5">
        <div class="row">
          <div class="col-md-6 col-sm-12 p-4 bg-warning rounded-start">
            <div class="d-flex justify-content-center mb-4 mt-3">
              <img
                src="picture/polnep_logo.png"
                alt="polnep_logo"
                style="width: 30%; height: 30%"
              />
            </div>
            <div class="d-flex justify-content-center pt-3">
              <h5>
                Selamat Datang
                <hr />
              </h5>
            </div>
            <div class="text-center">
              <h4 class="mb-4"><b>Perwalian Akademik</b></h4>
            </div>
            <div class="text-center mb-4">
              Mendigitalkan data-data yang tersimpan pada <br />Buku Saku
              Pembimbingan Akademik Mahasiswa <br />(BSPAM)
            </div>
          </div>
          <div class="col-md-6 col-sm-12 bg-light rounded-end shadow-lg">
            <div class="p-4 text-center mt-4 center">
              <form id="loginForm" action="" method="post">
                <h3 class="mb-5">Masuk Akun <b>BSPAM</b></h3>
                <div class="input-group pe-4 ps-4">
                  <span
                    class="input-group-text text-bg-dark"
                    style="font-size: 12px"
                    >Username</span
                  >
                  <input type="text" class="form-control" />
                </div>
                <div class="input-group mt-4 pe-4 ps-4 mb-2">
                  <span
                    class="input-group-text text-bg-dark"
                    style="font-size: 12px"
                    >Password.</span
                  >
                  <input type="password" class="form-control" />
                </div>
                <div class="pe-4 ps-4 mb-2">
                  <div class="form-check text-start">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      name="remember_me"
                      id="check1"
                    />
                    <label for="form-check-labe">Ingat saya</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="masuk">
                  Masuk
                </button>
                <div class="text-center text-danger mt-5">
                  <i class="bi bi-exclamation-circle me-2"></i>Bila anda lupa
                  username maupun password. dari akun anda, <br />anda dapat
                  berkonsultasi dengan Staff Admin yang bersangkutan
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      document
        .getElementById("loginForm")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Mencegah form dari submit default

          // Ambil data dari form
          const username = this.querySelector('input[type="text"]').value;
          const password = this.querySelector('input[type="password"]').value;

          // Lakukan fetch ke API
          fetch("http://127.0.0.1:8000/api/login", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({ username, password }),
          })
            .then((response) => response.json())
            .then((data) => {
              if (data.success) {
                // Cek role pengguna
                switch (data.role) {
                  case "admin":
                    window.location.href = "upload_khs.html"; // Ganti dengan URL dashboard admin
                    break;
                  case "dosen":
                    window.location.href = "dosen_dashboard.html"; // Ganti dengan URL dashboard dosen
                    break;
                  case "mahasiswa":
                    window.location.href = "user-m/beranda.php"; // Ganti dengan URL dashboard mahasiswa
                    break;
                  default:
                    alert("Role tidak dikenali");
                }
              } else {
                alert(data.message); // Tampilkan pesan error jika login gagal
              }
            })
            .catch((error) => {
              console.error("Error:", error);
              alert(
                "Terjadi kesalahan saat melakukan login. Silakan coba lagi."
              );
            });
        });
    </script>
  </body>
</html>
