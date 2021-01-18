<?php
@ob_start();
require_once("koneksi.php");

$username = mysqli_real_escape_string($conn, $_POST['username']);
$pass  = mysqli_real_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
$find = mysqli_num_rows($query);
$user = mysqli_fetch_array($query);
 
if ($find > 0){
  if (password_verify($pass, $user['password'])){
    session_start();
    $_SESSION['email'] = $user['email'];
    $_SESSION['user_name'] = $user['username'];
    $_SESSION['user_password'] = $user['password']; 
    $_SESSION['name'] = $user['nama'];
    echo "<script language=Javascript> alert('Login Berhasil')
    javascript:document.location='./index.php';
    </script>";
  } else {
      echo "<script language=Javascript> alert('Password Salah')
        javascript:document.location='./login.php';
      </script>";
    }
} else {
  echo "<script language=Javascript> alert('Username Salah')
  javascript:document.location='./login.php';
  </script>";
}
?>