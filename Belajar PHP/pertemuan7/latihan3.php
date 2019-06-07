<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>


<form method="post">
    Masukan Nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>
<?php if(isset ($_POST["submit"])) : ?>
    <h1>Selamat Datang, <?php echo $_POST["nama"]; ?></h1>
<?php endif; ?>
</body>
</html>