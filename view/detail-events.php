<?php

require_once('../controller/config.php');

session_start();

if (!isset($_GET['id'])) {
  header('location: index.php');
}

// $query = "SELECT * FROM Events JOIN Kategori_events ON Events.kategori=Kategori_events.id JOIN Bidang ON Events.bidang=Bidang.id_bidang JOIN Instruktur ON Events.instruktur=Instruktur.id_instruktur";
$id = $_GET['id'];
$query = "SELECT * FROM Events JOIN Instruktur ON Events.instruktur=Instruktur.id_instruktur JOIN Bidang ON Instruktur.bidang=Bidang.id_bidang WHERE id_event='$id'";
$i = 0;
// id_admin, nama_admin, email, alamat, tgl_lahir, gender
if ($query = mysqli_query($koneksi, $query)) {
  $row = $query->fetch_assoc();
  // print_r($row);
  // die;
} else {
  echo mysqli_error($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Events</title>
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

      <h1 class="logo me-auto me-lg-0"><img style="margin-right: 10px; margin-bottom: 5px;" src="../assets/assets2/img/gb_ku/logo.png" alt=""><a href="index.php">QudsDev<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="../assets/assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li class="dropdown"><a href="index.php#services"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php#eventTraining">Training</a></li>
              <li><a href="index.php#eventMentoring">Mentoring</a></li>
              <li><a href="index.php#eventWebinar">Webinar IT</a></li>

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
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div>
        <?php
        if (isset($_SESSION["login"])) {
          if ($_SESSION["level"] == "admin") { ?>
            <a href="dashboardAdmin/dashboard.php" class="get-started-btn scrollto">Dashboard</a>
          <?php } else {
          ?>
            <a href="dashboardUser/dashboard.php" class="get-started-btn scrollto">Dashboard</a>
          <?php }
        } else { ?>
          <a href="login.php" class="get-started-btn scrollto">Login</a>
        <?php } ?>
        <!-- <a href="#about" class="get-started-btn scrollto">Register</a> -->
      </div>


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Events</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Event Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8 bg-light">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="">
                  <img src="../assets/assets2/img/events/logo-codeigniter.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?= $row['nama_event'] ?></h3>
              <ul>
                <li><strong>Bidang</strong>: <?= $row['nama_bidang'] ?></li>
                <li><strong>Instruktur</strong>: <?= $row['nama_instruktur'] ?></li>
                <li><strong>Harga</strong>: Rp.<?= $row['harga'] ?></li>

              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Materi yang akan di dapatkan</h2>
              <?= $row['deskripsi'] ?>
            </div>
            <p>
              <?php
              if (isset($_SESSION["login"])) {
              if ($_SESSION["login"] == "true" && $_SESSION["level"] == "peserta") { ?>
                <a class="btn btn-success mt-4" href="../controller/peserta_keranjang.php?id_event=<?= $row['id_event'] ?>" role="button" style="margin-left: 1%; width: 90%;">Keranjang<i class="bi bi-chevron-right"></i></a>
              <?php
                  } else { ?>
<a class="btn btn-success mt-4" href="/jwb_webdinamis/view/login.php" role="button" style="margin-left: 1%; width: 90%;">Keranjang<i class="bi bi-chevron-right"></i></a>
                  <?php
                  }
                }
              else { ?>
                <a class="btn btn-success mt-4" href="/jwb_webdinamis/view/login.php" role="button" style="margin-left: 1%; width: 90%;">Keranjang<i class="bi bi-chevron-right"></i></a>
              <?php }
              ?>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>QudsDev<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, IDN<br><br>
                <strong>Phone:</strong> +628 5589 55488 55<br>
                <strong>Email:</strong> qudspedia@example.co.id<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mobile Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
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
        &copy; Copyright <strong><span>QudsDev</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BDI Denpasar</a>
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