<?php
require_once("koneksi.php");
include('./header.php');
session_start();
?>
<div class="content">
    <div class="input">
        <h2>Input Peserta</h2>
        <form action="./insert.php" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="No Peserta" name="no_peserta" required>
            <input type="text" placeholder="Nama Lengkap" name="nama" required>
            <input type="text" placeholder="Bio" name="bio" required>
            <div class="fotoprofil">
                <input type="file" id="profile_input" value="Foto Profile" name="gambar" required>  
                <img id="profile" src="#" alt="foto profil" width = "35" height ="35" style ="position: absolute; margin-left: 10px;">
            </div>
            <button type="submit" name='submit'>Input</button>
            <a href="./index.php" style="margin-top:5px; text-decoration: none;"> << Home</a>
        </form>
    </div>
</div>
<?php include("./footer.php");?>