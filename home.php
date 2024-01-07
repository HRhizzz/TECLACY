<?php

?>

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
          <div><i data-feather="circle"></i></div><a href="#">Profil</a>
        </li>
      </ul>
    </div>
  </header>
  <div class="body-container">
    <aside>
      <div class="sidebar">
        <ul>
          <li class="search-sidebar" id="search-all">
            <a href="#"> Search</button>
          </li>
          <li class="destiny-flow" id="Destiny-Flow">
            <a href="#"> Destiny Flow</a></button>
          </li>
          <li class="study-flow" id="Study-Flow">
            <a href="#">Study Flow</a></button>
          </li>
        </ul>
      </div>
    </aside>
    <main>
      <div id="landing-page" class="landing-page">
        <div class="hero-bg">
          <div class=" hero-welcome">
            <p>Selamat datang di Teclacy!</p>
          </div>
          <div class="hero-description">
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
      <div class="fitur-landing-page">
        <div class="gambar-fitur gambar-studyflow"></div>
        <div class="studyflow-text">
          <div class="studyflow-welcome">
            <p>Study Flow: Mengalir Bersama Minat Anda</p>
          </div>
          <div class="studyflow-description">
            <p>
              Dengan fitur unggulan kami, "Study Flow," Anda akan menemukan panduan belajar yang sesuai dengan minat
              Anda. Bagi kami, setiap minat adalah kunci untuk membuka potensi Anda dalam bidang IT. Melalui tag minat
              yang tersedia, Anda akan diarahkan ke alur belajar yang cocok dengan minat Anda, menjadikan proses belajar
              lebih menarik dan relevan. Temukan koneksi antara minat Anda dengan beragam bidang IT di sampingnya.
            </p>
          </div>
        </div>
      </div>
      <div class="fitur-landing-page">
        <div class="destinyflow-text">
          <div class="destinyflow-welcome">
            <p>Destiny Flow: Takdir Pendidikan Anda</p>
          </div>
          <div class="destinyflow-description">
            <p>
              Tak hanya itu, dengan "Destiny Flow," kami hadirkan solusi pencarian yang efisien. Cukup masukkan tag
              minat yang Anda miliki, dan kami akan menyajikan berbagai pilihan "Study Flow" yang telah difilter sesuai
              minat yang Anda inputkan. Ini adalah pintu untuk menggali lebih dalam dan menemukan jalur pendidikan ideal
              Anda dalam dunia IT.
            </p>
          </div>
        </div>
        <div class="gambar-fitur gambar-destinyflow"></div>
      </div>
    </main>
  </div>
  <footer>
    <p>Teclacy IT for FUTURE</p>
  </footer>
  <script>
  feather.replace();
  </script>
</body>

</html>