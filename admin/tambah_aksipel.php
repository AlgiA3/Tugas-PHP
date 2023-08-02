<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$nama_pelanggan = $_POST['nama_pelaggan'];
$email = $_POST['email'];
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan
values('','$nama_pelanggan','$email')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>







