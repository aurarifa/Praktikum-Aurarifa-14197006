<h1>Daftar Mata Kuliah</h1>
<table border="1 px">
<tr>
<th> Kode Mata Kuliah </th>
<th> Nama Mata Kuliah </th>
<th> Aksi </th>
</tr>

<?php

include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

$query=mysqli_query($con,"select * from tbl_mata_kuliah");
while($data=mysqli_fetch_array($query)){

echo "<tr>";
echo "<th>"; echo $data['kode_mk']; echo "</th>";
echo "<th>"; echo $data['nama_mk']; echo "</th>";
echo "<th>"; echo "<a href='latihan11.php?kode_mk=$data[kode_mk]'>Ubah</a> | <a href='latihan12.php?kode_mk=$data[kode_mk]'>Hapus</a>"; echo "</th>";
echo "</tr>";
}
?>

</table>
<br>
<input type='button' onclick=location.href='latihan10.php' value='Tambah Data' />





