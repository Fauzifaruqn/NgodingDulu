<?php
// Jualan Produk
class Produk {
    // Property
    public  $judul,
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

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2 = new Produk("Uncharter","Neil Druckmann","Sony Computer",25000);


echo "Komik : " . $produk1->getLabel();
echo "<br/>";
echo "Game :" . $produk2->getLabel();
echo "<br/>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>