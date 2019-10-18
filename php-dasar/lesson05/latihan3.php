<?php
$students = [
        ["Father","08182750","Teknik Informatika","father@edu.com"],
        ["Mother","08121120","Akuntansi","mother@edu.com"],
        ["Child","08785520","SD","child@edu.com"],
    ];

?>

<html>

    <head>

        <title>PHP Dasar : Latihan Array</title>
        
    </head>

    <body>
        
        <h1>Daftar Mahasiswa</h1>

        <?php foreach( $students as $student ) { ?>

        <ul>
            <li>Nama : <?php echo $student[0]; ?></li>
            <li>NRP : <?php echo $student[1]; ?></li>
            <li>Jurusan : <?php echo $student[2]; ?></li>
            <li>Email : <?php echo $student[3]; ?></li>
        </ul>

        <?php } ?>

    </body>

</html>