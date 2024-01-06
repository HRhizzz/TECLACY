<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>TECLACY</title>

  <!-- CSS Utama -->
  <link rel="stylesheet" href="assets/home.css" />
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
        <li class="profile-signup-button" id="signUp">
          <a href="signup.php" onclick="toggleProfile()">Sign Up</a>
        </li>
        <li class="profile-signin-button" id="signIn">
          <a href="signin.php" onclick="toggleProfile()">Sign In</a>
        </li>
        <li class="profile-button" id="profile" style="display: none">
          <a href="#">Profil</a>
        </li>
      </ul>
    </div>
  </header>
  <div class="body-container">
    <aside>
      <div class="sidebox">
        <div class="sidebar">
          <ul>
            <li class="search-sidebar" id="search-all">
              <a href="#">Search</a>
            </li>
            <li class="destiny-flow" id="Destiny-Flow">
              <a href="#">Destiny Flow</a>
            </li>
            <li class="study-flow" id="Study-Flow">
              <a href="#">Study Flow</a>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <main>
      <div id="landing-page" class="landing-page">
        <div class="box-bg-landing-page">
          <div class="text-landing-page">
            <div class="welcome-text-landing-page">
              <p>Selamat datang di Teclacy!</p>
            </div>
            <div class="description-text-landing-page">
              <p>
                Tempat yang memandu langkah Anda menuju karir yang cerah di
                dunia Teknologi Informasi. Temukan arah dan panduan yang tepat
                untuk mengembangkan potensi Anda dalam industri yang terus
                berkembang ini. Mari menjelajahi peluang, mendapatkan wawasan,
                dan meraih kesuksesan dalam karir TI yang sesuai dengan minat
                dan keahlian Anda.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="studyflow-landing-page">
        <div class="box-studyflow-landing-page">
          <div class="gambar-studyflow-landing-page"></div>
          <div class="studyflow-text-landing-page">
            <div class="welcome-studyflow-text-landing-page">
              <p>Study Flow: Mengalir Bersama Minat Anda</p>
            </div>
            <div class="description-studyflow-text-landing-page">
              <p>
                Dengan fitur unggulan kami, "Study Flow," Anda akan menemukan
                panduan belajar yang sesuai dengan minat Anda. Bagi kami,
                setiap minat adalah kunci untuk membuka potensi Anda dalam
                bidang IT. Melalui tag minat yang tersedia, Anda akan
                diarahkan ke alur belajar yang cocok dengan minat Anda,
                menjadikan proses belajar lebih menarik dan relevan. Temukan
                koneksi antara minat Anda dengan beragam bidang IT di
                sampingnya.
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <footer>
    <p>Teclacy IT for FUTURE</p>
  </footer>
</body>

</html>