<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:login.php?pesan=belum_login");
}
else {
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Membuat CRUD dengan PHP dan SQL - Hapus Data dari Database</title>
  </head>
  <body>
    <div class="judul">
      <h1>Membuat CRUD dengan PHP dan SQL</h1>
      <h2>Hapus data dari database</h2>
      <h3>Oleh Akida Tawaka</h3>
    </div>

    <br>
    <a href="index.php">Lihat Semua Data</a>
    <br>
    <h3>Hapus Data</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    mysql_query("DELETE FROM user WHERE id='$id'") or die(mysql_error()) ;
    header("location:index.php?pesan=hapus");
     ?>
       <a href="logout.php">Logout</a>
  </body>
</html>
<?php } ?>
