<?php
include 'koneksi.php';
$namaproduk = $_POST['namaproduk'];
$hargasatuan = $_POST['hargasatuan'];

mysql_query("INSERT INTO produk VALUES('','$namaproduk','$hargasatuan')");

header("location:pengolahan_data_produk.php");
?>
