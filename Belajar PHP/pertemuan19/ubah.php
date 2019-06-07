<?php

session_start();
if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
require 'fungsi.php';
// Cek apakah tombol submit sudah ditekan atau belum
// Mengambil data dari URL
$id = $_GET["id"];
// Query data mahasiswa berdasrkan ID nya

$book = query("SELECT * FROM bookdetails WHERE id=$id")[0];


if(isset ($_POST["submit"]) ){   
    // cek apakah data berhasil di ubah? 
    if( ubah ($_POST) > 0 ){
        echo 
        "
        <script>
            alert('Data Berhasil Rubah');
            document.location.href = 'index.php';
        </script>
        
        ";
    }
    else{
        echo "
        
        <script>
            alert('Data Gagal Dirubah');
            document.location.href = 'index.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Buku</title>
</head>


<body>
    <h1>Ubahh Data Buku</h1>

    <form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $book["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?php echo $book["gambar"]; ?>">
        <ul>
            <input type="hidden" name="id" value="<?php echo $book["id"]?>">
            <li>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul" required value="<?php echo $book["judul"]?>">
            </li>
            <li>
                <label for="penulis">penulis: </label>
                <input type="text" name="penulis" id="penulis" required value="<?php echo $book["penulis"]?>">
            </li>
            <li>
                <label for="penerbit">penerbit: </label>
                <input type="text" name="penerbit" id="penerbit" required value="<?php echo $book["penerbit"]?>">
            </li>
            <li>
                <label for="jmlHalaman">Jumlah Halaman: </label>
                <input type="text" name="jmlHalaman" id="jmlHalaman" required value="<?php echo $book["jmlHalaman"]?>">
            </li>
            <li>
                <label for="harga">Harga: </label>
                <input type="text" name="harga" id="harga" required value="<?php echo $book["harga"]?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $book['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
            </li>
            <li>
                 <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>  
    </form>
   
</body>
</html>