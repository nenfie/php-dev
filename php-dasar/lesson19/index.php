<?php

session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}


// hubungkan dengan functions.php
require "functions.php";

// jalankan function query
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Dasar : Admin Page</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>

    <br>

    <a href="logout.php">Logout</a>

    <br><br>
    
    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus 
            placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari Data!</button>

    </form>

    <br><br>

    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $mahasiswa as $row ) { ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a>
                |
                <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin ingin dihapus?');" >hapus</a>
            </td>
            <td>
                <img src="img/<?php echo $row["gambar"]; ?>" width="50px" alt="">
            </td>
            <td><?php echo $row["nrp"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    </div>

<!-- js disini supaya halaman diload dulu semua -->
<script src="js/script.js"></script>

</body>
</html>