<?php
// Koneksi ke database
// Membutuhkan sebuah function atau driver
// butuh parameter
$conn = mysqli_connect("localhost", "root" , "",  "booksstore");

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
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $jmlHalaman = htmlspecialchars($data["jmlHalaman"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);
    


    $query = "INSERT INTO bookdetails
                VALUES
                ('','$judul','$penulis','$penerbit','$jmlHalaman','$harga','$gambar')
                ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id){

    global $conn;

    mysqli_query($conn, "DELETE FROM bookdetails WHERE id = $id");
    return mysqli_affected_rows($conn);
}
