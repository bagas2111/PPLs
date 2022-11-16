<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konten-login">
        <?php echo display_error(); ?>
        <img src="image/logo.png" alt="logo">
        <form action="login.php" method="post">
            <label for="email">Email or account name</label>
            <input type="text" name="username">
            <label for="pass">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="kirim" id="kirim" value="kirim">
        </form>
        <a href="register.php">Dont have an account?<br>Register</a>
    </div>
</body>
</html>