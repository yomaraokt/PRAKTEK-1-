<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Anda</title>
</head>
<body>
    <?php
if (empty($_POST['nama']) || empty($_POST['gender']) || empty($_POST['ttl']) || empty($_POST['umur']) || empty($_POST['nomorhp']) || empty($_POST['job']) || empty($_POST['alamat'])) {
	header("Location:data_kosong.php");
} else {
	echo "<center> BIODATA ANDA";
	echo "<br><br>";
	echo "<center> Nama : ".$_POST['nama']." <center><br>";
	echo "<center> Jenis Kelamin : ".$_POST['gender']." <center><br>";
	echo "<center> TTL : ".$_POST['ttl']." <center><br>";
	echo "<center> Umur : ".$_POST['umur']." <center><br>";
	echo "<center> No.HP : ".$_POST['nomorhp']." <center><br>";
	echo "<center> Pekerjaan : ".$_POST['job']." <center><br>";
    echo "<center> Alamat : ".$_POST['alamat']." <center><br>";
}
    ?>

</body>
</html>