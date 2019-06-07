<?php
// Jualan Produk
class Produk {
    // Property
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;
            // Method ini akan di jalankan otomatis dalam mebuat instansiasi kelas
    public function __construct($judul ="Ini Judul",$penulis="Ini Penulis",$penerbit="Ini Penerbit",$harga=40000, $jmlHalaman = 0 , $waktuMain = 0 , $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;      
    }
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // Komik : Naruto | Mashahi Kishimoto , Shonen jump (RP. 30000) - 100 Halaman
        $str = "{$this->tipe}  : {$this->judul} | {$this->getLabel()} (RP. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman";
        }   else if($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam";
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

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000 , 100, 0, "Komik");
$produk2 = new Produk("Uncharter","Neil Druckmann","Sony Computer",25000,0,50, "Game");

echo $produk1->getInfoLengkap();
echo "<br/>";
echo $produk2->getInfoLengkap();


?>