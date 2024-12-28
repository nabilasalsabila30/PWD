<?php

include("config.php");

// Cek apakah ada parameter 'id' (npm) di query string
if (isset($_GET['id'])) {
    $npm = $_GET['id'];

    // Query untuk menghapus data anggota berdasarkan npm
    $sql = "DELETE FROM anggota WHERE npm='$npm'";

    $query = mysqli_query($conn, $sql);

    // Cek apakah penghapusan berhasil
    if ($query) {
        header('Location: list_anggota.php?status=sukses');
    } else {
        header('Location: list_anggota.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
