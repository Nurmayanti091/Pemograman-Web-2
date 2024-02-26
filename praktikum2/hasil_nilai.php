<?php

$nama=$_GET['nama'];
$matkul=$_GET['matkul'];
$Nilai_UTS=$_GET['Nilai_UTS'];
$Nilai_UAS=$_GET['Nilai_UAS'];
$Nilai_Tugas=$_GET['Nilai_Tugas'];

//Buat Total

$total =($Nilai_UTS +$Nilai_UAS + $Nilai_Tugas)/3;
$grade;
$predikat;
$status;

//buat perhitungan if kelulusan 
if ($total >=70){
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}




//buat perhitungan mencari Grade
if($total >=85) {
    $grade='A';
}
elseif($total >=70) {
    $grade='B';
}
elseif($total >=50) {
    $grade='C';
}
else {
    $grade ='E';
}



//buat perhitungan SWICTH CASE untuk mencari predikat 
switch($grade){
    case "A":
        $predikat="sangat memuaskan";
        break;
    case "B":
        $predikat="Memuaskan";
        break;
    case "C":
        $predikat="Cukup";
        break;   
    default:
    $predikat="TIDAK ADA";
}

//CETAK HASIL:
echo "Nama = ". $nama;
echo "<br/>matkul = " . $matkul;
echo "<br/>UTS = " . $Nilai_UTS;
echo "<br/>UAS = ". $Nilai_UAS;
echo "<br/>Tugas = " . $Nilai_Tugas;
echo "<br/>Grade = ". $grade;
echo "<br/>Predikat = ". $predikat;
echo "<br/>status = " .$status


?>
