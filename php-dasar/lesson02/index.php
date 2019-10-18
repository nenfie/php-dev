<?php
// lesson 02 - PHP Dasar
// Sintaks PHP

// Standard Output

// echo, print : to display something
/*
    echo "Tjoeng Nenfie";
    print "Welcome";
*/

// print_r : for array content
/*
    print_r("Tjoeng Nenfie\n");
*/

// var_dump : peek var content
/*
    var_dump("Tjoeng Nenfie\n");
*/

// Variabel dan Tipe Data

// Variabel : cannot start with numeric
/*
    $nama = "Tjoeng Nenfie";
    echo $nama;
*/

// Operator

// arimatika : + - * / %
/*
    $x = 10;
    $y = 20;
    echo $x + $y;
*/

// string concatenation : .
    $namadepan = "Tjoeng";
    $namabelakang = "Nenfie";
    echo $namadepan . " " . $namabelakang;

// assignment : = += -= *= /= %= .=
    $nama = "Tjoeng";
    $nama .= " ";
    $nama .= "Nenfie";
    echo $nama;

// perbandingan : < > <= >= == !=
    var_dump(1 < 5);

// identitas : === !==
    var_dump(1 === "1");

// logika : && || !
    $x = 20;
    var_dump(($x < 20) && ($x % 2 == 0));
?>

<!-- Penulisan sintaks PHP -->
<!-- 1. PHP di dalam HTML -->
<html>
    <head>
        <title>PHP Dasar - Sintaks PHP</title>
    </head>
    <body>
        <h1>Halo Selamat Datang <?php echo $nama; ?> </h1>

        <!-- 2. HTML di dalam PHP -->
        <?php 
            echo "<h1>Halo Selamat Datang Pengguna</h1>";
        ?>

    </body>
</html>


