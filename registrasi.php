<?php
require_once("koneksi.php");
include('./header.php');

if(isset($_POST['username'])){
   $username = filter_input(INPUT_POST, 'username');
   $nama = filter_input(INPUT_POST, 'nama');
   $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, nama, email, password) 
            VALUES (:username, :nama, :email, :password)";

    $stmt = $db->prepare($sql);

    $params = array(
        ":username" => $username, 
        ":nama" => $nama, 
        ":email" => $email,  
        ":password" => $password
    ); 

    $saved = $stmt->execute($params);
    echo "<script> alert('Registrasi Berhasil. Silahkan Login'); </script>";
    if($saved) {
        header("Location: login.php");
    }
}
?>

<body>
    <div class="container" id="colums">
        <a><img src="img/logo2.png" alt="VolunterkuLogo"></a>
        <h2 class="page-heading">
            <span class="page-heading-title2">Create Your Account</span>
        </h2>
        <div class="page-content">
            <div class="row">
                <form method = "POST" >
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type = "text" placeholder="Nama Lengkap" class="form-control" name = "nama"required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Username" class = "form-control" name = "username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control" name ="email" required>
                        </div>
                        <div class="form-group">
                            <input type="Password" placeholder="Password" class="form-control" name="password" required>
                        </div>
                        <div class="navigator">
                            <a href="login.php"><button class="button2" type="button" name="login">Sign in instead</button></a>
                            <button class="button1" type="submit" name="register"><i class="fa fa-user">Create Account</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include('./footer.php') ?>