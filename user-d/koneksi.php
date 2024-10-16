<?php
//Nama file : koneksi.php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_apiteam";

$conn = mysqli_connect ($server , $user, $password, $nama_database);

if (!$conn) {
    die ("Gagal terhubung dengan datbase: ".mysqli_connect_error());
} 
?>