<?php

// membuat koneksi
include('koneksi.php');

// Deklarasi variable
/* mengaktifkan session */
session_start();
$_SESSION['SESS_USERNAME'] = $_POST['username'];

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($con, "select * from admin where username = '$username' and password = '$password'");
if (mysqli_num_rows($query) > 0) {
  $r = mysqli_fetch_array($query);
  $_SESSION['username'] = $r['username'];

  header("location:index_admin.php");
} else {
  echo "<script>alert('Password atau Username Salah');history.go(-1); </script>";
}
