<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>TECLACY</title>

  <!-- CSS Utama -->
  <link rel="stylesheet" href="assets/signup.css" />
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
        <h2>Mari Bergabung</h2>
        <h3>Masukkan data diri anda</h3>
        <div class="input-field">
          <input type="text" required>
          <label>Nama Lengkap</label>
        </div>
        <div class="input-field">
          <input type="text" required>
          <label>NIM</label>
        </div>
        <div class="input-field">
          <input type="email" required>
          <label>Email</label>
        </div>
        <div class="input-field">
          <input type="password" required>
          <label>Password</label>
        </div>
        <div class="input-field">
          <input type="password" required>
          <label>Konfirmasi Password</label>
        </div>
        </br>
        <button type="submit" onclick="redirectToSignIn()">Daftar</button>
        <div class="login">
          <p>Sudah punya akun?<a href="signin.php">sign in</a></p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>