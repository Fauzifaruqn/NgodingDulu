<?php
$books = [
    [
        "judul" => "Cinta di Khatulistiwa",
        "jumlahHalaman" => "100 Halaman",
        "hargabuku" => "RP 65.000",
        "penulis" => "Fauzi Faruq",
        "gambarbuku" => "fauzi.jpg",
    ],
    [
        "judul" => "Dalam Dekapan Ukhuwan",
        "jumlahHalaman" => "200 Halaman",
        "hargabuku" => "RP 45.000",
        "penulis" => "Faisal Sidiq",
        "gambarbuku" => "obama.jpg",
    ],
    [
        "judul" => "Perjuangan di Negeri London",
        "jumlahHalaman" => "127 Halaman",
        "hargabuku" => "RP 85.000",
        "penulis" => "Faldo Maldini",
        "gambarbuku" => "faldo.jpg",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku PT Suka Baca</title>
</head>
<body>

<h1>Daftar Buku PT Suka Baca</h1>

<ul>
<?php foreach ($books as $book) :?>
        <li>
        <a href=
                "
                halaman2.php?hargabuku=<?php echo $book["hargabuku"]; ?>
                &judul=<?php echo $book["judul"]; ?>
                &jumlahHalaman=<?php echo $book["jumlahHalaman"]; ?>
                &penulis=<?php echo $book["penulis"]; ?>
                &gambarbuku=<?php echo $book["gambarbuku"]; ?>
                "
                >Judul Buku : <?php echo $book["judul"]; ?></li></a>

<?php endforeach; ?>

</ul>
    
</body>
</html>


