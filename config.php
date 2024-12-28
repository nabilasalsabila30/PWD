<?php
$server = "localhost"; // Server database, default XAMPP adalah 'localhost'
$user = "root"; // Username default MySQL di XAMPP adalah 'root'
$pass = ""; // Password default MySQL di XAMPP biasanya kosong
$db = "db_broadcasting"; // Ganti dengan nama database Anda

// Menggunakan variabel $db yang benar untuk koneksi database
$conn = mysqli_connect($server, $user, $pass, $db);

// Cek jika koneksi gagal
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
