<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
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
      <h1>Login</h1>
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
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  </main>

</body>
</html>