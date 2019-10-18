<?php
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) || 
     !isset($_GET["nrp"]) || 
     !isset($_GET["jurusan"]) ||
     !isset($_GET["email"]) ||
     !isset($_GET["gambar"]) ) {
    // redirect
    header("Location: latihan2.php");
    exit;
}
?>

<html>
    <head>
        <title>PHP Dasar : Latihan GET</title>
    </head>
    <body>
        <h1>Detail Mahasiswa</h1>

        <ul>
            <li>
                <img src="img/<?php echo $_GET["gambar"]; ?>">
            </li>

            <li>Nama : <?php echo $_GET["nama"]; ?></li>
            <li>NRP : <?php echo $_GET["nrp"]; ?></li>
            <li>Jurusan : <?php echo $_GET["jurusan"]; ?></li>
            <li>Email : <?php echo $_GET["email"]; ?></li>
        
        </ul>

        <p>
        <a href="latihan2.php">Kembali ke Daftar Mahasiswa</a>
        </p>

    </body>
</html>