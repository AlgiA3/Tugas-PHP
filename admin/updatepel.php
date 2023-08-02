<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_pelanggan = $_POST['id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];

// update data ke database
mysqli_query($koneksi,"update pelanggan set nama_pelanggan='$nama_pelanggan',
email='$email' where id_pelanggan='$id_pelanggan'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
