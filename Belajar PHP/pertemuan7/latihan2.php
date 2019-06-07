<?php
// Cek apakah tidak ada data di $_GET
if(!isset ($_GET['merek']) || 
    !isset ($_GET['tipe']) ||
    !isset ($_GET['memory']) ||
    !isset ($_GET['harga']) ||
    !isset ($_GET['gambar']) ){

    // Redirect
    header("Location: superglobal.php ");
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
        <li><img src="img/<?php echo $_GET["gambar"]; ?>"></li>
        <li><?php echo $_GET["merek"]; ?></li>
        <li><?php echo $_GET["tipe"]; ?></li>
        <li><?php echo $_GET["memory"]; ?></li>
        <li><?php echo $_GET["harga"]; ?></li>
    </ul>
    
    <a href="superglobal.php">Kembali Ke Daftar Merek HP</a>
</body>
</html>