<?php

include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
$npm= $_GET['npm'];
 
$query=mysqli_query($con,"DELETE FROM tbl_mahasiswa WHERE npm=$npm")or die(mysql_error());
 

header('location:latihan1.php');
?>