@extends('layouts.frontend.master')
@section('content')

<link rel="stylesheet" href="assets/css/styles.css">

<link rel="stylesheet" href="assets/css/reset.css">
<!-- ======= Hero Section ======= -->

<section> 
<section class="destination-highlight-revamp my-5 py-4">
<div class="centerlayout">    
<ul class="gallery">
<body>
    <div class="box">
        <img src="assets/img/malioboro.jpg" >
        <p class="pertama">About</p>
        <p class="kedua">TRAVELXISM</p>
        <p class="ketiga">Our Success Is Not Only Due To The Quality WorkL It's Down To Attitude, Our Approach And The Way We Treat Our Clients.</p>
        <div class="border-radius2"><br></br>
        @foreach ($about as $visimisi)
        <p class="keempat">VISI</p>        
        <p class="visiisi">{{ $visimisi->visi }} <br></br>
<!--        berkelanjutan (Sustainable Tourism) <br></br>
        Dengan Berwawasan Lokal, Sosial Lingkungan <br></br>
        Dan Konservasi Budaya Di Indonesia.</p><br></br>-->
        <p class="kelima">MISI</p>
        <p class="misiisi">{{ $visimisi->misi }}<!-- Travelxism adalah sebuah Start-up yang fokus pada penyampaian riset potensi pariwisata yang inovatif, mengembangkan komunitas wisata, mengadakan berbagai workshop, digitalisasi destinasi dan branding.Travelxism juga memberikan informasi tentang berbagai destinasi unik dan kekinian.Travelxism berbasis di Yogyakarta, di pusat kebudayaan Jawa dan menjadi mini Indoensia dimana pelajar dari berbagai pelosok Nusantara berada disana. Travelxism juga memiliki tim dan kontributoraktif di hampir 34 provinsi maupun di luar Negeri. -->
</p> @endforeach
    </div>
</body>
</div> 
</div>

<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
<div class="h2"><center>What Make Us</center></div>
<div class="h2"><center>Different ?</center></div>

