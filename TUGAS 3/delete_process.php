<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Query SQL untuk menghapus data berdasarkan ID yang diberikan
    $query = "DELETE FROM users WHERE id=$id";

    // Eksekusi query SQL
    if (mysqli_query($koneksi, $query)) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman index.php
        header("Location: index.php");
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Kesalahan: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
