<?php 

class Produk {
    // Property
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;
    // Membuat Construct
    public function __construct($judul = "Ini Judul", $penulis ="Ini Penulis",$penerbit="Ini Penerbit", $harga=4000,$jmlHalaman=0,$waktuMain=0,$tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->tipe}  {$this->judul} | {$this->getLabel()} (RP {$this->harga} ) "; 
        if($this->tipe == "Komik"){
            $str .= "- {$this->jmlHalaman} Halaman ";
        }
        else if($this->tipe = "Game"){
            $str .= "- {$this->waktuMain} jam";
        }
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",3000,100,0,"Komik");
$produk2 = new Produk("Uncharter","Neil Druckman","Sony Computer",40000,0,50,"Game");

$infoProduk = new CetakInfoProduk();


echo $produk1->getInfoLengkap();
echo "<br/>";
echo $produk2->getInfoLengkap();
echo "<br/>";
echo $infoProduk->cetak($produk1);

?>