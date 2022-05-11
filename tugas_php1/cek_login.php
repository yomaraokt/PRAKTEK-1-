<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <?php
   include "data_login.php";
   if($_POST['nama'] == $nama && $_POST['email'] == $email){
    
    echo "<center>Berhasil Login!</center>";
    echo "<center>Nama : ".$_POST['nama']."</center>";
    echo "<center>Email : ".$_POST['email']."</center>";
    echo "<center>Waktu login : ".$time."</center>";
    }elseif(empty($_POST['nama']) && empty($_POST['email'])){
        header("Location:kesalahan_login.php");
    }elseif(empty($_POST['nama']) &&  $_POST['email'] == $email){
        header("Location:kesalahan_login.php");
    }elseif(empty($_POST['email']) &&  $_POST['nama'] == $nama){
        header("Location:kesalahan_login.php");
    }elseif($_POST['nama'] != $nama && $_POST['email'] != $email){
        header("Location:kesalahan_login.php");
    }
    
    //Dapat menggunakan seperti dibawah ini untuk menampilkan pesan yang berbeda -->
//    elseif($_POST['nama'] != $nama && $_POST['email'] != $email){
//        echo "<center> Nama dan Email salah!</center>";
//    }elseif(empty($_POST['nama'])){
//        echo "<center>Data tidak lengkap / kosong!</center>";
//    }elseif(empty($_POST['email'])){
//        echo "<center>Data tidak lengkap / kosong!</center>";
//    }
   
        ?>
       
</body>
</html>