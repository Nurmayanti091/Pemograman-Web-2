<?php
// tangkap input login
$email = $_POST['email'];
$password =md5( $_POST['password']);

$credential=[$email,$password];


include_once ('koneksi.php');

//query login

$query="SELECT * FROM users WHERE email = ? && password = ?";
$statement =$dbh->prepare($query);
$statement->execute($credential);
$result =$statement->fetch();



// validasi login
session_start();
if ($result) {
    //simpan data user login ke session
    $_SESSION['name']=$result['name'];
    $_SESSION['email']=$result['email'];

    //pindahkan halaman ke dashboard.php
    header('Location: dashboard.php');
} else {
    header('Location: index.html');
}
