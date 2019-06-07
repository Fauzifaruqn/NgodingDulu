<?php

require 'fungsi.php';

$books = query("SELECT * FROM bookdetails");

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

<h1>Daftar Buku PT Suka Baca</h1>

<a href="tambah.php">Tambah Data Buku</a>
<br><br>

<table border="1" cellpadding="10" cellspcacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Judul Buku</th>
        <th>Penulis Buku</th>
        <th>Penerbit Buku</th>
        <th>Jumlah Halaman</th>
        <th>Harga</th>
    </tr>
<?php $i = 1;?>
<?php foreach($books as $book) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">Ubah</a>  | 
            <a href="hapus.php?id=<?php echo  $book["id"];?>" onclick="return confirm('Apakah Anda Yaki Untuk Menghapus?');">Hapus</a>
        </td>
        <td>
            <img src="img/<?php echo  $book["gambar"]; ?>" height="200" width="150">
        </td>
        <td><?php echo  $book["judul"]; ?></td>
        <td><?php echo  $book["penulis"]; ?></td>
        <td><?php echo  $book["penerbit"]; ?></td>
        <td><?php echo  $book["jmlHalaman"]; ?></td>
        <td><?php echo  $book["harga"]; ?></td>
    </tr>
    <?php $i++ ?>
<?php endforeach; ?>
</table>
    
</body>
</html>