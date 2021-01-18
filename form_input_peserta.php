<?php
require_once("koneksi.php");
include('./header.php');
session_start();
?>

<body>
    <div class="content">
        <div class="input">
            <h2>Input Peserta</h2>
            <form action="./insert.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="No Peserta" name="no_peserta">
                <input type="text" placeholder="Nama Lengkap" name="nama">
                <input type="text" placeholder="Bio" name="bio">
                <input type="file" value="Foto Profile" name="gambar">
                <button type="submit" name='submit'>Input</button>
            </form>
        </div>
    </div>
</body>
</html>