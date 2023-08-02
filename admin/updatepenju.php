<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_transaksi = $_POST['id_transaksi'];
$id_pelanggan = $_POST['id_pelanggan'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$total_transaksi = $_POST['total_transaksi'];
// update data ke database
mysqli_query($koneksi,"update mahasiswa set id_pelanggan='$nid_pelanggan',
tgl_transaksi='$tgl_transaksi', total_transaksi='$total_transaksi' where id_transaksi='$id_transaksi'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
