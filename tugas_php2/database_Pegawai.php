<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password);

    //Check Connection
    if(!$conn){
        die ("Connection failed: " . mysqli_connect_error());
    }

    //Create Database
    $sql = "CREATE DATABASE pegawai";
    if(mysqli_query($conn, $sql)){
        echo "Database Created Successfully";
    }else{
        echo "Error Creating Database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>