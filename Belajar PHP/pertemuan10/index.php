<?php

require 'functions.php';
// halaman Utama

// Koneksikan ke Database
// Membutuhkan sebuah function atau driver
// Butuh Paramete

// Mengambil Data dari table mahasiswa (query data)
// Parameter ada dua , koneksi ke database
$phones = query("SELECT * FROM smartphone");

// Buka table, ambil data smartphone dari object result (fetch)
// ada 4 cara :
// mysqli_fetch_row() : mengembalikan array numeric array yang index nya angka
// mysqli_fetch_assoc() : mengambalikan array sosiatif
// mysqli_fetch_array() : lebih fleksibel boleh mengunakan angka atau string, kekurangan data yang disajikan double
// mysqli_fetch_object()

// Ini baru cuamn satu datta
// $phone= mysqli_fetch_assoc($result);
// maka menggunakan  perulangan

// while($phone = mysqli_fetch_assoc($result) ){

//     // var_dump($phone);
// }

// Selanjutnya memasukan kedalam tabel

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
            <a href="">Ubah</a>  | 
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