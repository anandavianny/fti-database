<?php
require 'function.php';

$dosen_pa = query("SELECT * FROM dosen_pa");

//tombol cari di klik
if (isset($_POST["cari"])) {
    $dosen_pa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DosenPA</title>
</head>

<body>
    <h1>Tabel Dosen PA</h1>

    <a href="tambah.php">Tambah data dosen PA</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="35" placeholder="masukkan kata kunci...">
        <button type="submit" name="cari">cari</button>
    </form>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nomor.</th>
            <th>Kode_PA</th>
            <th>Nama_PA</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($dosen_pa as $pa): ?>
        <tr>
            <td>
                <?= $i ?>
            </td>
            <td>
                <?= $pa["Kode_PA"] ?>
            </td>
            <td>
                <?= $pa["Nama_PA"] ?>
            </td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>