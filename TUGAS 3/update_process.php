<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $angkatan = $_POST["angkatan"];
    $alamat = $_POST["alamat"];

    // Query SQL untuk memperbarui data dengan nilai baru
    $query = "UPDATE users SET nim='$nim', nama='$nama', email='$email', jurusan='$jurusan', angkatan=$angkatan, alamat='$alamat' WHERE id=$id";

    // Eksekusi query SQL
    if (mysqli_query($koneksi, $query)) {
        // Jika pembaruan berhasil, arahkan kembali ke halaman index.php
        header("Location: index.php");
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Kesalahan: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
