<? session_start();
if(!isset($_SESSION["user"]))
header("location: ../signin.php");

$kategori="";
$katakunci="";
// cek apakah tombol search sudah ditekan atau belum
if (isset($_POST['search'])) {
$kategori = $_POST['minat'];
$katakunci = $_POST['katakunci'];

}

include "../query/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>TECLACY</title>

  <!-- CSS Utama -->
  <link rel="stylesheet" href="assets/allfile.css" />
  <!-- Script Utama -->
  <script src="js/script.js"></script>

  <!-- Feather icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@500;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <header class="navbar-container">
    <!-- font nama logo Lexend Exa -->
    <div class="logo">
      <p id="logo-teclacy">TECLACY</p>
    </div>
    <nav class="nav-list">
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="#">BERITA</a></li>
        <li><a href="#">PROFESI IT</a></li>
        <li><a href="#">BOOTCAMP</a></li>
        <li><a href="#">PROFESI IT</a></li>
      </ul>
    </nav>
    <div class="profile-sign">
      <ul>
        <a href="signup.php" onclick="toggleProfile()">
          <li class="profile-signup-button" id="signUp">
            Sign Up
          </li>
        </a>
        <a href="signin.php" onclick="toggleProfile()">
          <li class="profile-signin-button" id="signIn">
            Sign In
          </li>
        </a>
        <a href="#">
          <li class="profile-button" id="profile" style="display: none">
            <i data-feather="user"></i>
            <div class="username">
              <p>Haris Fadhilah</p>
              <p>211512002</p>
            </div>
          </li>
        </a>
      </ul>
    </div>
  </header>
  <div class="body-container">
    <aside>
      <div class="sidebar">
        <ul>
          <a href="#">
            <li class="search-sidebar" id="search-all">
              Search
            </li>
          </a>
          <a href="#">
            <li class="destiny-flow" id="Destiny-Flow">
              Destiny Flow
            </li>
          </a>
          <a href="#">
            <li class="study-flow" id="Study-Flow">
              Study Flow
            </li>
          </a>
        </ul>
      </div>
    </aside>
    <main id="destinyflow-page">
      <div class="input-container">
        <input type="search" class="destinyflow-search" placeholder="Masukan minatmu...">
        <a href="">
          <p>cari</p>
          <i data-feather="search"></i>
        </a>
      </div>

    </main>
    <script>
    feather.replace();
    </script>
</body>

</html>