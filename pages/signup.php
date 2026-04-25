<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp - Page</title>
</head>
<body>
    <form method="POST" action="/doorway/includes/proses_signup.php">
        <input type="text" name ="username" placeholder="Username"><br>
        <input type="email" name = "email" placeholder="Email" ><br>
        <input type="password" name = "password" placeholder="Password"><br>
        <input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password"><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>