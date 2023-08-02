
<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA PENJUALAN</h2>
<br/>
<a href="tambahpenju.php">+ TAMBAH PENJUALAN</a>
<a href="cetakpenju.php"> | CETAK TABEL PENJUALAN</a>
<br/>
<br/>
<table border="1">
<tr>
<th>No</th>    
<th>id_transaksi</th>
<th>id_pelanggan</th>
<th>tgl_transaksi</th>
<th>total_transaksi</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from penjualan");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['id_transaksi']; ?></td>
<td><?php echo $d['id_pelanggan']; ?></td>
<td><?php echo $d['tgl_transaksi']; ?></td>
<td><?php echo $d['total_transaksi']; ?></td>
<td>
<a href="editpenju.php?id=<?php echo $d['id_transaksi']; ?>">EDIT</a>
<a href="hapuspenju.php?id=<?php echo $d['id_transaksi']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>