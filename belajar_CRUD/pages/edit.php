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
    <title>Membuat CRUD dengan PHP dan SQL - Edit Data dari Database</title>
  </head>
  <body>
    <div class="judul">
      <h1>Membuat CRUD dengan PHP dan SQL</h1>
      <h2>Edit data dari database</h2>
      <h3>Oleh Akida Tawaka</h3>
    </div>

    <br>
    <a href="index.php">Lihat Semua Data</a>
    <br>

    <h3>Edit Data</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET["id"];
    $query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'") or die(mysql_error());
    $nomor = 1;
    while ($data = mysql_fetch_array($query_mysql)) {
    ?>
     <form action="edit_aksi.php" method="post">
       <table>
         <tr>
           <td>Nama</td>
           <td>
             <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
             <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
           </td>
         </tr>
         <tr>
           <td>Alamat</td>
           <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
         </tr>
         <tr>
           <td>Pekerjaan</td>
           <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"></td>
         </tr>
         <tr>
           <td></td>
           <td><input type="submit" value="Ubah"></td>
         </tr>
       </table>
     </form>
    <?php }  ?>
    <a href="logout.php">Logout</a>
  </body>
</html>
<?php } ?>
