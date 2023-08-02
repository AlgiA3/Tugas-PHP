<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_pelanggan = $_POST['id_pelanggan'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$total_transaksi = $_POST['total_transaksi'];
// menginput data ke database
mysqli_query($koneksi,"insert into penjualan
values('','$id_pelanggan','$tgl_transaksi','$total_transaksi')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>







