<?php
// Cek apakah tombol submit sudah ditekan atau belum
require 'functions.php';

if(isset ($_POST["submit"]) ){    
    if( tambah ($_POST) > 0 ){
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
            alert('Data Gagag Ditambahkan');
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
    <title>Insert And Delate</title>
</head>
<body>
    <h1>Tambah Data Handphone</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek" required>
            </li>
            <li>
                <label for="tipe">Tipe: </label>
                <input type="text" name="tipe" id="tipe" required>
            </li>
            <li>
                <label for="memory">Memory: </label>
                <input type="text" name="memory" id="memory" required>
            </li>
            <li>
                <label for="harga">Harga: </label>
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