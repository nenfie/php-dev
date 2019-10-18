<?php

    require "functions.php";

    // cek apakah tombol submit sudah ditekan
    if ( isset($_POST["submit"]) ) {

        // cek apakah data berhasil ditambah
        if (tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambah!');
                    document.location.href = 'index.php';
                </script>
                ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambah!');
                    document.location.href = 'index.php';
                </script>
                ";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Dasar : Tambah Data</title>
</head>
<body>
    
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>

            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>

            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>

            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>

            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>

        </ul>
    </form>    

</body>
</html>