<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA BARANG </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA BARANG</h3>
<form method="post" action="tambah_aksibar.php">
<table>
<tr>
<td>Nama Barang</td>
<td><input type="text" name="nama_barang"></td>
</tr>
<tr>
<td>Harga</td>
<td><input type="number" name="harga"></td>
</tr>
<tr>
<td>stok</td>
<td><input type="number" name="stok"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>

</table>
</form>
</body>
</html>