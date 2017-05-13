<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:login.php?pesan=belum_login");
}
else {
 ?>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    mysql_query("DELETE FROM bahan_baku WHERE id='$id'") or die(mysql_error()) ;
    header("location:pengolahan_data_bahanbaku.php");
     ?>
<?php } ?>
