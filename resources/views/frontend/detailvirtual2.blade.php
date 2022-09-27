@extends('layouts.frontend.master')
@section('content')

<link rel="stylesheet" href="assets/css/stylevirtualdetail.css">
<link rel="stylesheet" href="assets/css/slider.css">
<link rel="stylesheet" href="assets/css/reset.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>

<!-- ======= Hero Section ======= -->

<link rel="stylesheet" href="assets/css/reset.css">

<!-- ======= Hero Section ======= -->
<br></br>
<div class="centerlayout">
    <div class="border-radius">
        <ul class="gallery">
            <li>
                <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                <div class="swiper-slide">
                    <div class="elementor-testimonial">
                        <div class="elementor-testimonial__content">
                            <div class="elementor-testimonial__footer">
                                <div class="elementor-testimonial__image1">
                                    <a href="#">
                                    <body>
                                        <img class="img-responsive" src="assets/img/about.jpg" width="1100px" height="400px" alt="">
                                        <br>
                                    <body> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <body>
                    <br />
                    <div class="h1">
                    </div>
                    <br />
                    <div class="judul">Belanja untung, potongan langsung pakai BRI CERIA</div>
                    <br></br>
                    <div class="judul">DESKRIPSI</div><br />
                    <div class="isi">
                        Belanja pakai Paylater Ceria jelas lebih untung,
                        belanja semua keperluan sekalian biar dapat Diskon
                        langsung Rp30 ribu pakai Kode: CERIAPAYLATER.
                        Saat mendesak butuh belanja, pakai BRI Ceria jawabannya!
                        Belanja pakai Paylater Ceria jelas lebih untung,
                        belanja semua keperluan sekalian biar dapat Diskon
                        langsung Rp30 ribu pakai Kode: CERIAPAYLATER.
                        Saat mendesak butuh belanja, pakai BRI Ceria jawabannya!
                        Belanja pakai Paylater Ceria jelas lebih untung,
                        belanja semua keperluan sekalian biar dapat Diskon
                        langsung Rp30 ribu pakai Kode: CERIAPAYLATER.
                        Saat mendesak butuh belanja, pakai BRI Ceria jawabannya!
                        Belanja pakai Paylater Ceria jelas lebih untung,
                        belanja semua keperluan sekalian biar dapat Diskon
                        langsung Rp30 ribu pakai Kode: CERIAPAYLATER.
                        Saat mendesak butuh belanja, pakai BRI Ceria jawabannya!
                        Belanja pakai Paylater Ceria jelas lebih untung,
                        belanja semua keperluan sekalian biar dapat Diskon
                        langsung Rp30 ribu pakai Kode: CERIAPAYLATER.
                        Saat mendesak butuh belanja, pakai BRI Ceria jawabannya!
                        Belanja pakai Paylater Ceria jelas lebih untung,
                        belanja semua keperluan sekalian biar dapat Diskon
                        langsung Rp30 ribu pakai Kode: CERIAPAYLATER.
                        Saat mendesak butuh belanja, pakai BRI Ceria jawabannya!
                    </div>
                    <br />
                </body>
            </li>
        </ul>
    </div>


    <div class="border-radius2">
        <br />
        <div class="judul">
            <center>Info Harga</center>
        </div>
        <br />
        <div class="border1"></div>
        <div class="postbox-content-detail postbox-content--min-transaction">
            <center><img src="https://ecs7.tokopedia.net/assets/images/ic_minimum.png" width="50" height="50" class="img-responsive postbox-content__img" alt="minimum transaksi" /></center>
            <p class="postbox-content-title text-secondary"><center>Total Harga</center></p>
            <p class="postbox-content__p"><center>Rp.100.0000</center></p></div>
        </div>
            <br/>
    <body>        
    <a class='buttonz' href="{{ ('invoice') }}" target='_blank'>PESAN</a> 
	  </body>

        </div>
            <br/>
            
        <section>
            <div class="content">
                <span id="success-message" class="success"> SUKSES </span>
                    <input type="text" id="captcha-code" class="input" placeholder="Enter Captcha">
                    <span id="captcha-error" class="error"></span>
 
                    <div class="captcha-wrap">
                        <div class="CaptchaImageCode">
                            <canvas id="CapCode" class="capcode" width="300" height="8s0"></canvas>
                    </div>
                    <input type="button" class="ReloadBtn"
                    onClick="CreateCaptcha()">
            </div>
                <input type="button" value="Submit" 
                class="btnSubmit" onclick="CheckCaptcha(); Submit()">
        </div>
        </section>

            <script src="js/jquery.js"></script>    
            <script src="js/captcha.js"></script>
    </div>
 

	  <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
	    <script type="text/javascript"
	      src="https://app.sandbox.midtrans.com/snap/snap.js"
	      data-client-key="SB-Mid-client-RVrlF1elaKLhtnrT"></script>
	    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
	  </head>
	 




</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    </section>
    @stop