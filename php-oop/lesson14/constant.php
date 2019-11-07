<?php

// using keyword define, cannot use inside class
define('NAMA', 'Tjoeng Nenfie');

echo NAMA;

// using keyword const, can be used inside class
const UMUR = 40;

echo "<br>";
echo UMUR;


class Location {
    const KOTA = 'Jakarta';

}

echo "<br>";
echo Location::KOTA;


// PHP Magic Constant
echo "<hr>";
echo "LINE : " . __LINE__;
echo "<br>";
echo "FILE : " . __FILE__;

function Coba() {
    return __FUNCTION__;
}
echo "<br>";
echo "FUNCTION : " . coba();

class Dummy {
    public $kelas = __CLASS__;

}

$obj = new Dummy;
echo "<br>";
echo "CLASS : " . $obj->kelas;


?>