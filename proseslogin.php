<?php
@ob_start();
require_once("koneksi.php");

 $email = filter_input(INPUT_POST, 'email');
 $pass  = filter_input(INPUT_POST, 'password');

 $login = "SELECT * FROM users WHERE email=:email";
 $stmt = $db->prepare($login);

 $params = array(
   ":email" => $email
 );

 $stmt->execute($params);
 $user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user){
  if(password_verify($pass, $user["password"])){
    session_start();
    $_SESSION['user_id'] = $user['no_identitas'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_password'] = $user['password']; 
    $_SESSION['user_name'] = $user['nama'];
    $_SESSION['user_akun'] = $user['tipe_akun'];

    if ($user['tipe_akun'] == 'Pengguna Biasa') {
      echo "<script language=Javascript>
      javascript:document.location='/WebVolunteerku/user_profile.php';
    </script>";
    }
    else if ($user['tipe_akun'] == 'Admin') {
    echo "<script la nguage=Javascript>
      javascript:document.location='/WebVolunteerku/admin.php';
    </script>";
    }
    else{
    echo "<script language=Javascript>
      javascript:document.location='/WebVolunteerku/login.php';
    </script>";
    }
  }
  else{
    echo "<script language=Javascript>
      javascript:document.location='/WebVolunteerku/login.php';
    </script>";
  }
}
else{
  echo "<script language=Javascript>
    javascript:document.location='/WebVolunteerku/login.php';
  </script>";
}
?>