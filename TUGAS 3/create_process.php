<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $angkatan = $_POST["angkatan"];
    $alamat = $_POST["alamat"];

    // Query SQL untuk menyisipkan data baru ke dalam tabel
    $query = "INSERT INTO users (nim, nama, email, jurusan, angkatan, alamat) VALUES ('$nim', '$nama', '$email', '$jurusan', $angkatan, '$alamat')";

    // Eksekusi query SQL
    if (mysqli_query($koneksi, $query)) {
        // Jika penyisipan berhasil, arahkan kembali ke halaman index.php
        header("Location: index.php");
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Kesalahan: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
