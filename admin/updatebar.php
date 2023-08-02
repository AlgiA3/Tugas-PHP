<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
// update data ke database
mysqli_query($koneksi,"update barang set nama_barang='$nama_barang',
harga='$harga', stok='$stok' where id_barang='$id_barang'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
