<?php
    require_once "vendor/fzaninotto/faker/src/autoload.php";

    $faker = Faker\Factory::create("id_ID");

?>

<html>
<head>
    <title>Daftar Penduduk</title>
</head>

<body>
    <h1>Data Penduduk</h1>

    <?php for ( $i = 0; $i < 10; $i++) { ?>

    <ul>
        <li><?php echo $faker->name; ?></li>
        <li><?php echo $faker->address; ?></li>
        <li><?php echo $faker->email; ?></li>
    </ul>

    <?php } ?>

</body>

</html>