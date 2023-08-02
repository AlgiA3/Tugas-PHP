<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA BARANG</h2>
<br/>
<a href="tambahbar.php">+ TAMBAH BARANG</a>
<a href="cetakbarang.php"> | CETAK TABEL BARANG</a>
<br/>
<br/>
<table border="1">
<tr>
<th>NO</th>
<th>Id_Barang</th>
<th>Id_Kategori</th>
<th>Nama Barang</th>
<th>Harga</th>
<th>Stok</th>
<th>Opsi</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from barang");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['id_barang']; ?></td>
<td><?php echo $d['id_kategori']; ?></td>
<td><?php echo $d['nama_barang']; ?></td>
<td><?php echo $d['harga']; ?></td>
<td><?php echo $d['stok']; ?></td>
<td>
<a href="editbar.php?id_barang=<?php echo $d['id_barang']; ?>">EDIT</a>
<a href="hapusbar.php?id_barang=<?php echo $d['id_barang']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>