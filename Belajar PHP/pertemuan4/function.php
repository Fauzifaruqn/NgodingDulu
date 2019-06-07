<?php
function salam($waktu = "Datang" , $nama="fauzi"){
    return "Selamat $waktu , $nama";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Belajar Function</title>
</head>
<body>

<h1><?php echo salam("Pagi", "Faruq"); ?></h1>
    
</body>
</html>