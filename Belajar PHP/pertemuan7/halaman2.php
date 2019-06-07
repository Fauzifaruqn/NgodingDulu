<?php
// Cek apakah tidak ada data di $_GET
if(!isset ($_GET['judul']) || 
    !isset ($_GET['jumlahHalaman']) ||
    !isset ($_GET['hargabuku']) ||
    !isset ($_GET['penulis']) ||
    !isset ($_GET['gambarbuku']) ){

    // Redirect
    header("Location: superglobal2.php ");
    exit;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Hanphone</title>
</head>
<body>
    <ul>
        <li><img src="img/<?php echo $_GET["gambarbuku"]; ?>"></li>
        <li><?php echo $_GET["judul"]; ?></li>
        <li><?php echo $_GET["penulis"]; ?></li>
        <li><?php echo $_GET["jumlahHalaman"]; ?></li>
        <li><?php echo $_GET["hargabuku"]; ?></li>
       
    </ul>
    
    <a href="superglobal2.php">Kembali Ke Daftar Judul Buku</a>
</body>
</html>