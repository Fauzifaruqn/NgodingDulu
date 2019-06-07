<?php
// Jualan Produk

class Produk {

    // Property
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 30000;


    // Methode : function yang ada pada class

    // public function sayHello(){
    //     return "Hello World";
    // }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk();

$produk2 = new Produk();

$produk1->judul = "Naruto";


// Jika ingin menambahkan property baru
$produk2->tambahProperty = "Hahaha";

$produk3 = new Produk();

$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga ="250000";



echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";

echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();




?>