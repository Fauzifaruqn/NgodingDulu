<?php
// Cek apakah tombol submit sudah ditekan atau belum
require 'functions.php';

// Mengambil data dari URL
$id = $_GET["id"];
// Query data mahasiswa berdasrkan ID nya

$phone = query("SELECT * FROM smartphone WHERE id=$id")[0];


if(isset ($_POST["submit"]) ){   
    // cek apakah data berhasil di ubah? 
    if( tambah ($_POST) > 0 ){
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
            alert('Data Gagag Dirubah');
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
    <h1>Ubahh Data Handphone</h1>

    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?php echo $phone["id"]?>">
            <li>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek" required value="<?php echo $phone["merek"]?>">
            </li>
            <li>
                <label for="tipe">Tipe: </label>
                <input type="text" name="tipe" id="tipe" required value="<?php echo $phone["tipe"]?>">
            </li>
            <li>
                <label for="memory">Memory: </label>
                <input type="text" name="memory" id="memory" required value="<?php echo $phone["memory"]?>">
            </li>
            <li>
                <label for="harga">Harga: </label>
                <input type="text" name="harga" id="harga" required value="<?php echo $phone["harga"]?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar" required value="<?php echo $phone["gambar"]?>">
            </li>
            <li>
                 <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>  
    </form>
   
</body>
</html>