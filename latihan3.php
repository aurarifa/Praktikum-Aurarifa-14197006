<h1>Ubah Data Mahasiswa</h1>

<?php
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$npm= $_GET['npm'];

$query=mysqli_query($con,"SELECT * FROM tbl_mahasiswa WHERE npm='$npm'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

if(isset($_POST['proses']))
{
$nama= $_POST['nama'];
$query=mysqli_query($con,"UPDATE tbl_mahasiswa SET npm='$npm', nama='$nama' WHERE npm='$npm'");
header('location:latihan1.php');
}

?>

<form action="" method="POST">
NPM <br>
<input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled><br>
Nama <br>
<input type="text" name="nama" value="<?php echo $data['nama'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan1.php' value='Batal' />
</form>

<?php } ?>
