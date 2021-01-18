<?php include('./header.php') ?>

<body>
    <div class="content">
        <div class="login">
            <h1>login</h1>
            <form action="./proseslogin.php" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name='submit'>Login</button>
            </form>
        </div>
    </div>
</body>

<?php include('./footer.php') ?>