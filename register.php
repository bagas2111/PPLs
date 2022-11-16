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
    <div class="konten-regist">
        <img src="image/logo.png" alt="logo">
        <form action="register.php" method="post">
            <label for="email1">Email</label>
            <input type="text" name="email1" id="email1" value="<?php echo $email; ?>">
            <label for="akun1">Account name</label>
            <input type="text" name="akun1" id="akun1" value="<?php echo $username; ?>">
            <label for="phone">password</label>
            <input type="password" name="password_1" id="password_1">
            <label for="pass1">Confirm Password</label>
            <input type="password" name="password_2" id="password_2">
            <input type="submit" name="kirim2" id="kirim2" value="kirim">
        </form>
        
    </div>
</body>
</html>