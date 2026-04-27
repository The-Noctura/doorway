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
      <h1>Selamat Datang kembali!</h1>
      <p>Kami merindukanmu! Silakan masukkan detail Anda..</p>
      <form method="POST" action="/doorway/includes/proses_login.php">
        <div class="input-group">
          <label for="username">Username</label>
          <input
              type="text"
              id="username"
              name="username"
              placeholder=" "
              autocomplete="username"
              required
          >
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input
              type="password"
              id="password"
              name="password"
              placeholder=" "
              autocomplete="current-password"
             required
          >
          <div class="form-options">
            <div class="remember-options">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">Ingat saya</label>
            </div>
            <a href="#">Lupa password</a>
          </div>
        </div>
        <button type="submit">Login</button>
      </form>
      <p>Belum punya akun? <a href="signup.php" class="signup-btn">sign up</a></p>
    </div>
  </main>
</body>
</html>