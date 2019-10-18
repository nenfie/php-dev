<?php

    require "functions.php";

    // ambil data di URL
    $id = $_GET["id"];

    // query data mahasiwa berdasarkan id
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE (id=$id)")[0]; // [0] : ambil array pertama

    // cek apakah tombol submit sudah ditekan
    if ( isset($_POST["submit"]) ) {

        // cek apakah data berhasil diubah
        if (ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
                ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
                    document.location.href = 'index.php';
                </script>
                ";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Dasar : Ubah Data</title>
</head>
<body>
    
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $mahasiswa["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?php echo $mahasiswa["gambar"]; ?>">
        
        <ul>

            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?php echo $mahasiswa["nrp"]; ?>">
            </li>

            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?php echo $mahasiswa["nama"]; ?>">
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?php echo $mahasiswa["email"]; ?>">
            </li>

            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?php echo $mahasiswa["jurusan"]; ?>">
            </li>

            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?php echo $mahasiswa["gambar"]; ?>" width="100px"><br>
                <input type="file" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>

        </ul>
    </form>    

</body>
</html>