<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Halaman login</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>

<div class="container">
        <form action="utama.php" method="POST" class="login-username" align="center">
            <p class="login-text" style="font-size: 40px; font-weight: 400;">Selamat Datang Kawan</p>
<br>
	    <div class="input-group">
                <input type="username" placeholder="username" name="username" value="<?php echo $username; ?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
<br>
<br>
            <div class="input-group" align = right >
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
