<?php
include 'koneksi.php';
$namabarang = $_POST['namabarang'];
$jenissatuan = $_POST['jenissatuan'];
$divisipemakai = $_POST['divisipemakai'];

mysql_query("INSERT INTO bahan_baku VALUES('','$namabarang','$jenissatuan','$divisipemakai')");

header("location:pengolahan_data_bahanbaku.php");
?>
