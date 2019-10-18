<?php

// hubungkan dengan functions.php
require "functions.php";

// jalankan function query
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Dasar : Admin Page</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>
    

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
        <?php foreach ( $mahasiswa as $mhs ) { ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">ubah</a>
                |
                <a href="hapus.php?id=<?php echo $mhs["id"]; ?>" onclick="return confirm('Yakin ingin dihapus?');" >hapus</a>
            </td>
            <td>
                <img src="img/<?php echo $mhs["gambar"]; ?>" width="50px" alt="">
            </td>
            <td><?php echo $mhs["nrp"]; ?></td>
            <td><?php echo $mhs["nama"]; ?></td>
            <td><?php echo $mhs["email"]; ?></td>
            <td><?php echo $mhs["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    
</body>
</html>