<?php
include 'function.php';

// $akun = query("SELECT * FROM akun");
//ambil data dari database dengan tabel akun


if ( !$result){
  echo mysqli_error($koneksi);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['password2'];

    // Lakukan validasi password
    if ($password != $konfirmasi_password) {
        // Password tidak cocok, lakukan penanganan kesalahan di sini
    } else {
        // Hash password sebelum menyimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO `akun` (`nama`, `nim`, `email`, `password`) VALUES ('$nama_lengkap', '$nim', '$email', '$hashed_password')";

        if ($koneksi->query($sql) === TRUE) {
            // Berhasil disimpan ke database
            // Lakukan tindakan yang sesuai, misalnya, redirect ke halaman lain
            header("Location: signin.php");
            exit();
        } else {
            // Gagal menyimpan ke database, lakukan penanganan kesalahan di sini
        }
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
      rel="stylesheet"
    />
  </head>
<body>
  <!-- Tingkat 0 dari z-axis -->
  <div class="login-logo">
    <p>TECLACY</p>
  </div>
  <!-- Tingkat 1 dari z-axis -->
  <div class="posisi-wrapper">
    <div class="login-page-wrapper">
    <form action="home.php" method="POST">
        <h2>Mari Bergabung</h2>
        <h3>Masukkan data diri anda</h3>
        
      <div class="input-field" >
          <label for="nama_lengkap">Nama Lengkap</label> 
          <input type="text" name="nama_lengkap" id="nama_lengkap" required>
        
      </div>
      <div class="input-field">
          <label for="nim">NIM</label>
          <input type="text" name="nim" id="nim" required>
        
      </div>
      <div class="input-field"> 
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
      </div>
      <div class="input-field">
          <label for="password">Password</label> 
          <input type="password" name="password" id="password2" required>
          
      </div>
      <div class="input-field">
      <label for="password2">Konfirmasi Password</label> 
      <input type="password" name="password2" id="password2" required>
       
      </div>
      </br>
        <button type="submit" onclick="redirectToSignIn()">Daftar</button>
        <div class="login">
          <p>Sudah punya akun?<a href="signin.html">sign in</a></p>
        </div>
</form>

    </div>
  </div>

</body>
  </html>