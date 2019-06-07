<?php
// Koneksikan ke Database
// Membutuhkan sebuah function atau driver
// Butuh Parameter
$conn = mysqli_connect("localhost" , "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){

    global $conn;

    // Ambil data
    $merek = $data["merek"];
    $tipe = $data["tipe"];
    $memory = $data["memory"];
    $harga = $data["harga"];
    $gambar = $data["gambar"];


    $query = "INSERT INTO smartphone
                VALUES
                ('','$merek','$tipe','$memory','$harga','$gambar')
                ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

?>

