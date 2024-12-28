<?php

include("config.php");

// Cek apakah form sudah disubmit
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $npm = $_POST['npm'];
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $minat = mysqli_real_escape_string($conn, $_POST['minat']);
    $alasan = mysqli_real_escape_string($conn, $_POST['alasan']);

    // Query untuk update data anggota
    $sql = "UPDATE anggota SET 
            nama='$nama', 
            prodi='$prodi', 
            jenis_kelamin='$jenis_kelamin', 
            minat='$minat', 
            alasan='$alasan' 
            WHERE npm='$npm'";

    $query = mysqli_query($conn, $sql);

    // Cek apakah update berhasil
    if ($query) {
        header('Location: list_anggota.php?status=sukses');
    } else {
        header('Location: list_anggota.php?status=gagal');
    }
}
?>
