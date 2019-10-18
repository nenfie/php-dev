<?php
// SUPERGLOBALS
// variabel global dari PHP
// merupakan array associative
// $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE, $_REQUEST, $_ENV

// $_GET
/*
$_GET["nama"] = "Tjoeng Nenfie";
$_GET["nrp"] = "08182750";
var_dump($_GET);
*/

$mahasiswa = [
    [
        "nama" => "Father", 
        "email" => "father@edo.com",
        "nrp" => "08182750", 
        "jurusan" => "S1 Teknik Informatika",
        "gambar" => "father.jpg"
    ],
    [
        "nrp" => "08121120", 
        "jurusan" => "SMEA Akuntansi",
        "nama" => "Mother", 
        "email" => "mother@edo.com",
        "gambar" => "mother.jpg"
    ],
    [
        "email" => "child@edo.com",
        "nrp" => "08785250", 
        "jurusan" => "Sekolah Dasar",
        "gambar" => "child.jpg",
        "nama" => "Child" 
    ]
];

?>

<html>
    <head>
        <title>PHP Dasar : GET</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <ul>

        <?php foreach( $mahasiswa as $mhs ) { ?>
            <li> 
                <a href="latihan3.php?nama=<?php echo $mhs["nama"]; ?>&nrp=<?php echo $mhs["nrp"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&email=<?php echo $mhs["email"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>" >
                    <?php echo $mhs["nama"]; ?>
                </a> 
            </li>
        <?php } ?>

        </ul>

    </body>
</html>