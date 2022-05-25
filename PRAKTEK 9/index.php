<html>
<head>
	<title>USER DATA LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
                   <center>ADMIN LOGIN</center> 
                </div>
                <div class="card-body">
                    <form method="post" action="login_cek.php">
                        <div class="form-group row justify-content-center">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-5">
                                <input placeholder="Masukkan Username" type="text" name="username" id="username" class="form-control">
                            </div>
                        </div> <br>
						<div class="form-group row justify-content-center">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-5">
                                <input placeholder="Masukkan Password" type="text" name="password" id="password" class="form-control">
                            </div>
                        </div> <br>
						<div class="form-group row justify-content-end">
                        <div class="col-sm-7">
                        <button type="submit" name="submit" class="btn btn-primary">Log In</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>		

</body>
</html>