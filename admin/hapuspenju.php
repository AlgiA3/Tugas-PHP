<?php
include 'koneksi.php';
$id_transaksi = $_GET['id_transaksi'];
mysqli_query($koneksi,"DELETE FROM penjualan WHERE id_transaksi='$id_transaksi'")or
die(mysql_error());
header("location:index.php?pesan=hapus");
?>






