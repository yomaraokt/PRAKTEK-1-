<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pegawai";
    //Create Connection
    $con = mysqli_connect($servername, $username, $password, $dbname);
    //Check Connection
    if(!$con){
    die ("Connection failed: " . mysqli_connect_error());
     }
     $id = $_POST['id'];
     $nama = $_POST['nama'];
     $email = $_POST['email'];
     $idkota = $_POST['idk'];

     mysqli_query($con,"UPDATE dt_pegawai SET NAMA='$nama', EMAIL='$email', ID_KOTA='$idk' WHERE ID_PGW='$id'");
     header("Location: data_Pegawai.php")
    ?> 
</body>
</html>