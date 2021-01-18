<?php
require_once("koneksi.php");
include('./header.php');
session_start();
@ob_start();
?>
<body>
    <section class="section1">
        <div class="container" style="text-align: center;">
            <div class="greatings">
                <?php
                    if(isset($_SESSION['user_name'])){
                        echo "<h2>Welcome, $_SESSION[name]</h2>
                            <p>Pilih menu list untuk melihat dafar pengguna</p>
                            <div class='button_option_post'>
                                <button name='list_button' onclick='list_peserta()'>List Peserta</button>
                                <button name='input_bio_button' onclick='input_peserta()'>Input Data Peserta</button>
                                <button name='logout_button' onclick='logout()'>Logout</button>
                            </div>";   
                    }else{
                        echo "<h2>Selamat Datang</h2>
                            <p>Silahkan memilih login jika anda telah memiliki akun</p>
                            <p>jika anda belum memiliki akun, silahkan registrasi terlebih dahulu</p>
                            <div class='button_option_pre'>
                                <button name='login_button' onclick='login()'>Login</button>
                                <button name='register_button' onclick='register()'>Register</button>
                            </div>";   
                    }?>  
            </div>
        </div>        
    </section>
</body>
<?php include('./footer.php') ?>