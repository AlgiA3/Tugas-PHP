<!DOCTYPE html>
<html>
<head>
<title>Cetak Laporan - Database Akademik</title>
</head>
<body>
<h2>LAPORAN DATA BARANG ELEKTRONIK</h2>
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
</tr>
<?php 
}
?>
</table>
<script>
window.print();
</script>

</body>
</html>
