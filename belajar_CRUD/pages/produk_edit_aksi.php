<?php
include 'koneksi.php';
$id = $_POST['id'];
$namaproduk = $_POST['namaproduk'];
$hargasatuan = $_POST['hargasatuan'];

mysql_query("UPDATE produk SET nama_produk='$namaproduk', harga='$hargasatuan' WHERE id='$id';");
header("location:pengolahan_data_produk.php");
 ?>
