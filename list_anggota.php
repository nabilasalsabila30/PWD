<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Anggota Baru | UKM Badminton</title>
</head>
<body>
    <header>
        <h3>Mahasiswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form_daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Minat</th>
            <th>Alasan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM anggota";
        $query = mysqli_query($conn, $sql);

        while($mhs = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$mhs['npm']."</td>";
            echo "<td>".$mhs['nama']."</td>";
            echo "<td>".$mhs['prodi']."</td>";
            echo "<td>".$mhs['jenis_kelamin']."</td>";
            echo "<td>".$mhs['minat']."</td>";
            echo "<td>".$mhs['alasan']."</td>";
            echo "<td>";
            echo "<a href='form_edit.php?npm=".$mhs['npm']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mhs['npm']."' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>
