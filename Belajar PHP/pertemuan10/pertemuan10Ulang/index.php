<?php
require 'function2.php';

$books = query("SELECT * FROM bookdetails");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT BUKU SUKA BACA</title>
</head>
<body>
    <h1>Dafta Buku PT Suka Baca</h1>

    <a href="tambahbuku.php">Tambah Buku</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Jumlah Halaman</th>
            <th>Harga</th>
        </tr>

    <?php $y = 1;?>
    <?php foreach($books as $book) : ?>
        <tr>
            <td><?php echo $y; ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="hapus.php?id=<?php echo $book["id"]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus?');">Hapus</a>
            </td>
            <td>
                <img src="img/<?php echo $book["gambar"]; ?>">
            </td>
            <td><?php echo  $book["judul"]; ?></td>
            <td><?php echo  $book["penulis"]; ?></td>
            <td><?php echo  $book["penerbit"]; ?></td>
            <td><?php echo  $book["jmlHalaman"]; ?></td>
            <td><?php echo  $book["harga"]; ?></td>        
        </tr>
    <?php $y++; ?>
<?php endforeach; ?>

    </table>
</body>
</html>