<?php
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $tgl_konsul = $_POST['datetime'];
    $nim = $_POST['nim'];
    $materi = $_POST['materi'];

    // Siapkan data dalam array untuk dikirimkan sebagai JSON
    $data = [
        'nama' => $nama,
        'tgl_konsul' => $tgl_konsul,
        'nim' => $nim,
        'materi' => $materi
    ];

    // Mengubah array menjadi format JSON
    $jsonData = json_encode($data);

    // Inisialisasi cURL
    $ch = curl_init();

    // Setel opsi cURL
    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:8000/api/janjitemu"); // Ganti URL sesuai dengan endpoint API kamu
    curl_setopt($ch, CURLOPT_POST, 1); // Set metode POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData); // Kirim data JSON
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Kembalikan respon sebagai string
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData)
    ]); // Set header untuk JSON

    // Eksekusi permintaan cURL
    $response = curl_exec($ch);

    // Periksa jika ada error
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }

    // Tutup cURL
    curl_close($ch);

    // Tampilkan respon dari API (opsional, bisa diubah menjadi redirect)
    $result = json_decode($response, true);
    if ($result && isset($result['message'])) {
        echo $result['message']; // Tampilkan pesan sukses atau error
    } else {
        echo 'Gagal menghubungkan ke API.';
    }
}
?>
