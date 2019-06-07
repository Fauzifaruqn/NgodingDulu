<?php
require 'functions.php';
$phones = query("SELECT * FROM smartphone");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Handphone PT ALim Rugi</h1>

<a href="tambah.php">Tambah Data Handphone</a>
<br><br>

<table border="1" cellpadding="10" cellspcacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Merek</th>
        <th>Tipe</th>
        <th>Memory Internal</th>
        <th>Harga</th>
    </tr>
<?php $i = 1;?>
<?php foreach($phones as $phone) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="ubah.php?id=<?php echo $phone["id"];?>">Ubah</a>  | 
            <a href="hapus.php?id=<?php echo  $phone["id"];?>" onclick="return confirm('Apakah Anda Yaki Untuk Menghapus?');">Hapus</a>
        </td>
        <td>    
            <img src="img/<?php echo  $phone["gambar"]; ?>">
        </td>
        <td><?php echo  $phone["merek"]; ?></td>
        <td><?php echo  $phone["tipe"]; ?></td>
        <td><?php echo  $phone["memory"]; ?></td>
        <td><?php echo  $phone["harga"]; ?></td>
    </tr>
    <?php $i++ ?>
<?php endforeach; ?>
</table>
    
</body>
</html>