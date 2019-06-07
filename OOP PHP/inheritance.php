<?php
// Jualan Produk
class Produk {
    // Property
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;
          
            // Method ini akan di jalankan otomatis dalam mebuat instansiasi kelas
    public function __construct($judul ="Ini Judul",$penulis="Ini Penulis",$penerbit="Ini Penerbit",$harga=40000, $jmlHalaman = 0 , $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;    
        $this->jmlHalaman = $jmlHalaman;  
        $this->waktuMain = $waktuMain;  
    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        // Komik : Naruto | Mashahi Kishimoto , Shonen jump (RP. 30000) - 100 Halaman
       $str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";
       
        return $str;
    }
}
class Komik extends Produk {
    public function getInfoKomik(){
        $str = "Komik :  {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman";
        return $str;

    }
}

class Game extends Produk {
    public $waktuMain;

    public function getInfoProduk(){
        $str = "Game :  {$this->judul} | {$this->getLabel()} (RP. {$this->harga}) - {$this->waktuMain} Jam";
        return $str;

    }
}

class Magazine extends Produk{
    public function __construct($toko = "Ini Toko"){
        $this->toko = $toko;
    }

    public function getInfoMagazine (){
        $test = $this->toko;
        return $test;
    }
}
class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000 , 1000, 0);
$produk2 = new Game("Uncharter","Neil Druckmann","Sony Computer",25000,0,50);
$produk3 = new Magazine("Alim Rugi");


echo $produk1->getInfoKomik();
echo "<br/>";
echo $produk2->getInfoProduk();
echo "<br/>";
echo $produk3->getInfoMagazine();

?>