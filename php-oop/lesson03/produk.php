<?php

// Jualan Produk
// Komik
// Game
class Produk {
    
    // property
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga = 0;
    
    // method
    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk();
$produk1->judul = "Naruto";
// var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Conan";
$produk2->edisi = "2019"; // buat property baru di object
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "X-Men";
$produk3->penulis = "Stan Lee";
$produk3->penerbit = "Marvel";
$produk3->harga = 30000;
// echo "Komik : $produk3->judul, $produk3->penulis"; 

$produk4 = new Produk();
$produk4->judul = "Metal Gear Solid";
$produk4->penulis = "Hideo Kojima";
$produk4->penerbit = "Konami";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game  : " . $produk4->getLabel();

?>