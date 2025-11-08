<?php
// $conn = mysql_connect("localhost", "root", "", "rencanastudi");
require 'function.php';

//ambil data di url
$NIM = $_GET["NIM"];

//query data berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE NIM = $NIM")[0];
var_dump($mhs);


if (isset($_POST["submit"])) {

    // $NIM = $_POST["NIM"];
    // $Nama = $_POST["Nama"];
    // $Tanggal_Lahir = $_POST["Tanggal_Lahir"];
    // $Jenis_Kelamin = $_POST["Jenis_Kelamin"];
    // $Alamat = $_POST["Alamat"];
    // $No_Telp = $_POST["No_Telp"];

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>

<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["NIM"]; ?>">
        <ul>
            <li>
                <label for="NIM">NIM</label>
                <input type="text" name="NIM" id="NIM" require value="<?= $mhs["NIM"]; ?>">
            </li>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" require value="<?= $mhs["Nama"]; ?>">
            </li>
            <li>
                <label for="Tanggal_Lahir">Tanggal_Lahir</label>
                <input type="text" name="Tanggal_Lahir" id="Tanggal_Lahir" require
                    value="<?= $mhs["Tanggal_Lahir"]; ?>">
            </li>
            <li>
                <label for="Jenis_Kelamin">Jenis_Kelamin</label>
                <input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin" require
                    value="<?= $mhs["Jenis_Kelamin"]; ?>">
            </li>
            <li>
                <label for="Alamat">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" require value="<?= $mhs["Alamat"]; ?>">
            </li>
            <li>
                <label for="No_Telp">No_Telp</label>
                <input type="text" name="No_Telp" id="No_Telp" require value="<?= $mhs["No_Telp"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
        </ul>
    </form>
</body>

</html>