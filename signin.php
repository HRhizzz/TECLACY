<?php
session_start();if( isset($_SESSION["admin"])) {
    header("Location: admin.php");
    exit;
} else if ( isset($_SESSION["user"])) {
    header("Location: signin.php");
    exit;
}

include "query/functions.php";

if( isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];


    $admin = mysqli_query($conn, "SELECT email FROM user");
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    
    // cek email
    if( mysqli_num_rows($admin) === 1 ) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            $_SESSION["user"] = "$email";

            header("Location: home.php");
            exit;
            } 
    }

    $error = true;


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
        <h2>Masuk</h2>
        <h3>Masukkan akun anda</h3>
        <div class="input-field">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>
        <div class="input-field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        </br>
        <button type="submit" name="submit">Login</button>
        <div class="login">
          <p>Belum punya akun?<a href="signup.php">sign up</a></p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>