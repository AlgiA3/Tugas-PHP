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
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from pelanggan where
id_transaksi='$id_transaksi'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="updatepel.php">
<table>
<tr>
<td>Id_Pelanggan</td>
<td>
<input type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi'];
?>">
<input type="text" name="id_pelanggan" value="<?php echo $d['id_pelanggan'];
?>">
</td>
</tr>
<tr>
<td>Tanggal Transaksi</td>
<td><input type="date" name="tgl_transaksi" value="<?php echo
$d['tgl_transaksi']; ?>"></td>
</tr>
<tr>
<td>Total Transaksi</td>
<td><input type="number" name="total_transaksi" value="<?php echo
$d['total_transaksi']; ?>"></td>
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