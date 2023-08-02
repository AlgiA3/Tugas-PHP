<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<h2>CRUD DATA BARANG </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA BARANG</h3>
<?php
include 'koneksi.php';
$id_barang = $_GET['id_barang'];
$data = mysqli_query($koneksi,"select * from barang where
id_barang='$id_barang'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="updatebar.php">
<table>
<tr>
<td>Nama Barang</td>
<td>
<input type="hidden" name="id_barang" value="<?php echo $d['id_barang'];
?>">
<input type="text" name="nama_barang" value="<?php echo $d['nama_barang'];
?>">
</td>
</tr>
<tr>
<td>Harga</td>
<td><input type="number" name="harga" value="<?php echo
$d['harga']; ?>"></td>
</tr>
<tr>
<td>Stok</td>
<td><input type="number" name="stok" value="<?php echo
$d['stok']; ?>"></td>
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