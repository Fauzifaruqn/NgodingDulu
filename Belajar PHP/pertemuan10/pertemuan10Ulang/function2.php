<?php
$conn = mysqli_connect("localhost","root", "","booksstore");

function query($query){

    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows = $row;
    }
    return $rows;


}

function tambah($data){

    global $conn;
    // AmbilData
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $jmlHalaman = htmlspecialchars($data["jmlHalaman"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO bookdetails 
                VALUES
                ('','$judul','$penulis','$penerbit','$jmlHalaman','$harga')
                ";
    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);

}

function hapus($id){


}

?>