<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Pegawai</title>
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

    //Get Submission From Form
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM dt_pegawai WHERE ID_PGW='$id'");
    header("Location:data_Pegawai.php");

?>
</body>
</html>