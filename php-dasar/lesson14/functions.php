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
    //$gambar = htmlspecialchars($data["gambar"]);

    // upload gambar
    $gambar = upload();
    if ( !$gambar ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES 
                ('','$nrp','$nama','$email','$jurusan','$gambar')
            ";

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
    //$gambar = htmlspecialchars($data["gambar"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru
    if ( $_FILES["gambar"]["error"] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



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
    $query = "DELETE FROM mahasiswa 
            WHERE (id=$id)
            ";

    mysqli_query($conn, $query);

    // tampilkan pesan kesalahan
    /*
    echo mysqli_error($conn);
    */

    return mysqli_affected_rows($conn);

}


function cari($keyword) {

    global $conn;

    // query cari data
    $query = "SELECT * FROM mahasiswa 
            WHERE 
            (nrp LIKE '%$keyword%') OR
            (nama LIKE '%$keyword%') OR
            (email LIKE '%$keyword%') OR
            (jurusan LIKE '%$keyword%')
            ";

    return query($query);

}


function upload() {

    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    // cek apakah tidak ada gambar yang diupload
    if ( $error === 4 ) {
        echo "<script>
                alert('gambar belum dipilih');
            </script>";
        return false;
    }

    // cek apakah file yang diupload adalah gambar
    $ekstensiGambarValid = ["jpg","jpeg","png"]; 
    $ekstensiGambar = explode(".", $namaFile); // explode : split string
    $ekstensiGambar = end($ekstensiGambar); // end : ambil array index terakhir
    $ekstensiGambar = strtolower($ekstensiGambar); // strtolower : ubah jadi lowercase

    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('file yang diupload tidak valid');
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    /*
    if ( $ukuranFile > 1000000 ) {
    */
    $ekstensiFile = [" > 1000000 "];
    if ( in_array($ukuranFile, $ekstensiFile) ) {
        echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // generate nama gambar baru
    $namaFileBaru = uniqid(); // uniqid : generate random string
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;
    
    // gambar siap diupload
    move_uploaded_file($tmpName,"img/" . $namaFileBaru);

    return $namaFileBaru;

}


function registrasi($data) {

    global $conn;

    $username = strtolower(stripslashes($data["username"])); // stripslashes : remove slash
    $password = mysqli_real_escape_string($conn, $data["password"]); // mysqli_real_escape_string : allow space underscore
    $password2 = mysqli_real_escape_string($conn, $data["password2"]); 
    

    // cek username apakah sudah ada
    $result = mysqli_query($conn, "SELECT username FROM user WHERE (username='$username')");
    
    if ( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
        
    }


    // cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // query insert data
    $query = "INSERT INTO user
                VALUES 
                ('','$username','$password')
            ";

    // tambahkan username baru ke database    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>