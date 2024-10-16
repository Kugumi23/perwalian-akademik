<?php
include("koneksi.php");

// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $datetime = $_POST['datetime']; // Field yang menyimpan tanggal dan waktu
    $materi = $_POST['materi'];
    
    // Buat query untuk menyimpan data ke tabel janji_temu
    $sql = "INSERT INTO janji_temu (nama, nim, tanggal, materi) VALUES ('$nama', '$nim', '$datetime', '$materi')";
    
    // Jalankan query
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil disimpan!');
                window.location.href = 'janji_temu.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
}
?>