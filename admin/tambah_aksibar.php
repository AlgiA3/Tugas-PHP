<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
// menginput data ke database
mysqli_query($koneksi,"insert into barang
values('','$nama_barang','$harga','$stok')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>







