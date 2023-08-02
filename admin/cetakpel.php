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
<th>ID PELANGGAN</th>
<th>NAMA PELANGGAN</th>
<th>EMAIL</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from pelanggan");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['id_pelanggan']; ?></td>
<td><?php echo $d['nama_pelanggan']; ?></td>
<td><?php echo $d['email']; ?></td>
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
