<!-- Toko Hand Phone -->

<?php
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
    <title>Toko Handphone</title>
    <style>
    .list{
        
    }
    
    </style>
</head>
<body>
    <h1>Daftara Handphone PT Alim Rugi</h1>

    
    <?php foreach($phones as $phone) : ?>
    
    <div>
        <div style=>
            <img src="img/<?php echo $phone["gambar"] ?>">
        </div>
        <div>
            <ul>      
                <li>Merek Handphone : <?php echo $phone["merek"]; ?></li>
                <li>Tipe Handphone : <?php echo $phone["tipe"]; ?></li>
                <li>Memory Internal : <?php echo $phone["memory"]; ?></li>
                <li>Harga : <?php echo $phone["harga"]; ?></li>         
            </ul>
        </div>
    </div>
    <?php endforeach; ?>
    

</body>
</html>