<?php
// Jualan Produk

class Produk {

    // Property
    public $judul,
            $penulis,
            $penerbit,
            $harga;

            // Method ini akan di jalankan otomatis dalam mebuat instansiasi kelas
    public function __construct($judul ="Ini Judul",$penulis="Ini Penulis",$penerbit="Ini Penerbit",$harga=40000){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;      
    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2 = new Produk("Uncharter","Neil Druckmann","Sony Computer",25000);
$produk3 = new Produk();
$produk4 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br/>";
echo "Game :" . $produk2->getLabel();
echo "<br/>";
echo " Harga Komik : " . $produk1->harga;
echo "<br/>";
echo "Produk : " . $produk3->getLabel();
echo "<br/>";
echo $produk3->tambahProperty="Test";
echo "<br/>";
echo $produk3->tambahProperty;
echo "<br/>";
var_dump($produk4);
?>