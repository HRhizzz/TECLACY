<?php
include 'function.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan NIM
    $sql = "SELECT * FROM `user-account` WHERE `NIM`='$nim'";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $row['pass'])) {
            // Password cocok, lakukan tindakan yang sesuai, seperti memberikan sesi atau mengizinkan akses ke halaman tertentu
            session_start();
            $_SESSION['user_id'] = $row['ID'];
            header("Location: home.php"); // Ganti dengan halaman yang sesuai setelah login
            exit();
        } else {
            // Password tidak cocok, lakukan penanganan kesalahan di sini
            $error = TRUE;
        }
    } else {
        // NIM tidak ditemukan, lakukan penanganan kesalahan di sini
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
    <link rel="stylesheet" href="assets/signin.css" />
    <!-- Script Utama -->
    <script src="js/script.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@500;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
<body>
  <!-- Tingkat 0 dari z-axis -->
  <div class="login-logo">
    <p>TECLACY</p>
  </div>
  <!-- Tingkat 1 dari z-axis -->
  <?php if(isset($error)) :?> <p style= "color :red; font-style :italic;"> username/password salah</p> 
    <?php endif; ?>
  <div class="posisi-wrapper">
    <div class="login-page-wrapper">
    <form action="process_login.php" method="POST">
  <h2>Masuk</h2>
  <h3>Masukkan akun anda</h3>
  <div class="input-field">
    <input type="text" name="nim" required>
    <label>NIM</label>
  </div>
  <div class="input-field">
    <input type="password" name="password" required>
    <label>Password</label>
  </div>
  <br />
  <button type="submit">Login</button>
  <div class="login">
    <p>Belum punya akun?<a href="signup.html">sign up</a></p>
  </div>
</form>
    </div>
  </div>

</body>
  </html>