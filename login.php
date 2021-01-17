
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" href="img/logoMin.png">
    </head>
    <body>
        <div class="container" id="colums">
            <a><img src="img/coba2.jpeg" alt="VolunterkuLogo"></a>
            <h2 class="page-heading">
                <span class="page-heading-title2">Login</span>
            </h2>
            <div class="page-content">
                <div class="row">
                    <form method = "POST" action = "proseslogin.php">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" name ="email" required>
                            </div>
                            <div class="form-group">
                                <input type="Password" placeholder="Password" class="form-control" name="password" required>
                            </div>
                            <div class="navigator">
                                <a href="registrasi.php"><button class="button2" type="button">Registration?</button></a>
                                <button class="button1" type="submit" name="login">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>