<html>
<head>
	<title>USER DATA LOGIN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
	body {
            background-color: blue;
        }
		center{
			font-weight:bolder;
		}
</style>
</head>
<body>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                   <center>USER LOGIN</center> 
                </div>
                <div class="card-body">
                    <form method="post" action="cek_login.php">
                        <div class="form-group row justify-content-center">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-6">
                                <input placeholder="Masukkan Username" type="text" name="username" id="username" class="form-control">
                            </div>
                        </div> <br>
						<div class="form-group row justify-content-center">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-6">
                                <input placeholder="Masukkan Password" type="text" name="password" id="password" class="form-control">
                            </div>
                        </div> <br>
						<div class="form-group row justify-content-center">
                        <div class="button">
                        <button type="submit" name="submit" class="btn btn-primary">Log In</button>
                        <a href="signup.php">Sign Up</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>		

</body>
</html>