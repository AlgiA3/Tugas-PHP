<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA PENJUALAN </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA PENJUALAN</h3>
<form method="post" action="tambah_aksipenju.php">
<table>
<tr>
<td>id_pelanggan</td>
<td><input type="text" name="id_pelanggan"></td>
</tr>
<tr>
<td>Tanggal Transaksi</td>
<td><input type="date" name="tgl_transaksi"></td>
</tr>
<tr>
<td>Total Transaksi</td>
<td><input type="text" name="total_transaksi"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>

</table>
</form>
</body>
</html>