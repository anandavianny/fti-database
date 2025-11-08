<?php
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa, krs where mahasiswa.NIM = krs.NIM;");

//tombol cari di klik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan</title>
</head>

<body>
    <h1>Tabel Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="35" placeholder="masukkan kata kunci...">
        <button type="submit" name="cari">cari</button>
    </form>
    <br><br>
    <a href="cari.php">cari page</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nomor.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal_Lahir</th>
            <th>Jenis_Kelamin</th>
            <th>Alamat</th>
            <th>No_Telp</th>
            <th>IP_SemLa</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td>
                    <?= $i ?>
                </td>
                <td>
                    <?= $row["NIM"] ?>
                </td>
                <td>
                    <?= $row["Nama"] ?>
                </td>
                <td>
                    <?= $row["Tanggal_Lahir"] ?>
                </td>
                <td>
                    <?= $row["Jenis_Kelamin"] ?>
                </td>
                <td>
                    <?= $row["Alamat"] ?>
                </td>
                <td>
                    <?= $row["No_Telp"] ?>
                </td>
                <td>
                    <?= $row["IP_SemLa"] ?>
                </td>
                <td>
                    <a href="ubah.php?NIM=<?= $row["NIM"] ?>">ubah</a> |
                    <a href="hapus.php?NIM=<?= $row["NIM"] ?>">hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>