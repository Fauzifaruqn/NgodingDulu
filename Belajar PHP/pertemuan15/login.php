<?php
require 'fungsi.php';


// Apakah tombol sudah ditekan atau belum
if(isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];


    // 
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // Cek Username
    // ada berapa baris yang dikembalikan dari fungsi select, jikaketemu nilai nya 1 jika tidak ada 0
    if(mysqli_num_rows($result) === 1){
        // Cek Password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ){
            // Perbolehkan masuk ke syste
            header("Location: index.php");
            exit;
        }
    }

    // Jika tidak ada username

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>
<h1>Halaman Login</h1>

<?php if(isset($error)) : ?>
    <p style="color:red">Username / Password Salah</p>
<?php endif; ?>

<form action="" method="post">
<ul>
    <li>
        <label for="username">username : </label>
        <input type="text" name="username" id="username">
    </li>

    <li>
        <label for="password">password : </label>
        <input type="password" name="password" id="password">
    </li>

    <li>
        <button type="submit" name="login">Login</button>
    </li>

</ul>


</form>
    
</body>
</html>