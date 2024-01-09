<?php
session_start();
if( isset($_SESSION["admin"])) {
    header("Location: admin.php");
    exit;
} else if ( isset($_SESSION["user"])) {
    header("Location: signin.php");
    exit;
}
include 'query/functions.php';

if( isset($_POST["submit"])) {
    if( registrasi($_POST) > 0 ) {
    echo "<script>
        alert('User Baru Berhasil Ditambahkan');
        document.location.href = 'signin.php';
        </script>
    ";
    } else {
        echo mysqli_error($conn);
    }
}


?>
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
      <form action="" method="post">
        <h2>Mari Bergabung</h2>
        <h3>Masukkan data diri anda</h3>
        <div class="input-field">
          <input type="text" name="nama" required>
          <label>Nama Lengkap</label>
        </div>
        <div class="input-field">
          <input type="text" name="nim" required>
          <label>NIM</label>
        </div>
        <div class="input-field">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>
        <div class="input-field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="input-field">
          <input type="password" name="password2" required>
          <label>Konfirmasi Password</label>
        </div>
        </br>
        <button type="submit" name="submit">Daftar</button>
        <div class="login">
          <p>Sudah punya akun?<a href="signin.php">sign in</a></p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>