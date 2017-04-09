<?php
include 'koneksi.php';
//membuat variabel
$username = $_POST['username'];
$password = $_POST['password'];

//menyesuaikan dengan data di database
 $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
 $hasil = mysql_query($query);
 $row = mysql_fetch_array($hasil);
 if ($row['username'] == $username AND $row['password'] == $password) {
   session_start();
   $_SESSION['username']=$username;
   header("location:index.php");
 }
 else {
   header("location:login.php?pesan=salah");
 }
 ?>
