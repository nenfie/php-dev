<?php

abstract class Produk {    
    // property
    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    // contructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // setter
    public function setJudul($judul) {
        // if ( !is_string($judul) ) {
        //    throw new Exception("Judul harus string");
        // }
        $this->judul = $judul;
    }

    // getter
    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // abstract method
    abstract public function getInfo();

}


?>