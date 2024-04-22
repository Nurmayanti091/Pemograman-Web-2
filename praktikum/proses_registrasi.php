<?php

    $NIM=$_POST['NIM'];
    $nama=$_POST['nama'];
    $jenisKelamin=$_POST['jenisKelamin'];
    $Prodi=$_POST['programStudi'];
    $skillWeb=$_POST['skillWeb'];
    $Domisili=$_POST['domisili'];
    $Email=$_POST['email'];
    $score=$_POST['score'];
    $keterangan=$_POST['keterangan'];




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['skills'])) {
            $skillWeb = $_POST['skills'];
            $score = 0;
            $keterangan = "";
    
            foreach ($skillWeb as $skill) {
                switch ($skill) {
                    case 'HTML':
                        $score += 10;
                        break;
                    case 'CSS':
                        $score += 10;
                        break;
                    case 'JavaScript':
                        $score += 20;
                        break;
                    case 'RWD Bootstrap':
                        $score += 20;
                        break;
                    case 'PHP':
                        $score += 30;
                        break;
                    case 'Python':
                        $score += 30;
                        break;
                    case 'Java':
                        $score += 50;
                        break;
                    default:
                        break;
                }
            }
    
            if ($score >= 101) {
                $keterangan = "Sangat Baik";

            } elseif ($score >= 61) {
                $keterangan = "Baik";

            } elseif ($score >= 41) {
                $keterangan = "Cukup";

            } elseif ($score >= 40) {
                $keterangan = "kurang";

            } else {
                $keterangan = "Tidak memadai.";
            }
        }
    }
    
    
  //cetak hasil dari php di atas
  echo "<br/>NIM = " . $NIM;
  echo "<br/>ama = " . $nama;
  echo "<br/>jenisKelamin = " . $jenisKelamin;
  echo "<br/>programStudi = " . $Prodi;
  echo "<br/skillWeb = " . $skillWeb;
  echo "<br/>domisili = " . $Domisili;
  echo "<br/>email = " . $Email;
  echo "<br/>score= " . $score;
  echo "<br/> keterangan =" . $keterangan;






?>