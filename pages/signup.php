<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp - Page</title>
    <link rel="stylesheet" href="../assets/css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <main class="signup-container">
    <header class="header-signup">
      <h1>Buat Akun Baru!</h1>
      <p>Bergabunglah bersama kami! Silakan lengkapi detail Anda..</p>
    </header>

    <form method="POST" action="/../includes/proses_signup.php">
      <div class="input-group">
        <input type="text" name="username" id="username"
              placeholder=" " autocomplete="username" required>
        <label for="username">Username</label>
      </div>

      <div class="input-group">
        <input type="email" name="email" id="email"
              placeholder=" " autocomplete="email" required>
        <label for="email">Email</label>
      </div>

      <div class="input-group">
        <input type="password" name="password" id="password"
              placeholder=" " autocomplete="new-password" required>
        <label for="password">Password</label>
        <button type="button" id="toggle-btn" aria-label="Tampilkan password">
          <i class="fa-regular fa-eye" id="toggle-icon"></i>
        </button>
      </div>

      <div class="input-group">
        <input type="password" name="konfirmasi_password" id="konfirmasi_password"
              placeholder=" " autocomplete="new-password" required>
        <label for="konfirmasi_password">Konfirmasi Password</label>
      </div>

      <button type="submit" class="submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="login.php" class="login-btn">Masuk</a></p>
  </main>
    <script src="/assets/js/passwordToggle.js"></script>
</body>
</html>