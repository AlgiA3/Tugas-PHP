
<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA PELANGGAN </h2>
<br/>
<a href="tambahpel.php">+ TAMBAH PELANGGAN</a>
<a href="cetakpel.php"> | CETAK TABEL PELANGGAN</a>
<br/>
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
<td>
<a href="editpel.php?id=<?php echo $d['id_pelanggan']; ?>">EDIT</a>
<a href="hapuspel.php?id=<?php echo $d['id_pelanggan']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>