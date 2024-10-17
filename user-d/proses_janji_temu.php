<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $materi = $_POST['materi'];
    $datetime = $_POST['datetime'];

    // URL API untuk menyimpan janji temu
    $url = 'http://127.0.0.1:8000/api/janjitemu'; // Ganti dengan URL API yang sesuai

    // Data yang akan dikirim
    $data = array(
        'nama' => $nama,
        'nim' => $nim,
        'materi' => $materi,
        'datetime' => $datetime,
    );

    // Inisialisasi cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    // Eksekusi permintaan
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Tutup cURL
    curl_close($ch);

    // Cek respons
    if ($http_code == 200) {
        echo "Data berhasil disimpan!";
        // Anda bisa melakukan redirect atau menampilkan pesan sukses di sini
    } else {
        echo "Terjadi kesalahan saat menyimpan data. Kode HTTP: " . $http_code;
    }
}
?>
