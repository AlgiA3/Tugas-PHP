<!DOCTYPE html>
<html>
<head>
<title>TOKO BARANG ELEKTRONIK RUMAH TANGGA</title>
<!-- menghubungkan dengan file css -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- menghubungkan dengan file jquery -->
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!--
Author : Nama Anda
Site : www.malasngoding.com
-->
<div class="content">
<header>
<h1 class="judul">BARANG ELEKTRONIK </h1>
<h3 class="deskripsi">UNTUK KEPERLUAN RUMAH TANGGA
</h3>
</header>
<div class="menu">
<ul>
<li><a href="index.php?page=home">HOME</a></li>
<li><a href="index.php?page=barang">BARANG</a></li>
<li><a href="index.php?page=pelanggan">PELANGGAN</a></li>
<li><a href="index.php?page=penjualan">PENJUALAN</a></li>
</ul>
</div>
<div class="badan">
<?php
if(isset($_GET['page'])){
$page = $_GET['page'];
switch ($page) {
    case 'home':
        include "home.php";
        break;
case 'barang':
include "barang.php";
break;
case 'pelanggan':
include "pelanggan.php";
break;
case 'penjualan':
include "penjualan.php";
break;
default:
echo "<center><h3>Maaf. Halaman tidak di temukan
!</h3></center>";
break;
} }
else{
include "home.php";
}
?>
</div>
</div>
</body>
</html>