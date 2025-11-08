<?php
// $conn = mysql_connect("localhost", "root", "", "rencanastudi");
require 'function.php';

// $mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST["submit"])) {

    // $NIM = $_POST["NIM"];
    // $Nama = $_POST["Nama"];
    // $Tanggal_Lahir = $_POST["Tanggal_Lahir"];
    // $Jenis_Kelamin = $_POST["Jenis_Kelamin"];
    // $Alamat = $_POST["Alamat"];
    // $No_Telp = $_POST["No_Telp"];

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
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
    <title>Tambah data mahasiswa</title>
</head>

<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="NIM">NIM</label>
                <input type="text" name="NIM" id="NIM">
            </li>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama">
            </li>
            <li>
                <label for="Tanggal_Lahir">Tanggal_Lahir</label>
                <input type="text" name="Tanggal_Lahir" id="Tanggal_Lahir">
            </li>
            <li>
                <label for="Jenis_Kelamin">Jenis_Kelamin</label>
                <input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin">
            </li>
            <li>
                <label for="Alamat">Alamat</label>
                <input type="text" name="Alamat" id="Alamat">
            </li>
            <li>
                <label for="No_Telp">No_Telp</label>
                <input type="text" name="No_Telp" id="No_Telp">
            </li>
            <li>
                <button type="submit" name="submit">submit</button>
            </li>
        </ul>
    </form>
</body>

</html>