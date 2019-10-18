<?php
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
        <title>PHP Dasar : Array Associatve</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <ul>
        <?php foreach($mahasiswa as $mhs) { ?>

            <li>
                <img src="img/<?php echo $mhs["gambar"]; ?>">
            </li>

            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NRP : <?php echo $mhs["nrp"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        
        <?php } ?>
        </ul>
    </body>
</html>