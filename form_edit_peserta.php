<?php
require_once("koneksi.php");
include('./header.php');
session_start();

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM peserta WHERE id='$id'");
?>

<div class="content">
    <div class="input">
        <?php
            while($peserta = mysqli_fetch_array($query)){
        ?>
        <h2>Ubah Data Peserta - <?=$peserta['no_peserta']?></h2>
        <form action="update.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="NO" name="no_peserta" value='<?= $peserta['no_peserta']; ?>'readonly>
            <input type="text" placeholder="Nama Lengkap" name="nama" value='<?= $peserta['nama']; ?>' required>
            <input type="text" placeholder="Bio" name="bio" value='<?= $peserta['bio']; ?>' required>
            <div class="fotoprofil">
                <input type="file" id='profile_input' placeholder="Foto Profil" name="gambar">
                <img id="profile" src="./img/<?= $peserta['gambar']; ?>" alt="foto profil" width="35" height="35" style="position:absolute; margin-left:10px; ">
            </div>
            <button type="submit" name='submit'>Edit</button>
            <a href="./index.php" style="margin-top:5px; text-decoration: none;"> << Home</a>
        </form> <?php }?>
    </div>
</div>
<?php include('./footer.php');?>