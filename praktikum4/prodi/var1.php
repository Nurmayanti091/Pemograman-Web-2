<?php

// Data dummy
$jumlahMahasiswa = 150;
$jumlahDosen = 10;
$jumlahMataKuliah = 20;
$rasioMahasiswaDosen = $jumlahMahasiswa / $jumlahDosen;
$tingkatKelulusan = 85;
$tingkatKepuasanMahasiswa = 90;
$proyeksiKarir = "Banyak peluang karir di bidang pengembangan perangkat lunak dan teknologi informasi.";
$prestasiMahasiswa = array("Juara 1 Lomba Programming Nasional", "Publikasi Jurnal Internasional");
$pengumuman = "Pendaftaran mata kuliah semester ganjil telah dibuka.";
$kalenderAkademik = array(

    "pertemuan kuliah pekan 1-6: 19 februari- 27 April ",
    "Ujian tengah semester: 29 april - 4 Mei",
    "Ujian Akhir Semester: 1 juli - 6 juli"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Teknik Informatika</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Teknik Informatika</h1>
   
    <h2>Informasi</h2>
    <p><strong>Proyeksi Karir:</strong> <?php echo $proyeksiKarir; ?></p>
    <p><strong>Prestasi Mahasiswa:</strong></p>
    <ul>
        <?php foreach ($prestasiMahasiswa as $prestasi) { ?>
            <li><?php echo $prestasi; ?></li>
        <?php } ?>
    </ul>
    <p><strong>Pengumuman:</strong> <?php echo $pengumuman; ?></p>
    <h2>Kalender Akademik</h2>
    <ul>
        <?php foreach ($kalenderAkademik as $kegiatan) { ?>
            <li><?php echo $kegiatan; ?></li>
        <?php } ?>
    </ul>
</body>
</html>