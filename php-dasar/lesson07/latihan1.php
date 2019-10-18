<?php
// variable scope
$x = 10;

function showX() {
    $x = 20;
    echo $x;
}

showX();

echo $x;

?>