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


function tambah($data) {

    global $conn;

   // ambil data dari setiap elemen form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES 
                ('','$nrp','$nama','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);

    // tampilkan pesan kesalahan
    /*
    echo mysqli_error($conn);
    */

    return mysqli_affected_rows($conn);

}


function ubah($data) {

    global $conn;

   // ambil data dari setiap elemen form
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE (id=$id)
            ";

    mysqli_query($conn, $query);

    // tampilkan pesan kesalahan
    /*
    echo mysqli_error($conn);
    */

    return mysqli_affected_rows($conn);

}


function hapus($id) {

    global $conn;

    // query delete data
    $query = "DELETE FROM mahasiswa WHERE (id=$id)";

    mysqli_query($conn, $query);

    // tampilkan pesan kesalahan
    /*
    echo mysqli_error($conn);
    */

    return mysqli_affected_rows($conn);

}
?>