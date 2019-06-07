<?php

require 'fungsi.php';
if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo 
        "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>
        
        ";
    }
    else{
        echo "
        
        <script>
            alert('Data Gagal Ditambahkan');
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
    <title>Document</title>
</head>
<body>
<h1>Tamabha Buku</h1>

<form action="" method="post">
        <ul>
            <li>
                <label for="judul">judul : </label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="penulis">penulis: </label>
                <input type="text" name="penulis" id="penulis" required>
            </li>
            <li>
                <label for="penerbit">penerbit: </label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <label for="jmlHalaman">jmlHalaman: </label>
                <input type="text" name="jmlHalaman" id="jmlHalaman" required>
            </li>
            <li>
                <label for="harga">harga: </label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                 <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>  



</form>
    
</body>
</html>