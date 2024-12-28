<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['npm']) ){
    header('Location: list_anggota.php');
}

//ambil id dari query string
$npm = $_GET['npm'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM anggota WHERE npm=$npm";
$query = mysqli_query($conn, $sql);
$mhs = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Anggota | UKM Badminton</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Anggota</h3>
    </header>

    <form action="proses_edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="npm" value="<?php echo $mhs['npm'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $mhs['nama'] ?>" />
        </p>
        <p>
            <label for="prodi">Prodi: </label>
            <?php $prodi = $mhs['prodi']; ?>
            <select name="prodi">
                <option <?php echo ($prodi == 'Bisnis Digital') ? "selected": "" ?>>Bisnis Digital</option>
                <option <?php echo ($prodi == 'Informatika') ? "selected": "" ?>>Informatika</option>
                <option <?php echo ($prodi == 'Sistem Informasi') ? "selected": "" ?>>Sistem Informasi</option>
            </select> 
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $mhs['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="minat">Minat: </label>
            <?php $minat = $mhs['minat']; ?>
            <textarea name="minat"><?php echo $mhs['minat'] ?></textarea>
        </p>
        <p>
            <label for="alasan">Alasan: </label>
            <?php $alasan = $mhs['alasan']; ?>
            <textarea name="alasan"><?php echo $mhs['alasan'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>