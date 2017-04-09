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
    <title>Input Data</title>
  </head>
  <body>
    <div class="judul">
      <h1>Membuat CRUD dengan PHP dan SQL</h1>
      <h2>Menampilkan data dari database</h2>
    </div>
    <br/>

    <a href="index.php">Lihat Semua Data</a>

    <br/>
    <h3>Input Data Baru</h3>
    <form action="input_aksi.php" method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td><input type="text" name="pekerjaan"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Simpan"></td>
        </tr>
      </table>
    </form>
      <a href="logout.php">Logout</a>
  </body>
</html>
<?php } ?>
