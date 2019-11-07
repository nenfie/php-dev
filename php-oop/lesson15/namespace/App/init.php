<?php

// require_once 'Produk/Produk.php';
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';
// require_once 'Service/User.php';

// using autoloading
spl_autoload_register(function ($class) {

    // convert into array
    $class = explode('\\', $class);

    // get last array element
    $class = end($class); 

    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {

    // convert into array
    $class = explode('\\', $class);

    // get last array element
    $class = end($class); 

    require_once __DIR__ . '/Service/' . $class . '.php';
});

?>