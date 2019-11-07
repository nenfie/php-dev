<?php

// Jualan Produk
// Komik
// Game
// Film
class Produk {
    
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    // contructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk("X-Men","Stan Lee","Marvel",0);
$produk2 = new Produk("Metal Gear Solid","Hideo Kojima","Konami",250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game  : " . $produk2->getLabel();
echo "<br>";
echo "Film  : " . $produk3->getLabel();

?>