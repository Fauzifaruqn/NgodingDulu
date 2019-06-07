<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
require 'fungsi.php';
$books = query("SELECT * FROM bookdetails");


// Tombol cari jika di tekan

if( isset($_POST["cari"]) ) {
	$books = cari($_POST["keyword"]);
}
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
<a href="logout.php">Logout</a>
<h1>Daftar Buku PT Suka Baca</h1>

<a href="tambah.php">Tambah Data Buku</a>
<br><br>


<form action="" method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari!</button>
	
</form>
<br><br>


<div id="container">

<table border="1" cellpadding="10" cellspcacing="0" style="text-align:center">

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
                <a href="ubah.php?id=<?php echo $book["id"];?>">Ubah</a>  | 
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

</div>


<script src="js/script.js"></script>
    
</body>
</html>