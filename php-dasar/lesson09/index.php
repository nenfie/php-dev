<?php

// hubungkan dengan functions.php
require "functions.php";

// jalankan function query
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

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
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?php echo $mhs["gambar"]; ?>" alt="">
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