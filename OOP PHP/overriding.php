<?php

class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul="Ini Judul",$penulis="Ini Penulis",$penerbit="Ini Penerbit",$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit =$penerbit;
        $this->harga = $harga;
        
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
        
    }

    public function getInfoProduk(){
        // Komik : Naruto | Masahsi Kishimoto , Shone Jump (RP. 30000) 
        $str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";
       
        return $str;
    }
}


class Komik extends Produk{
    public  $jmlHalaman;

    public function __construct($judul="Ini Judul",$penulis="Ini Penulis",$penerbit="Ini Penerbit",$harga=0, $jmlHalaman=0){

        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->jmlHalaman=$jmlHalaman;
    }

    public function getInfoProduk(){
        $testKomik = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $testKomik;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul="Ini Judul",$penulis="Ini Penulis",$penerbit="Ini Penerbit",$harga=0, $waktuMain=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk(){
        $testGame = "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} Jam ";
        return $testGame;
    }
}
$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000 ,1000);
$produk2 = new Game("Uncharter","Neil Druckmann","Sony Computer",25000,50);

echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk2->getInfoProduk();
?>