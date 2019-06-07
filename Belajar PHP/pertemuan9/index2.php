<?php
// halaman Utama

// Koneksikan ke Database
// Membutuhkan sebuah function atau driver
// Butuh Parameter
$conn = mysqli_connect("localhost" , "root", "", "phpdasar");

// Mengambil Data dari table mahasiswa (query data)
// Parameter ada dua , koneksi ke database
$result = mysqli_query($conn, "SELECT * FROM smartphone");

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
<?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">Ubah</a>  | 
            <a href="">Hapus</a>
        </td>
        <td>
            <img src="img/<?php echo $row["gambar"]; ?>">
        </td>
        <td><?php echo $row["merek"]; ?></td>
        <td><?php echo $row["tipe"]; ?></td>
        <td><?php echo $row["memory"]; ?></td>
        <td><?php echo $row["harga"]; ?></td>
    </tr>
    <?php $i++ ?>
<?php endwhile; ?>
</table>
    
</body>
</html>