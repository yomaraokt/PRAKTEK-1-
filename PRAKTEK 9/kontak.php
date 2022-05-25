<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK PENGGUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background-color: blue;
        }
        .card-header{
            background-color: rgb(0, 167, 255);
        }
        center{
            font-weight:bolder;
        }
    </style>
</head>

<body>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                   <center>FORM KONTAK PENGGUNA</center> 
                </div>
                <div class="card-body">
                    <form method="post" action="simpan_kontak.php">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id="Nama" class="form-control">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10 ">
                                <input class="form-check-input" type="radio" name="jkel" id="jkel" value="Laki-Laki">
                                <label class="form-check-label" for="jkel">Laki-Laki</label>
                                <input class="form-check-input" type="radio" name="jkel" id="jkel" value="Perempuan">
                                <label class="form-check-label" for="jkel">Perempuan</label>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" id="alamat" class="form-control">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                                <input type="text" name="kota" id="kota" class="form-control">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <textarea name="pesan" id="pesan" class="form-control" rows="5"></textarea>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>