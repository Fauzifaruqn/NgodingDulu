<?php
// Tentang Identitas Mahasiswa
// Array Multidimensi

$mahasiwa = ["Fauzi" , "140810160007", "Sistem Cerdas", "fauzi@yahaoo.com"];

$students = [
    ["Fauzi" , "140810160007", "Sistem Cerdas", "fauzi@yahaoo.com"],
    ["Faruq" , "140810160001", "Sistem Informasi", "faruq@yahaoo.com"],
    ["Nabbani" , "140810160003", "Jaringan Komputer", "nabbani@yahaoo.com"],
    ["Mantap" , "140810160006", "Metnum", "mantap@yahaoo.com"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
    <!-- <li>Fauzi</li>
    <li>140810160007</li>
    <li>Sistem Cerdas</li>
    <li>fauzi@yahoo.com</li> -->
    <?php foreach ($mahasiwa as $mhs) : ?>
        <li><?php echo $mhs; ?></li>
    
    <?php endforeach; ?>


</ul>

<?php foreach($students as $student) : ?>
<ul>
    
        <li>Nama :<?php echo $student[0]; ?></li>
        <li>NPM :<?php echo $student[1]; ?></li>
        <li>Bidang Minat :<?php echo $student[2]; ?></li>
        <li>Email : <?php echo $student[3]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>