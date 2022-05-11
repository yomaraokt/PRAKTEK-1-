<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
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
        die("Gagal Terkoneksi: " . mysqli_connect_error()); 
    }
    $lihat = mysqli_query($con, "SELECT * FROM dt_pegawai");  
    ?>
    <h1>DATA PEGAWAI</h1>
    <table border="1">
    <tr>
        <th>ID Pegawai</th>
        <th>Nama</th>
        <th>Email</th>
        <th>ID Kota</th>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($lihat)){
        echo "<tr>";
        echo "<td>".$res['ID_PGW']."</td>";
        echo "<td>".$res['NAMA']."</td>";
        echo "<td>".$res['EMAIL']."</td>";
        echo "<td>".$res['ID_KOTA']."</td>";
        echo "<td style='text-align:center;'><a href=\"edit_Datapegawai.php?id=$res[ID_PGW]\">Edit</a> |
        <a href=\"hapus_Datapegawai.php?id=$res[ID_PGW]\"onClick=\"return confirm ('Apakah Anda yakin ingin menghapus?'\">Delete</a>
        </td>";
    }
    ?>
        </table>
    
</body>
</html>