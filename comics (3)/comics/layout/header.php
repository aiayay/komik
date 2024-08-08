<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <title>EnchantIndo Comics - Komik Kebudayaan Indonesia</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <img src="assets/images/logo.png" alt="logo" />
              </a>
              <!-- ***** Logo End ***** -->

              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="?page=home/index" class="active">Home</a></li>
                <li><a href="?page=home/about">About Us</a></li>
                <li><a href="?page=paket/home/index">Package</a></li>
                <?php
									 if (isset($_SESSION['id_user'])):
								?>
                
                <li><a href="?page=library/index">My Library</a></li>
                <li>
                  <a href="logout.php">Logout<img src="admin/assets/images/user/<?= $_SESSION['foto'] ?>" alt="User-Profile-Image"></a>
                </li>
                <?php else: ?>
                  <!-- <li><a href="?page=admin/login/index">My Library</a></li> -->
                  <li>
                  <a href="?page=admin/login/index">Login<img src="admin/assets/images/profile-header.jpg" alt="" /></a>
                </li>
                <?php endif;?>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->