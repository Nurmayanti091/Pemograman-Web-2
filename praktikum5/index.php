<?php 
//membuat kelas atau blue print 
class Manusia {
    public $nama;
    public $umur;

  



    public function setNama($nama)
    {
        $this -> nama = $nama;
    }
    public function setUmur($umur)
    {
        $this -> umur = $umur;
    }
    public function getInfo()
    {
        return "Nama :". $this->nama . " , Umur : " . $this -> umur;
    }

}

//membuat Objek
$nurma = new Manusia();    //cara membuat objek baru dari blue print manusia
$nurma ->setNama("Nurmayanti");
$nurma -> setUmur(19);
echo $nurma ->getInfo();


echo "<br>";

$Neri = new Manusia();    //cara membuat objek baru dari blue print manusia
$Neri ->setNama("Neri Aisyah");
$Neri -> setUmur(19);
echo $Neri ->getInfo();


