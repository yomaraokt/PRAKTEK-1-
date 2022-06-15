<?php
include "koneksi.php";
$id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM pesanalumni WHERE id='$id'");
    header("Location:pesanalumni.php");

?>