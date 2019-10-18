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

    <style>
        .loader {
            width: 80px;
            position: absolute;
            top: 120px;
            left: 300px;
            z-index: -1;
            display: none;
        }

        @media print {
            .logout, .tambah, .form-cari, .aksi {
                display: none;
            }
        }

    </style>

    <!-- menggunakan jquery, script bisa ditaro diawal sebelom halaman/element diload -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>

</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php" class="tambah">Tambah data mahasiswa</a>

    <br>

    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>

    <br><br>
    
    <form action="" method="post" class="form-cari">

        <input type="text" name="keyword" size="40" autofocus 
            placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari Data!</button>

        <img src="img/loader.gif" alt="" class="loader">

    </form>

    <br>

    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
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
            <td class="aksi">
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

</body>
</html>