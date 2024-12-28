<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $jk = $_POST['jenis_kelamin'];
    $minat = $_POST['minat'];
    $alasan = $_POST['alasan'];

    // buat query
    $sql = "INSERT INTO anggota (npm, nama, prodi, jenis_kelamin, minat, alasan) VALUE ('$npm','$nama', '$prodi', '$jk', '$minat', '$alasan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>