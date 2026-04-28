<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page - Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
  <header>
  </header>

  <main>
    <div class="login-container">
      <div class="header-login">
        <h1>Selamat Datang kembali!</h1>
        <p>Kami merindukanmu! Silakan masukkan detail Anda..</p>
      </div>
      <form method="POST" action="/doorway/includes/proses_login.php">
        <div class="input-group">
          <input
          type="text"
          id="username"
          name="username"
          placeholder=" "
          autocomplete="username"
          required
          >
          <label for="username">Username</label>
        </div>
        <div class="input-group">
          <input
          type="password"
          id="password"
          name="password"
          placeholder=" "
          autocomplete="current-password"
          required
          >
          <label for="password">Password</label>
        </div>
        <div class="form-options">
          <div class="remember-options">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Ingat saya</label>
          </div>
          <a href="#">Lupa password</a>
        </div>
        <button type="submit">Login</button>
      </form>
      <p>Belum punya akun? <a href="signup.php" class="signup-btn">sign up</a></p>
    </div>
  </main>
</body>
</html>