<div class="centerlayout2">
@foreach ($keunggulan as $keung)
<div class="border-radius">
            <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                    <a href="#gambar1">
                                            <img src="assets/img/dna.jpg" width="180" height="180" alt="">
                                            <br><span class="elementor-testimonial__name">{{ $keung->keunggulan }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <body>
                        <br></br>
                        <div class="h5"><center>{{ $keung->keunggulan }}</center></div>
                        <br></br>
                        <div class="dark">{{ $keung->url_metafor }}</p>
                        </div>
                        </body>
                </li>
            </ul>
        </div> 
</div>
@endforeach

</section> 
       
<!-- 
            <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                    <a href="#gambar2">
                                            <img src="assets/img/desi.jpg" width="180" height="180" alt="">
                                            <span class="elementor-testimonial__name">Energi & Komitmen</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <body>
                        <br></br>
                        <div class="h5"><center>Energi Dan Komitmen</center></div>
                        <br></br>
                        <div class="dark">Memiliki komitmen yang jelas, energi travelxism berpusat pada pengembangan pariwisata yang berwawasan sosial menasyarakatan.</p>
                        </div>
                    </body>
                </li>
            </ul>
        </div>
    </div>


    <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                    <a href="#gambar3">
                                            <img src="assets/img/desi.jpg" width="180" height="180" alt="">
                                            <span class="elementor-testimonial__name">Standart Internasional</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <body>
                        <br></br>
                        <div class="h5"><center>Standart Internasional</center></div>
                        <br></br>
                        <div class="dark">Travelxism ikut mengembangkan standar sustainable tourism berdasarkan Global Sustainable Tourism Criteria (GSTC) 2008.</p>
                        </div>
                    </body>
                </li>
            </ul>
        </div>
    </div>


    <div class="centerlayout3">
    <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                    <a href="#gambar4">
                                            <img src="assets/img/desi.jpg" width="180" height="180" alt="">
                                            <span class="elementor-testimonial__name">Inovasi</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <body>
                        <br></br>
                        <div class="h5"><center>Melangkan Penuh Inovasi</center></div>
                        <br></br>
                        <div class="dark">Kemampuan teknologi, audio-visual, komunikasi, sosial mendia hingga bahasa Inggris akan mengtransformasikan sebuah destinasi dan bisnis pariwisata.</p>
                        </div>
                    </body>
                </li>
            </ul>
        </div>
    </div>

    <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                    <a href="#gambar5">
                                            <img src="assets/img/desi.jpg" width="180" height="180" alt="">
                                            <span class="elementor-testimonial__name">Network</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <body>
                        <br></br>
                        <div class="h5"><center>Network Yang Kuat</center></div>
                        <br></br>
                        <div class="dark">Travelxism berpartner dengan berbagai organisasi di taraf Lokal, Nasional dan Internasional baik profit maupun non-profit untuk menciptakan ide-ide pengembangan Sustainable Tourism.</p>
                        </div>
                    </body>
                </li>
            </ul>
        </div> -->


        <section> 
<div> </div>
    <body>
    <div class="h2"><center>Meet The Team</center></div>
    <div class="h3"><center>We Will Deliver The Best Service With</center>
        <h3><center>The Best Team</center></h1>
    </div>
    </body>
    <br></br>
    <div class="centerlayout2">
        @foreach ($staff as $staff1)
        <div class="border-radius">
            <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                        <a href="#gambar1">
                                            <img src="{{ Storage::url('public/staff/').$staff1->image }}" width="180" height="180" alt="">
                                            <br><span class="elementor-testimonial__name">{{ $staff1->posisi }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <body>
                        <br></br>
                        <div class="h1"><center>{{ $staff1->nama }}</center></div>
                        <br></br>
                        <div class="dark">{{ $staff1->posisi }}</p>
                        <p>{{ $staff1->deskripsi }}</p>
                        </div>
                        </body>
                </li>
            </ul>
        </div>
        @endforeach

<!-- 
        <div class="border-radius">
            <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                        <a href="#gambar2">
                                            <img src="assets/img/desi.jpg" width="180" height="180" alt="">
                                            <span class="elementor-testimonial__name">Director Of Business</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <body>
                        <br></br>
                        <div class="h1"><center>Desideria C. W. Murti, S. Sos., M.A., Ph.D</center></h1></div>
                        <br></br>
                        <div class="dark">TRAVELXISM adalah blablabla</p>
                        <p>Sayaa sebagai cummunity tourism</p>
                        </div>
                    </body>
                </li>
            </ul>
        </div>
    </div>


    <div class="border-radius">
        <ul class="gallery">
            <li>
                <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                <div class="swiper-slide">
                    <div class="elementor-testimonial">
                        <div class="elementor-testimonial__content">
                            <div class="elementor-testimonial__footer">
                                <div class="elementor-testimonial__image">
                                    <a href="#gambar3">
                                        <img src="assets/img/vinia.jpg" width="180" height="180" alt="">
                                        <span class="elementor-testimonial__name">Media Director</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <body>
                    <br></br>
                    <div class="h1"><center> Vinia  Rizqi  Prima, SIP</center></div>
                    <br></br>
                    <div class="dark"><p>TRAVELXISM adalah blablabla</p>
                    </div>
                </body>
            </li>
        </ul>
    </div>

    <div class="border-radius">
        <ul class="gallery">
            <li>
                <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                <div class="swiper-slide">
                    <div class="elementor-testimonial">
                        <div class="elementor-testimonial__content">
                            <div class="elementor-testimonial__footer">
                                <div class="elementor-testimonial__image">
                                    <a href="#gambar4">
                                        <img src="assets/img/anindya.jpg" width="180" height="180" alt="">
                                        <span class="elementor-testimonial__name">Community Based Tourism</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <body>
                    <br></br>
                    <div class="h1"><center>Anindya Kenyo Larasti,S.Par., M.Sc.</center></h1></div>
                    <br></br>
                    <div class="dark">TRAVELXISM adalah blablabla</p>
                    <p>Sayaa sebagai cummunity tourism</p>
                    </div>
                </body>
            </li>
        </ul>
    </div>

    <div class="centerlayout2">
        <div class="border-radius">
            <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                        <a href="#gambar5">
                                            <img src="assets/img/vienti.jpg" width="180" height="180" alt="">
                                            <span class="elementor-testimonial__name">Lead Engineering</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <body>
                        <br></br>
                        <div class="h1"><center>Vienti Hadsari, S.T., M.Eng, MECRES, Ph.D.</center></h1></div>
                            <br></br>
                            <div class="dark">TRAVELXISM adalah blablabla</p>
                                <p>Sayaa sebagai cummunity tourism</p>
                            </div>
                    </body>
                </li>
            </ul>
        </div>

        <div class="border-radius">
            <ul class="gallery">
                <li>
                    <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                    <div class="swiper-slide">
                        <div class="elementor-testimonial">
                            <div class="elementor-testimonial__content">
                                <div class="elementor-testimonial__footer">
                                    <div class="elementor-testimonial__image">
                                        <a href="#gambar6">
                                            <img src="assets/img/arif.jpg" width="180" height="180" alt="">
                                            <span class="elementor-testimonial__name">Digital</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <br></br>
                        <div class="h1">
                            <center>Arif Lukman Hakim, S.E., M.A.</center>
                            </h1>
                        </div>
                        <br></br>
                        <div class="dark">TRAVELXISM adalah blablabla</p>
                            <p>Sayaa sebagai cummunity tourism</p>
                        </div>
                        </body>
                </li>
            </ul>
        </div>


    </div>
    <div class="border-radius">
        <ul class="gallery">
            <li>
                <link rel="stylesheet" type="text/css" href="//register.expara.com/wp-content/cache/wpfc-minified/ggqwh37/i0ojx.css" media="all" />
                <div class="swiper-slide">
                    <div class="elementor-testimonial">
                        <div class="elementor-testimonial__content">
                            <div class="elementor-testimonial__footer">
                                <div class="elementor-testimonial__image">
                                    <a href="#gambar7">
                                        <img src="assets/img/aurelia.jpg" width="180" height="180" alt="">
                                        <span class="elementor-testimonial__name">Marketing</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


                <body>
                    <br></br>
                    <div class="h1">
                        <center>Aurelia Melisa Yuliani</center>
                        </h1>
                    </div>
                    <br></br>
                    <div class="dark">
                        <p>TRAVELXISM adalah blablabla</p>

                    </div>
                </body>
            </li>
        </ul>
    </div> -->
   
</section> 

@stop