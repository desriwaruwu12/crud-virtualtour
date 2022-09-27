<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travelxism | Destinasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../../frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../../frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
        </div>
      </section>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">
          <img src="https://static.wixstatic.com/media/2313a5_c77d7af06cfd47af874cce964d385fdd~mv2.png/v1/fill/w_321,h_104,al_c,usm_0.66_1.00_0.01,enc_auto/2313a5_bf2118de9508413b99f643542b1c21fc_mv2.png" alt="">
      </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('destinasi')}}">Destinasi</a></li>
          <li><a class="nav-link scrollto " href="#">Career</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('work')}}">Work
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('media')}}">Media Production</a></li>
              <li><a href="{{route('research')}}">Research</a></li>
              <li><a href="{{route('training')}}">Training And Workshop</a></li> 
            </ul>
          </li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Destinasi Section ======= -->
    <section id="destinasi" class="destinasi">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Our <span>Works</span></h3>
          <!-- <p>Pilih destinasi yang cocok untuk menghabiskan masa liburanmu bersama kami.</p> -->
        </div>

        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
              
              <div class="card me-3 mt-4" style="width: 20rem;">
                <img src="../../../frontend/assets/img/destinasi/destinasi-9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-primary">Research</h5>
                  <p class="card-text" style="font-size: 14px";>Travelxism memiliki Tim Riset (Researcher) untuk membantu bisnis Anda berkembang dalam memahami industri pariwisata, pelanggan, pesaing dan strategi pertumbuhan Anda.</p>
                  <a href="{{route('research')}}" class="btn btn-sm btn-primary" style="font-size: 13px;">Learn More</a>
                </div>
              </div>
              
              <div class="card me-3 mt-4" style="width: 20rem;">
                <img src="../../../frontend/assets/img/destinasi/destinasi-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-primary">Media Production</h5>
                  <p class="card-text" style="font-size: 14px";>Travelxism hadir untuk membantu Anda dalam membangun bisnis, memasarkan destinasi ataupun produk di sektor pariwisata. Kami menawarkan program konsultasi kreatif, inovatif dan terintegrasi.</p>
                  <a href="{{route('media')}}" class="btn btn-sm btn-primary" style="font-size: 13px;">Learn More</a>
                </div>
              </div>
              
              <div class="card me-3 mt-4" style="width: 20rem;">
                  <img src="../../../frontend/assets/img/destinasi/destinasi-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-primary">Training And Workshop</h5>
                    <p class="card-text" style="font-size: 14px";>Travelxism menyediakan training dan workshop kepada masyarakat lokal dan staf pemerintah atau swasta sesuai kebutuhan untuk menjalankan dan mengembangkan industri pariwisata.</p>
                    <a href="{{route('training')}}" class="btn btn-sm btn-primary" style="font-size: 13px;">Learn More</a>
                  </div>
                </div>
            </div>
        </div>


        </div>

      </div>
    </section><!-- End destinasi Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Lorem ipsum dolor sit.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Travelxism<span>.</span></h3>
            <p>
              Yogyakarta<br>
              Indonesia<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
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

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../../frontend/assets/vendor/purecounter/purecounter.js"></script>
  <script src="../../../frontend/assets/vendor/aos/aos.js"></script>
  <script src="../../../frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../../frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../../frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../../frontend/assets/js/main.js"></script>

</body>

</html>