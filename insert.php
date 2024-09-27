<?php

include('koneksi.php');

//karena form menggunakan method post kita gunakan $_POST
$nama = $_POST['nama']; //index didalamnya sesuai dengan input name yang ada di form
$email = $_POST['email'];
$username = $_POST['username'];
$password = hash('MD5', $_POST['password']);

$insert = mysqli_query($connect,"INSERT INTO user SET nama='$nama', email='$email', username='$username', password='$password' "); 

if($insert) 
    header('Location:user.php'); 
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut