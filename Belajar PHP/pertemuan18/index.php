<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
require 'fungsi.php';

// Konfiigurasi pagination 
$jumlahDataPerhalaman = 3;
// Mengethaui jumlah data
// $result = mysqli_query($conn,"SELECT * FROM bookdetails");
// $jumlahBuku = mysqli_num_rows($result); //ada berapa baris data yang di kembalikan

// Cara lebih simple
$jumlahBuku = count(query("SELECT * FROM bookdetails"));
$jumlahHalaman = ceil($jumlahBuku/$jumlahDataPerhalaman);
// var_dump($jumlahData);

// Sekarang kita awalnya ada di halaman berapa (halaman aktiv)
if(isset($_GET['halaman'])){

    $halamanAKtif = $_GET['halaman'];

} else{
    $halamanAKtif = 1;
}


$awalData = ($jumlahDataPerhalaman * $halamanAKtif) - $jumlahDataPerhalaman;
// 3 * 2 - 3 = 3
$books = query("SELECT * FROM bookdetails LIMIT $awalData, $jumlahDataPerhalaman");


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

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	
</form>

<!-- Navigasi -->

<a href="?halaman=1">awal</a>

<?php if( $halamanAKtif > 1 ) : ?>
	<a href="?halaman=<?= $halamanAKtif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
	<?php if( $i == $halamanAKtif ) : ?>
		<a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
	<?php else : ?>
		<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if( $halamanAKtif < $jumlahHalaman ) : ?>
	<a href="?halaman=<?= $halamanAKtif + 1; ?>">&raquo;</a>
<?php endif; ?>

<a href="?halaman=<?= $jumlahHalaman; ?>">akhir</a>






<br><br>

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
    
</body>
</html>