<?php
// Data Mahasisawa
class Mahasiswa {
    // Property
    public  $npm,
            $nama,
            $jenisKelamin,
            $ipk;
            // Method ini akan di jalankan otomatis dalam mebuat instansiasi kelas
    public function __construct($npm = "140810160007", $nama ="Fauzi Faruq Nabbani", $jenisKelamin="Laki-Laki", $ipk = 3.69){
        $this->npm = $npm;
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->ipk = $ipk;
    }

    public function getLabel(){
        return "$this->jenisKelamin , $this->ipk";
    }
}

class CetakMahasiswa {
    public function cetak($mahasiswa){
        $str = "{$mahasiswa->npm} | {$mahasiswa->nama} , {$mahasiswa->getLabel()}";
        return $str;
    }
}

$mahasiswa1 = new Mahasiswa("140810160001" ,"Angga Kresnabayu" ,"Laki-Laki" , 3.5);
$mahasiswa2 = new Mahasiswa("140810160002" ,"Tasya Amanda" ,"Perempuan" , 3.4);

echo "Jenis Kelamin dan IPK Mahasiswa 1 : " . $mahasiswa1->getLabel();
echo "</br>";
echo "Jenis Kelamin dan IPK Mahasiswa 2 : " . $mahasiswa2->getLabel();
echo "</br>";

$infoSemuaMhs = new CetakMahasiswa();
echo $infoSemuaMhs->cetak($mahasiswa1);

?>