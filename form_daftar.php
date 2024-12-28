<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Anggota | UKM Badminton</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Anggota</h3>
    </header>

    <form action="proses_pendaftaran.php" method="POST">

        <fieldset>

            <p>
                <label for="npm">NPM: </label>
                <input type="text" name="npm" placeholder="Nomor Pokok Mahasiswa" required />
            </p>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" required />
            </p>
            <p>
                <label for="prodi">Prodi: </label>
                <select name="prodi" required>
                    <option value="Bisnis Digital">Bisnis Digital</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="minat">Minat: </label>
                <textarea name="minat" placeholder="Minat Anda di UKM Badminton" required></textarea>
            </p>
            <p>
                <label for="alasan">Alasan: </label>
                <textarea name="alasan" placeholder="Alasan Bergabung" required></textarea>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>
</html>
