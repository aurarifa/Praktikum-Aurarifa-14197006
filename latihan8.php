<?php

include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
$kode_dosen= $_GET['kode_dosen'];
 
$query=mysqli_query($con,"DELETE FROM tbl_dosen WHERE kode_dosen=$kode_dosen")or die(mysql_error());
 

header('location:latihan5.php');
?>