<?php

include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
$kode_mk= $_GET['kode_mk'];
 
$query=mysqli_query($con,"DELETE FROM tbl_mata_kuliah WHERE kode_mk='$kode_mk'")or die(mysql_error());
 

header('location:latihan9.php');
?>