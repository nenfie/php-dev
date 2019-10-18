<?php

// koneksi ke database 
$conn = mysqli_connect("localhost","root","","phpdasar");

// function query
function query($query) {

    // set variable conn sebagai global
    global $conn;
   
    // ambil data dari table
    $result = mysqli_query($conn,$query);
    
    // temporary array kosong
    $rows = [];

    // isi hasil query ke dalam temporary array
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
} 


?>