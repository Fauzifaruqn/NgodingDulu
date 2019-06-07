<?php
$students = [
    ["Fauzi" , "140810160007", "Sistem Cerdas", "fauzi@yahaoo.com"],
    ["Faruq" , "140810160001", "Sistem Informasi", "faruq@yahaoo.com"],
    ["Nabbani" , "140810160003", "Jaringan Komputer", "nabbani@yahaoo.com"],
    ["Mantap" , "140810160006", "Metnum", "mantap@yahaoo.com"]
];

// Array Asosiatif

$mahasiswa = [
    ["nama" => "Fauzi" ,  "bidang"=>"Sistem Cerdas", "email"=>"fauzi@yahaoo.com","npm" => "140810160007", "gambar"=>"ronaldo.jpg"],
    ["nama" => "Faruq" ,  "npm" =>  "140810160001", "bidang"=>"Sistem Informasi", "email"=>"faruq@yahaoo.com" ,"gambar"=>"ayu.jpg"],
    ["nama" => "Nabbani" ,  "npm" =>  "140810160003", "bidang"=> "Jaringan Komputer", "email"=>"nabbani@yahaoo.com","gambar"=>"obama.jpg"],
    ["nama" => "Mantap" ,  "npm" =>  "140810160006", "bidang"=> "Metnum", "email"=>"mantap@yahaoo.com"]
    
    
];


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftara Mahasiswa</h1>

    <?php foreach($students as $student) : ?>
    <ul>
           
            <li>Nama : <?php echo $student[0]; ?></li>
            <li>NPM : <?php echo $student[1]; ?></li>
            <li>Bidang Minat : <?php echo $student[2]; ?></li>
            <li>Email : <?php echo $student[3]; ?></li>
        
    </ul>
    <?php endforeach; ?>

    <br>

    <h2>Daftar Students</h2>


    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        
           
                <img src="img/<?php echo $mhs["gambar"] ?>">
           
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NPM : <?php echo $mhs["npm"]; ?></li>
            <li>Bidang Minat : <?php echo $mhs["bidang"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        
    </ul>
    <?php endforeach; ?>

    <br>

</body>
</html>