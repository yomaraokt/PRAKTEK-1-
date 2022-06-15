<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
    $error_name = "";
    $error_address = "";
    $error_email = "";
    $error_angkatan = "";
    $error_jurusan = "";
    $error_username = "";
    $error_password = "";

    $name = "";
    $address = "";
    $email = "";
    $angkatan = "";
    $jurusan = "";
    $username = "";
    $password = "";

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
     if (empty($_POST["address"])) {
        $error_address = "Alamat tidak boleh kosong";
    } else {
        $address = cek_input($_POST["address"]);
    }
    if(empty($_POST["email"])){
        $error_email = "EMAIL Tidak Boleh Kosong!";
    } else {
        $email = cek_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error_email = "Format email invalid";
        }
    }
    if(empty($_POST["angkatan"])){
        $error_angkatan = "Angkatan tidak boleh kosong!";
    } else {
        $angkatan = cek_input($_POST["angkatan"]);
    }
    if(empty($_POST["jurusan"])){
        $error_jurusan = "Jurusan tidak boleh kosong!";
    } else {
        $jurusan = cek_input($_POST["jurusan"]);
        }
    if(empty($_POST["username"])){
        $error_username = "Username tidak boleh kosong!";
    } else {
        $username = cek_input($_POST["username"]);
        }
         if(empty($_POST["password"])){
            $error_password = "Password tidak boleh kosong!";
        } else {
            $password = cek_input($_POST["password"]);
            }
        $namaserver = "localhost";
        $usernamee = "root";
        $passwordd = "";
        $dbname = "webalumni";
        try {
            $conn = mysqli_connect($namaserver, $usernamee, $passwordd, $dbname) or die("Koneksi gagal!");
            $sql = "INSERT INTO `alumni`
            (`Name`, `Address`, `Email`, `Angkatan`, `Jurusan`, `Username`, `Password`) 
            VALUES ('$name', '$address', '$email', '$angkatan', '$jurusan', '$username', '$password')";
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
<h1> <center>Selamat Datang Di Web Alumni!</center> </h1>
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    SIGN UP
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control <?php echo ($error_name !="" ? "is-invalid" : "");?>" id = "name" placeholder = "name" value = "<?php echo $name; ?>">
                                <span class="warning"><?php echo $error_name;?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control <?php echo ($error_address !="" ? "is-invalid" : "");?>" id = "address" placeholder = "address" value = "<?php echo $address; ?>"><span class="warning"><?php echo $error_address;?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : "") ;?>" id = "email" placeholder = "email" value = "<?php echo $email; ?>"><span class="warning"><?php echo $error_email;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="angkatan" class="form-control <?php echo ($error_web !="" ? "is-invalid" : "");?>" id = "angkatan" placeholder = "angkatan" value = "<?php echo $angkatan; ?>"><span class="warning"><?php echo $error_angkatan;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <input type="text" name="jurusan" class="form-control <?php echo ($error_jurusan !="" ? "is-invalid" : "");?>" id = "jurusan" placeholder = "jurusan" value = "<?php echo $jurusan; ?>"><span class="warning"><?php echo $error_jurusan;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control <?php echo ($error_username !="" ? "is-invalid" : "");?>" id = "username" placeholder = "username" value = "<?php echo $username; ?>"><span class="warning"><?php echo $error_username;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" class="form-control <?php echo ($error_password !="" ? "is-invalid" : "");?>" id = "password" placeholder = "password" value = "<?php echo $password; ?>"><span class="warning"><?php echo $error_password;?></span>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <a href="login.php">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
