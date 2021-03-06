<?php require_once('../controller/config.php');

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QudsDev</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/assets2/img/gb_ku/logo.png" rel="icon">
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
  <link rel="stylesheet" href="../assets/assets2/fontawesome/css/all.css">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><img style="margin-right: 10px; margin-bottom: 5px;" src="../assets/assets2/img/gb_ku/logo.png" alt=""><a href="index.php">QudsDev<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="../assets/assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#services"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#eventTraining">Training</a></li>
              <li><a href="#eventMentoring">Mentoring</a></li>
              <li><a href="#eventWebinar">Webinar IT</a></li>

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
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div>
        <?php
        if (isset($_SESSION["login"])) { ?>
          <a href="dashboard/dashboard.php" class="get-started-btn scrollto">Dashboard</a>
        <?php } else { ?>
          <a href="login.php" class="get-started-btn scrollto">Login</a>
        <?php } ?>
        <!-- <a href="#about" class="get-started-btn scrollto">Register</a> -->
      </div>


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Learn for Learner<span>.</span></h1>
          <h2>Happy for Everyone</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-3">
          <div class="icon-box">
            <i class="fas fa-laptop-code"></i>
            <h3><a href="">Web Dev</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-3">
          <div class="icon-box">
            <i class="fas fa-code"></i>
            <h3><a href="">Mobile Dev</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-3">
          <div class="icon-box">
            <i class="fas fa-network-wired"></i>
            <h3><a href="">Networking</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-3">
          <div class="icon-box">
            <i class="fas fa-user-secret"></i>
            <h3><a href="">Cyber Security</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-3">
          <div class="icon-box">
            <i class="fa fa-paint-brush" aria-hidden="true"></i>
            <h3><a href="">Graphic Design</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../assets/assets2/img/gb_ku/logo.png" style="display: block; margin: auto;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>About</h3>
            <p class="fst-italic">
              Melayani berbagai masalah IT seperti Junior Cybersecurity, Blogger, Pembuatan Aplikasi Website dan Mobile.
              Sharing Center di personal website mengenai
              Pekuliahan Informatika, Cybersecurity, Jaringan Komputer, CTF, dan beberapa tool, tips, dan trik mengenai
              dunia IT lainnya.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Training</li>
              <li><i class="ri-check-double-line"></i> Mentoring</li>
              <li><i class="ri-check-double-line"></i> Service Application</li>
              <li><i class="ri-check-double-line"></i> Selling Product</li>
              <li><i class="ri-check-double-line"></i> Etc</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="../assets/assets2/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- <div class="blm-tau text-center" style="border: blue solid 2px;">
      == <i class="fas fa-question-circle"></i> ==
    </div> -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Check our Event</p>
        </div>


        <div class="row">
          <div class="section-title pb-0 mb-4" id="eventTraining">
            <h2>Training</h2>
          </div>

          <?php
          $query = "SELECT * FROM Events JOIN Kategori_events ON Events.kategori=Kategori_events.id WHERE Kategori_events.nama_kategori='Training' ORDER BY id_event LIMIT 4";
          $i = 0;
          // id_admin, nama_admin, email, alamat, tgl_lahir, gender
          if ($query = mysqli_query($koneksi, $query)) {
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <div class="col-lg-4 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="100" style="max-width: 330px;">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-code"></i></div>
                  <h4><a href="detail-events.php?id=<?= $data['id_event'] ?>"><?= $data['nama_event']; ?></a></h4>
                  <p>Harga : Rp. <?= $data['harga'] ?> </p>
                  <a class="btn btn-success mt-4" href="detail-events.php?id=<?= $data['id_event'] ?>" role="button" style="margin-left: 1%; width: 90%;">Baca Selengkapnya <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
          <?php
            }
          } else {
            echo mysqli_error($koneksi);
          }
          ?>

          <!-- <div class="container" data-aos="fade-up"> -->
          <div class="" data-aos="zoom-in" data-aos-delay="100">
            <a class="btn btn-success mt-4" href="inner-page.php?kategori=training" role="button">More Training<i class="bi bi-chevron-right"></i></a>
          </div>
          <!-- </div> -->
        </div>


        <div class="row">

          <div class="mt-5 pb-0 section-title" id="eventMentoring">
            <h2>Mentoring</h2>
          </div>

          <?php
          $query = "SELECT * FROM Events JOIN Kategori_events ON Events.kategori=Kategori_events.id WHERE Kategori_events.nama_kategori='Mentoring' ORDER BY id_event LIMIT 4";
          $i = 0;
          // id_admin, nama_admin, email, alamat, tgl_lahir, gender
          if ($query = mysqli_query($koneksi, $query)) {
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <div class="col-lg-4 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="100" style="max-width: 330px;">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-code"></i></div>
                  <h4><a href="detail-events.php?id=<?= $data['id_event'] ?>"><?= $data['nama_event']; ?></a></h4>
                  <p>Harga : Rp. <?= $data['harga'] ?> </p>
                  <a class="btn btn-success mt-4" href="detail-events.php?id=<?= $data['id_event'] ?>" role="button" style="margin-left: 1%; width: 90%;">Baca Selengkapnya <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
          <?php
            }
          } else {
            echo mysqli_error($koneksi);
          }
          ?>

          <div class="" data-aos="zoom-in" data-aos-delay="100">
            <a class="btn btn-success mt-4" href="inner-page.php?kategori=mentoring" role="button">More Mentoring<i class="bi bi-chevron-right"></i></a>
          </div>
        </div>

        <div class="row">

          <div class="mt-5 pb-0 section-title" id="eventWebinar">
            <h2>Webinar IT</h2>
          </div>

          <?php
          $query = "SELECT * FROM Events JOIN Kategori_events ON Events.kategori=Kategori_events.id WHERE Kategori_events.nama_kategori='Webinar' ORDER BY id_event LIMIT 4";
          $i = 0;
          // id_admin, nama_admin, email, alamat, tgl_lahir, gender
          if ($query = mysqli_query($koneksi, $query)) {
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <div class="col-lg-4 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="100" style="max-width: 330px;">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-code"></i></div>
                  <h4><a href="detail-events.php?id=<?= $data['id_event'] ?>"><?= $data['nama_event']; ?></a></h4>
                  <p>Harga : Rp. <?= $data['harga'] ?> </p>
                  <a class="btn btn-success mt-4" href="detail-events.php?id=<?= $data['id_event'] ?>" role="button" style="margin-left: 1%; width: 90%;">Baca Selengkapnya <i class="bi bi-chevron-right"></i></a>
                </div>
              </div>
          <?php
            }
          } else {
            echo mysqli_error($koneksi);
          }
          ?>
          <div class="" data-aos="zoom-in" data-aos-delay="100">
            <a class="btn btn-success mt-4" href="inner-page.php?kategori=webinar" role="button">More Webinar<i class="bi bi-chevron-right"></i></a>
          </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Blog</h3>
          <p>Aku rela di penjara asalkan bersama buku, karena dengan buku aku bebas - Mohammad Hatta</p>
          <a class="cta-btn" href="https://wetofu.github.io">Baca Blog Kami</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>How far QudsDev</h3>
              <p style="font-size: 12;">
                QudsDev sudah berdiri sejak tahun 2021, yang mana diprakarsai oleh beberapa mahasiswa baik dari Kudus
                maupun luar Kudus. Adapun data statistik mengenai beberapa project yang sudah di handle oleh QudsDev
                antara lain :
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Kepuasan Client</strong> Alhamdulillah banyak sekali client yang puas terhadap kinerja
                      kami, semoga kami tetap konsisten dalam mengemban amanah</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> Banyak Aplikasi yang sudah kami handle baik website, mobile, ataupun
                      yang lainnya
                    </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Tahun Pengalaman</strong> Saat ini QudsDev sudah menginjak umur yang kedua????</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Penghargaan</strong> QudsDev sendiri pernah menjuarai kompetisi hackaton 2022 di China
                      serta lomba-lomba nasional lainnya</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/assets2/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>King Raja Sultan</h3>
                <h4>Peserta Training Web From Zero to Hero</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Satu Kata "Hebat", apalagi mentoring yang versi free nya itu bestt dahh pokoknya...
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/assets2/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Satria Baja Hitam</h3>
                <h4>Internship QudsDev</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ???Belajar di QudsDev itu??? Tentornya baik-baik dan suka kasih motivasi. Konsulnya juga ngebantu banget,
                  mulai
                  dari masalah belajar sampai masalah hidup juga bisa dikonsulin di sini. Tentornya juga
                  semangat-semangat. Gak nyesel deh les di SG. Sukses terus QudsDev Kudus!???
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/assets2/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Vavan Irfan</h3>
                <h4>Peserta Mentoring Flutter Intermediet</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ???Training di QudsDev itu seru bgt. Cara kakak- kakaknya dalam memberi materipun mudah dipahami, terus
                  kakak-kakaknya seru..dan QudsDev selalu medukung dan membantu kita dalam pengetahuan tentang Ilmu
                  Programming.???
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/assets2/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Ali Fahrial Anwar</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Di QudsDev saya merasa terbantu untuk meningkatkan nilai-nilai saya di Ilmu Desain. Kalau ada materi
                  yang belum
                  saya kuasai, saya bisa meminta Penjelasan tambahan di luar jam Training. Terima kasih QudsDev.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="../assets/assets2/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Verry Budianto</h3>
                <h4>Peserta Training Intermediet Laravel</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="../assets/assets2/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>M Syahrul Aulia</h4>
                <span>CEO and Founder</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="../assets/assets2/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Wahyu Restu Pamuji</h4>
                <span>CTO and Founder</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jalan Ir.Soekarno no 17, 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>qudsdev@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No. Telp:</h4>
                <p>085 676 6767 886</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama lengkap Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan dan Kesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
                Jalan Soekarno no 17, IDN<br><br>
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
            <h4>Bantuan</h4>
            <p>Silahkan teman-teman subscribe website ini dan semoga kedepannya bisa lebih baik terutama peningkatan
              skill
              dan kualitas pelayanannya</p>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php

  if (isset($_GET["status"])) {
    if ($_GET["status"] === "success") {
      echo "<script>
    swal({
      position: 'top-end',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 3000
    });
  </script>";
    } elseif ($_GET["status"] === "error") {
      echo "
    <script>
    swal('Error', 'Maaf input salah', 'error');
  </script>
    ";
    }
  }


  ?>

</body>

</html>