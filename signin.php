<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>TECLACY</title>

  <!-- CSS Utama -->
  <link rel="stylesheet" href="assets/signin.css" />
  <!-- Script Utama -->
  <script src="js/script.js"></script>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@500;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- Tingkat 0 dari z-axis -->
  <div class="login-logo">
    <p>TECLACY</p>
  </div>
  <!-- Tingkat 1 dari z-axis -->
  <div class="posisi-wrapper">
    <div class="login-page-wrapper">
      <form action="#">
        <h2>Masuk</h2>
        <h3>Masukkan akun anda</h3>
        <div class="input-field">
          <input type="text" required>
          <label>NIM</label>
        </div>
        <div class="input-field">
          <input type="password" required>
          <label>Password</label>
        </div>
        </br>
        <button type="submit" onclick="redirectToHome()">Login</button>
        <div class="login">
          <p>Belum punya akun?<a href="signup.php">sign up</a></p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>