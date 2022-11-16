<?php

// membuat koneksi
include ('koneksi.php');

// Deklarasi variable
/* mengaktifkan session */
session_start();
$_SESSION['SESS_USERNAME']=$_POST['username_op'];

$username_op= $_POST['username_op'];
$password_op= $_POST['password_op'];

 if(empty($username_op) or empty($password_op)){

  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi');history.go(-1);  </script>";
 }else{

  $query = mysqli_query($con,"select * from operator where username_op = '$username_op' and password_op = '$password_op'");
  if(mysqli_num_rows($query) > 0){
   echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); </script>";

   $r = mysqli_fetch_array($query);
   $_SESSION['username'] = $r['username'];

   header("location:index_operator.php");
  }else{
echo "<script>alert('Password atau Username Salah');history.go(-1); </script>";
     }


 }




 ?>
