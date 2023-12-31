<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TelsCup - SMK Telekomunikasi Telesandi Bekasi</title>
  <link rel="preload" as="image" href="TelsCup_Logo.png">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../TelsCup_Logo.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="header-top">
      <div class="container">

        <div class="countdown-text">
          Will Start On Date! <span class="span skewBg">43</span> Days
        </div>

        <div class="social-wrapper">

          <p class="social-title">Follow us on :</p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="header-bottom skewBg" data-header>
      <div class="container">

        <a href="#" class="logo">TelsCup</a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="index.php" class="navbar-link skewBg" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="./team" class="navbar-link skewBg" data-nav-link>Team</a>
            </li>

            <li class="navbar-item">
              <a href="./live" class="navbar-link skewBg" data-nav-link>Livestream</a>
            </li>

            <li class="navbar-item">
              <a href="./article" class="navbar-link skewBg" data-nav-link>Article</a>
            </li>

          </ul>
        </nav>

        <div class="header-actions">

          <button class="search-btn" aria-label="open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
            <ion-icon name="menu-outline" class="menu"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
          </button>

        </div>

      </div>
    </div>

  </header>





  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-box>

    <div class="input-wrapper">
      <input type="search" name="search" aria-label="search" placeholder="Search here..." class="search-field">

      <button class="search-submit" aria-label="submit search" data-search-toggler>
        <ion-icon name="search-outline"></ion-icon>
      </button>

      <button class="search-close" aria-label="close search" data-search-toggler></button>
    </div>

  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home"
        style="background-image: url('../assets/images/BG_1.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Settings</p>

            <h1 class="h1 hero-title">
              Tels <span class="span">Cup</span>
            </h1>

            <p class="hero-text">
              SMK Telekomunikasi Telesandi Bekasi.
            </p>

          </div>

          <figure class="hero-banner img-holder" style="--width: 700; --height: 700;">
            <img src="../assets/images/TelsCup_Logo.png" width="700" height="700" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>




    </article>
  </main>





  <!-- 
    - #BACK TO TOP2
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="../assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>