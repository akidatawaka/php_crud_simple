<?php
include 'koneksi.php';
$id = $_POST['id'];
$namabarang = $_POST['namabarang'];
$jenissatuan = $_POST['jenissatuan'];
$divisipemakai = $_POST['divisipemakai'];

mysql_query("UPDATE bahan_baku SET nama_barang_baku='$namabarang', jenissatuan='$jenissatuan',subdivisi_pemakai='$divisipemakai' WHERE id='$id';");
header("location:pengolahan_data_bahanbaku.php"); 
 ?>
