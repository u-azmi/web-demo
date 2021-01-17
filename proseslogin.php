<?php
@ob_start();
require_once("koneksi.php");

 $username = filter_input(INPUT_POST, 'username');
 $pass  = filter_input(INPUT_POST, 'password');

 $login = "SELECT * FROM user WHERE username=:username";
 $stmt = $db->prepare($login);

 $params = array(
   ":username" => $username
 );

 $stmt->execute($params);
 $user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user){
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