<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Data Pegawai</title>
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
    $id = @$_POST['id'];
    $nama = @$_POST['nama'];
    $email = @$_POST['email'];
    $idkota = @$_POST['idk'];
    //Save 
    $save = "INSERT INTO dt_pegawai VALUES ('$id', '$nama', '$email', '$idkota')";

    if(mysqli_query($con, $save)){
        echo "New Data Saved!";

    }else{
        echo "Error! " . $save . mysqli_error($con);
    }
    mysqli_close($con);
    ?>
</body>
</html>