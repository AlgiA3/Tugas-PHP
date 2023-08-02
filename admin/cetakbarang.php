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
