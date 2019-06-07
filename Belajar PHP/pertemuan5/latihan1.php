<?php
    // Array 
    // variable yang dapat memiliki banyak nilai
    $nama = "Fauzi";//satu nilai
    $hari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
    $bulan = ["Januari","Februari","Maret","April"];
    $arr1 = ["Fauzi" , 3 , true];

    // Menampilkan Array 
    // var_dump() atau print_r()
    var_dump ($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";

     // Menampilkan Satu element 
    echo $bulan[3];
    echo "<br>";

    // Menambahkan element baru pada array
    $bulan [] = "Mei";
    print_r($bulan);
    echo "<br>";

    // Melakuakn Pengulangan pada Array
    // Forech
    $angka = [1,2,3,54,32,12,44];
    $numbers =[1,2,3,4,5,6,7];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align:center;
            line-height:50px;
            margin: 3px;
            float: left;
        }
        
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka); $i++) : ?>
            <div><?php echo $angka[$i]; ?></div>
            
    <?php endfor; ?>

    <br><br><br>
    <h1>Menggunakan Foreach</h1>
    <br>

    <?php foreach($numbers as $number) : ?>
            <div><?php echo $number; ?></div>

    <?php endforeach; ?>
</body>
</html>