<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page - Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <main>
    <section class="login-container">
      <header class="header-login">
        <h1>Selamat Datang Kembali!</h1>
        <p>Kami merindukanmu! Silakan masukkan detail Anda..</p>
      </header>

      <form method="POST" action="/../includes/proses_login.php">
        <div class="input-group">
          <input type="text" id="username" name="username"
                placeholder=" " autocomplete="username" required>
          <label for="username">Username</label>
        </div>

        <div class="input-group">
          <input type="password" id="password" name="password"
                placeholder=" " autocomplete="current-password" required>
          <label for="password">Password</label>
          <button type="button" id="toggle-btn" aria-label="Tampilkan password">
            <i class="fa-regular fa-eye" id="toggle-icon" aria-hidden="true"></i>
          </button>
        </div>

        <div class="form-options">
          <div class="remember-options">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Ingat saya</label>
          </div>
          <a href="#">Lupa password?</a>
        </div>

        <button type="submit" class="submit">Masuk</button>
      </form>

      <p>Belum punya akun? <a href="signup.php" class="signup-btn">Daftar</a></p>
    </section>
  </main>

  <script src="/assets/js/passwordToggle.js"></script>
</body>
</html>