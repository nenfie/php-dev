<?php
    if ( !isset($_POST["nama"])) {
        header("Location: latihan4.php");
        exit;
    }

?>

<html>
    <head>
        <title>PHP Dasar : Latihan POST</title>
    </head>
    <body>
        <h1>Selamat Datang <?php echo $_POST["nama"] ?></h1>
    </body>
</html>