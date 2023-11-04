<?php
$host = "localhost:3308"; // Ganti dengan informasi koneksi ke server database yang sesuai
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "crud"; // Ganti dengan nama database yang sesuai

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>
