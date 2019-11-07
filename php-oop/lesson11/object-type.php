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
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }

}

$produk1 = new Produk("X-Men","Stan Lee","Marvel",30000);
$produk2 = new Produk("Metal Gear Solid","Hideo Kojima","Konami",250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game  : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>