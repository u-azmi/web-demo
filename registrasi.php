<?php include('./header.php'); ?>

<div class="content">
    <div class="input">
        <h2>Registrasi</h2>
        <form action="./insert.php" method="POST">
            <input type="text" placeholder="Nama Lengkap" name="nama">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="Emai" name="email">
            <input type="Password" placeholder="Password" name="password">
            <button type="submit" name='submit'>Register</button>
            <a href="login.php" style="margin-top:5px; text-decoration: none;">Sign in instead</a>
        </form>
    </div>
</div>

<?php include('./footer.php') ?>