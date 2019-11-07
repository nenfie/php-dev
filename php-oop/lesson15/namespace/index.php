<?php

require_once 'App/init.php';

$produk1 = new Komik("X-Men","Stan Lee","Marvel",50000,200);
$produk2 = new Game("Metal Gear Solid","Hideo Kojima","Konami",600000,30);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

// using namespace
new App\Produk\User();
echo "<br>";
new App\Service\User();

echo "<hr>";

// using alias
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;
new ProdukUser();
echo "<br>";
new ServiceUser();

?>