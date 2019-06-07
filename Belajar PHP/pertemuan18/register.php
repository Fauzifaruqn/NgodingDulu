<?php
require 'fungsi.php';

// kondisi sudah tekan
if(isset($_POST["register"])){
        if(register($_POST) > 0){
        echo 
            "<script>
                alert('user baru hasil ditambahkan');
            </script>
            ";
    } else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
</head>
<body>
<h1>Halaman Registrasi</h1>

<form action="" method="post">
<ul>
    <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </li>


</ul>


</form>
    
</body>
</html>