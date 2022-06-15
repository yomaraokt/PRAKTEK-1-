<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "webalumni";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");
?>