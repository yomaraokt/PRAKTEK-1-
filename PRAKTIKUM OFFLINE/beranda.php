<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
session_start();
echo "<center><h1>Selamat datang, " . $_SESSION['username'] . "!" . "</h1></center>";
$error_name = "";
$error_email = "";
$error_address = "";
$error_tahunlulus = "";
$error_pekerjaan = "";
$error_message = "";

$name = "";
$email = "";
$address = "";
$tahunlulus = "";
$pekerjaan = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $error_name = "Nama Tidak Boleh Kosong!";
    }
 else {
    $name = cek_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z]*$/", $name)){
        $nameErr = "Inputan hanya boleh huruf dan spasi!";
    }
 }
if(empty($_POST["email"])){
    $error_email = "EMAIL Tidak Boleh Kosong!";
} else {
    $email = cek_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_email = "Format email invalid";
    }
}
 if (empty($_POST["address"])) {
    $error_address = "Alamat tidak boleh kosong";
} else {
    $address = cek_input($_POST["address"]);
}

if(empty($_POST["tahunlulus"])){
    $error_tahunlulus = "Tidak boleh kosong!";
} else {
    $tahunlulus = cek_input($_POST["tahunlulus"]);
}
if(empty($_POST["pekerjaan"])){
    $error_pekerjaan = "pekerjaan tidak boleh kosong!";
} else {
    $pekerjaan = cek_input($_POST["pekerjaan"]);
    }
if(empty($_POST["message"])){
    $error_message = "message tidak boleh kosong!";
} else {
    $message = cek_input($_POST["message"]);
    }

   include "koneksi.php";
    try {
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal!");
        $sql = "INSERT INTO `pesanalumni`
        (`Name`, `Email`, `Address`, `Tahun Lulus`, `Pekerjaan`, `Message`) 
        VALUES ('$name', '$email', '$address', '$tahunlulus', '$pekerjaan', '$message')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e;
    }
}


function cek_input($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<h3>
    <center>
        <script>
        date = new Date().toLocaleDateString();
        document.write(date);
        </script>
    </center>
</h3>
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Silahkan Masukkan Data Anda, Para Alumni!
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control <?php echo ($error_name !="" ? "is-invalid" : "");?>" id = "name" placeholder = "name" value = "<?php echo $name; ?>"><span class="warning"><?php echo $error_name;?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : "") ;?>" id = "email" placeholder = "email" value = "<?php echo $email; ?>"><span class="warning"><?php echo $error_email;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control <?php echo ($error_address !="" ? "is-invalid" : "");?>" id = "address" placeholder = "address" value = "<?php echo $address; ?>"><span class="warning"><?php echo $error_address;?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahunlulus" class="col-sm-2 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-10">
                                <input type="text" name="tahunlulus" class="form-control <?php echo ($error_tahunlulus !="" ? "is-invalid" : "");?>" id = "tahunlulus" placeholder = "tahun lulus" value = "<?php echo $tahunlulus; ?>"><span class="warning"><?php echo $error_tahunlulus;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="pekerjaan" class="form-control <?php echo ($error_pekerjaan !="" ? "is-invalid" : "");?>" id = "pekerjaan" placeholder = "pekerjaan" value = "<?php echo $pekerjaan; ?>"><span class="warning"><?php echo $error_pekerjaan;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <input type="text" name="message" class="form-control <?php echo ($error_message !="" ? "is-invalid" : "");?>" id = "message" placeholder = "message" value = "<?php echo $message; ?>"><span class="warning"><?php echo $error_message;?></span>
                            </div>  
                        </div> 
                        <div class="form-group row justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="pesanalumni.php" class="btn btn-warning">Lihat Pesan Alumni</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>






