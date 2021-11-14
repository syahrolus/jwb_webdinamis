<?php require_once('../controller/config.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Gp Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/assets2/img/favicon.png" rel="icon">
  <link href="../assets/assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><img style="margin-right: 10px; margin-bottom: 5px;" src="../assets/assets2/img/gb_ku/logo.png" alt=""><a href="index.html">QudsDev<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="../assets/assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li class="dropdown"><a href="index.html#services"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.html#eventTraining">Training</a></li>
              <li><a href="index.html#eventMentoring">Mentoring</a></li>
              <li><a href="index.html#eventWebinar">Webinar IT</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://wetofu.github.io/">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Buku/Ebook</a></li>
              <li class="dropdown"><a href="#"><span>Merchandise</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Kaos</a></li>
                  <li><a href="#">Topi</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div>
        <?php
        if ($_SESSION["login"] == "true") { ?>
          <a href="dashboardUser/dashboard.php" class="get-started-btn scrollto">Dashboard</a>
        <?php } else { ?>
          <a href="login.php" class="get-started-btn scrollto">Login</a>
        <?php } ?>
        <!-- <a href="#about" class="get-started-btn scrollto">Register</a> -->
      </div>


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Events</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">

      <div class="container">
        <div class="row">
          <?php
          $kategori = $_GET['kategori'];
          $query = "SELECT * FROM Events JOIN Kategori_events ON Events.kategori=Kategori_events.id WHERE Kategori_events.nama_kategori='$kategori' ORDER BY id_event";
          $i = 0;
          // id_admin, nama_admin, email, alamat, tgl_lahir, gender
          if ($query = mysqli_query($koneksi, $query)) {
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <div class="col-sm-3 mt-3">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../assets/img/profile-img.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?= $data['nama_event']; ?></h5>
                    <p>Harga : Rp. <?= $data['harga'] ?> </p>
                    <p>Deskripsi : <?= $data['deskripsi'] ?> </p>
                    <a class="btn btn-success mt-4" href="detail-events.php?id=<?= $data['id_event'] ?>" role="button" style="margin-left: 1%; width: 90%;">Baca Selengkapnya <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div>
          <?php
            }
          } else {
            echo mysqli_error($koneksi);
          }
          ?>
        </div>
      </div>

    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Gp<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/assets2/vendor/aos/aos.js"></script>
  <script src="../assets/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/assets2/vendor/php-email-form/validate.js"></script>
  <script src="../assets/assets2/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/assets2/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/assets2/js/main.js"></script>

</body>

</html>