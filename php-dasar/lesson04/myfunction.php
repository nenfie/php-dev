<?php

// User defined function
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>

<html>
    <head>
        <title>PHP Dasar - Function</title>
    </head>
    <body>
        <h1><?php echo salam("Pagi", "Nenfie"); ?></h1>
        <h1><?php echo salam(); ?></h1>
    </body>
</html>