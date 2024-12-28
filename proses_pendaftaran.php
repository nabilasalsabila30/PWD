<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau belum
if (isset($_POST['daftar'])) {
    // Ambil data dari formulir
    $npm = mysqli_real_escape_string($conn, $_POST['npm']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    $jk = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
    $minat = mysqli_real_escape_string($conn, $_POST['minat']);
    $alasan = mysqli_real_escape_string($conn, $_POST['alasan']);

    // Buat query
    $sql = "INSERT INTO anggota (npm, nama, prodi, jenis_kelamin, minat, alasan) 
            VALUES ('$npm', '$nama', '$prodi', '$jk', '$minat', '$alasan')";

    // Pastikan menggunakan $conn yang benar
    $query = mysqli_query($conn, $sql);

    // Apakah query simpan berhasil?
    if ($query) {
        // Kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // Kalau gagal, alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
