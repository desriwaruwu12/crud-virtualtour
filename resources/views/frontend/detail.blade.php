<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travelxism | Destinasi Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png"')}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


 <body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="info@travelxism.com">info@travelxism.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>+6281249605055</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      
      <a link href="https://www.facebook.com/travelxism" class="twitter"><i class="bi bi-twitter"></i></a>
      <a link href="https://www.facebook.com/travelxism" class="facebook"><i class="bi bi-facebook"></i></a>
      <a link href="https://www.instagram.com/travelxism" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
     
    </div>
  </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between" style=" padding:0 !important;">

    <h1 class="logo"><a href="{{ ('/') }}" class="logo"><img src="{{asset('assets/img/logo.png')}}" style="height: 200px;" alt=""></a></h1>
    
    <!-- Uncomment below if you prefer to use an image logo -->
    

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="{{ ('/') }}">Home</a></li>
        
        <li class="nav-link scrollto"><a href="{{ URL::to('about/') }}"><span>About</span> </a>          </li>
        <li class="dropdown"><a href="#"><span>Store</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Offline Tour</a></li>
            <li><a href="#">Virtual Tour</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ URL::to('destinasifront/') }}">Destinations</a></li>
        <li><a class="nav-link scrollto " href="{{ URL::to('news/') }}">News</a></li>
        <li><a class="nav-link scrollto" href="{{ URL::to('gallery/') }}">Gallery</a></li>
        <li><form class="d-flex mt-3">
        <input class="form-control me-1" type="search" placeholder="Pencarian" aria-label="Pencarian">
        <br><button class="btn btn btn-primary" type="submit">Cari</button>
        </form></li>
        <!-- <li><button class="nav-link btn btn btn-primary" type="button" href="{{ ('login') }}">Login</button></li> -->
        <li><a href="{{ URL::to('login/') }}" class="btn btn-md btn-primary p-2 text-white" style="text-decoration: none; underline:none;">Login</a></li>
       
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->


</head>

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Destinasi</h2>
          <ol>
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('destinasifront') }}">destinasi</a></li>
            <li>{{ $itemdestinasi->nama_destinasi }}</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->


    <!-- ======= destinasi Details Section ======= -->
    <section id="destinasi-details" class="destinasi-details">
      <div class="container">

        <div class="row gy-4">


          <div class="col-lg-8">
            <div class="destinasi-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

              <!--@foreach($itemdestinasi->galeri as $row)-->
              <!-- <img src="{{ asset('storage/'.$row->url_foto) }}"alt="">-->
              <!--@endforeach-->

                <div class="swiper-slide">
                @foreach($itemdestinasi->galeri as $row)
                  <img src="{{ asset('storage/'.$row->url_foto) }}"alt="">
                @endforeach
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="destinasi-info">
              <h3>Detail information</h3>
              <ul>
                <li><strong>Nama Wisata</strong> : {{ $itemdestinasi->nama_destinasi }}</li>
                <li><strong>Alamat </strong> : {{ $itemdestinasi->alamat }}</li>
              </ul>
            </div>
            <div class="destinasi-description ms-4">
              <h4 class="text-primary" style="font-size: 20px">Deskripsi</h4>
              <p>
              {{ $itemdestinasi->deskripsi }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End destinasi Details Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <p>Langganan untuk mendapatkan informasi dan promo menarik dari Travelxism</p>
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

          <div class="col-lg-3 col-sm-3 footer-contact">
          <h1 class="logo"><a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a></h1>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desa Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">MBKM</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-sm-3 footer-links">
            <h4>Terhubung</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Partnership</a></li>
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
        Designed by <a href="https://bootstrapmade.com/">TECHNO STIP 2</a>
      </div>
    </div>
  </footer>