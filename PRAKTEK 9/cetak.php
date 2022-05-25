<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data User</title>
    <style>
        body{
            background-color:blue;
            color:white;
        }
        table{
            background-color:rgb(60, 60, 60);
            margin: 0 auto;
            text-align:center;
        }
        h1{
            font-size:40px;
            margin-top:30px;
            margin-bottom:30px;
        }
        a{
            float:right;
            margin-right:10px;
            background-color:black;
            color:white;
            text-decoration:none;
            padding: 14px 25px;
            display: inline-block;
            border-radius:2rem;
        }
        a:hover{
            background-color:rgb(60, 60, 60);
            color:white;
        }
    </style>
</head>
<body>
    <h1><center>Data User</center></h1>
    <a href="logout.php">LOGOUT</a>
    
<?php
include "koneksi.inc.php";
$sql="select * from kontak order by nama;";
$qry=mysqli_query($conn, $sql) or die("Proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='2'>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>";

while($hasil=mysqli_fetch_row($qry)){
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
</tr>";
}
echo "</table>";
?>
</body>
</html>


