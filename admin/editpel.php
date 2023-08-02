<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<h2>CRUD DATA PELANGGAN </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA PELANGGAN</h3>
<?php
include 'koneksi.php';
$id_pelanggan = $_GET['id_pelanggan'];
$data = mysqli_query($koneksi,"select * from pelanggan where
id_pelanggan='$id_pelanggan'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="updatepel.php">
<table>
<tr>
<td>Id_Pelanggan</td>
<td>
<input type="hidden" name="id_pelanggan" value="<?php echo $d['id_pelanggan'];
?>">
<input type="text" name="nama_pelanggan" value="<?php echo $d['nama_pelanggan'];
?>">
</td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?php echo
$d['email']; ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>


</body>
</html>