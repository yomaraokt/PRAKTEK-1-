<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
</head>
<body>
    <h1>Edit Data Pegawai</h1>
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
    $id = $_GET['id'];
    $lihat = mysqli_query($con, "SELECT * FROM dt_pegawai WHERE ID_PGW='$id'");
    while($res = mysqli_fetch_array($lihat)){
    ?>
<form action="update.php" method="POST">
    <table>
        <tr>
            <td>ID: </td>
            <td><input type="text" name="id" value="<?php echo $res['ID_PGW']; ?>"></td>
        </tr>
        <tr>
            <td>Nama: </td>
            <td><input type="text" name="nama" value="<?php echo $res['NAMA']; ?>"></td>
        </tr>
        <tr>
            <td>EMAIL: </td>
            <td><input type="text" name="email" value="<?php echo $res['EMAIL']; ?>"></td>
        </tr>
        <tr>
            <td>ID Kota: </td>
            <td><input type="text" name="idk" value="<?php echo $res['ID_KOTA']; ?>"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btnSubmit" value="Submit">
                <input type="reset" name="reset" value="Reset">
        </td>
        </tr>
    </form>
    <?php
    }
    ?>
</body>
</html>