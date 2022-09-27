

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travelxism</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/master.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.  css" integrity="sha384-  Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"   crossorigin="anonymous">
  <script     src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.  min.js" integrity="sha384-   ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"        crossorigin="anonymous"></script>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center" style="background-image: linear-gradient(to right, #260c83, #0e58c7)">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="#">info@travelxism.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+6281249605055</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">

        <a link href="https://www.twitter.com/travelxism" class="twitter"><i class="bi bi-twitter"></i></a>
        <a link href="https://www.facebook.com/travelxism" class="facebook"><i class="bi bi-facebook"></i></a>
        <a link href="https://www.instagram.com/travelxism" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>

      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ ('home') }}" class="logo"><img src="assets/img/logo.png" alt=""></a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ ('home') }}">Home</a></li>

          <li class="dropdown"><a href="{{ ('about') }}"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ ('about') }}">About</a></li>
              <li><a href="{{ ('testimonifront') }}">Testimoni</a></li>
              <li><a href="{{ ('partnerfront') }}">Partner</a></li>
            </ul> </li>
          <li class="dropdown"><a href="#"><span>Store</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Offline Tour</a></li>
              <li><a href="{{ ('virtualtour') }}">Virtual Tour</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ ('destinasifront') }}">Destinations</a></li>
          <li><a class="nav-link scrollto " href="{{ ('news') }}">News</a></li>
          <li><a class="nav-link scrollto" href="{{ ('gallery') }}">Gallery</a></li>
          <li><form class="d-flex">
          <input class="form-control me-1" type="search" placeholder="Pencarian" aria-label="Pencarian">
          <br><button class="btn btn btn-primary" type="submit">Cari</button>
          </form></li>
          <!-- <li><button class="nav-link btn btn btn-primary" type="button" href="{{ ('login') }}">Login</button></li> -->
          <li><a href="{{'login'}}" class="btn btn-md btn-primary p-2 text-white" style="text-decoration: none; underline:none;">Login</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    @yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <p>Langganan untuk mendapatkan informasi dan promo menarik dari Travelxism</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="button" value="Subscribe" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-sm-3 footer-contact">
          <h1 class="logo"><a href="#" class="logo"><img src="assets/img/logo.png" alt=""></a></h1>
            <p>
              PT. GEMILANG MEDIA WISATAMA<br>
              Genius Idea Coworking Space<br>
              Jl. Magelang No. 32-34, Cokrodiningratan, Jetis, Yogyakarta<br><br>
              <strong>Phone:</strong> +6281249605055<br>
              <strong>Email:</strong> info@travelxism.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-sm-3 footer-links">
            <h4>Fitur</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Virtual Tour</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Virtual Exhibition</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Event</a></li>

            </ul>
          </div>

          <div class="col-lg-2 col-sm-3 footer-links">
            <h4>Informasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ ('about') }}">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ ('destinasifront') }}">Destinasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ ('news') }}">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ ('testimonifront') }}">MBKM</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-sm-3 footer-links">
            <h4>Terhubung</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ ('about') }}">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ ('partnerfront') }}">Partnership</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Campaign</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Location</h4>
            <div class="col-lg-6 ">
            <iframe class="mb-9 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.089019616312!2d110.35887711432639!3d-7.780385779350807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599336d9fd05%3A0xff18b3ac7b9066ff!2sTravelxism%20Sustainable%20Tour!5e0!3m2!1sid!2sid!4v1653377082295!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 100px;" allowfullscreen></iframe>
            </div>
            <h4>Our Social Media</h4>

            <div class="social-links mt-3">
              <a href="https://www.twitter.com/travelxism" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/travelxism" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/travelxism" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Travelxism</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://instagram.com/travelxism">TECHNO STIP 2</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
