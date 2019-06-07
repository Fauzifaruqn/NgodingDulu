<?php

require 'function2.php';

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
    <title>Tambah Buku</title>
</head>
<body>
<h1>Tambah Buku</h1>

<form action="" method="post">

    <ul>
        <li>
            <label for="judul">Judul Buku</label>
            <input type="text" name="judul" id="judul">
        </li>
        <li>
            <label for="penulis">Penulis Buku</label>
            <input type="text" name="penulis" id="penulis">
        </li>
        <li>
            <label for="penerbit">Penerbit Buku</label>
            <input type="text" name="penerbit" id="penerbit">
        </li>
        <li>
            <label for="jmlHalaman">Jumlah Halaman</label>
            <input type="text" name="jmlHalaman" id="jmlHalaman">
        </li>
        <li>
            <label for="harga">Harga Buku</label>
            <input type="text" name="harga" id="harga">
        </li>
        <li>
            <label for="gambar">Cover</label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
                 <button type="submit" name="submit">Tambah
                 </button>
        </li>
    
    </ul>


</form>
   

</body>
</html>