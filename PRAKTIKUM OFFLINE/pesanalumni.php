<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></title>
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
            margin-top:30px;
            margin-bottom:30px;
        }
        .lgt-btn{
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
        th{
            font-size:20px;
        }
    </style>
</head>
<body>
   <center><h1>Pesan-Pesan Para Alumni!</h1></center> 
   <a class="lgt-btn" href="logout.php">LOGOUT</a>
<?php
include "koneksi.php";
$sql="select * from pesanalumni order by Name;";
$qry=mysqli_query($conn, $sql) or die("Proses cetak gagal");
echo "<table width='65%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No</th>
<th>Pesan</th>
<th>Atur</th>
";

while($hasil=mysqli_fetch_row($qry)){
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[7]</td>
<td style='text-align:center;'><a href=\"edit.php?id=$hasil[id]\">Edit</a> |
        <a href=\"deletepesan.php?id=$hasil[0]\"onClick=\"return confirm ('Apakah Anda yakin ingin menghapus?'\">Delete</a>
        </td>
</tr>";
}
echo "</table>";
?>
</body>
</html>