<?php
// $_GET["nama"] = "Fauz Faruq";
// $_GET["npm"] = "140810160007";

// var_dump($_GET);

// // Cara Lain , Menggunakan String pada halaman website

$phones = [
    [   
        "merek" => "Vivo" ,  
        "tipe"=>"vivo Y81i", 
        "memory"=>"16 GB",
        "harga" => "RP 6.000.000",
        "gambar"=>"vivo1.jpg"
    ],
    [
        "merek" => "Oppo" ,
        "tipe"=>"Oppo A9",
        "memory"=>"128 GB",
        "harga" => "RP 10.000.000",
        "gambar"=>"oppo1.jpg"
    ],
    [
        "merek" => "Xiaomi" ,
        "tipe"=>"Xiaomi Redmi Go",
        "memory"=>"8 GB","harga" =>
        "RP 2.000.000",
        "gambar"=>"xiaomi1.jpg"
    ],
    [
        "merek" => "Samsung",
        "tipe"=>"Samsung Galaxy S10",
        "memory"=>"128 GB",
        "harga" => "RP 14.000.000",
        "gambar"=>"samsung1.jpg"
    ],  
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST GET</title>
</head>
<body>

<h1>Dafta Hand Phone PT ALIM RUGI</h1>


<ul>
<?php foreach($phones as $phone) : ?>       
        <li>
            <a href=
                "
                latihan2.php?merek=<?php echo $phone["merek"]; ?>
                &tipe=<?php echo $phone["tipe"]; ?>
                &memory=<?php echo $phone["memory"]; ?>
                &harga=<?php echo $phone["harga"]; ?>
                &gambar=<?php echo $phone["gambar"]; ?>
                "
                >Merek Handphone : <?php echo $phone["merek"]; ?></li></a>   
<?php endforeach; ?>
</ul>
</body>
</html>