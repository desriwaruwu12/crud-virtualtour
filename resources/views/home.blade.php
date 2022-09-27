@extends('layouts.frontend.master')
 @section('content')


  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{('assets/css/sliderpartner.css')}}" rel="stylesheet">


  <!-- <section id="hero" class="d-flex align-items-center"> -->
<div id="myCarousel"  class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
</ol>

<div class="carousel-inner" role="listbox">
      @foreach($sliders as $key => $slider)
        <div  class="carousel-item {{$key == 0 ? 'active' : '' }}">
            {{-- <img src="{{asset('app/headline/', $slider->url_foto)}}" class="d-block w-100"  height="700" alt="..."> --}}
            <img src="{{ Storage::url('app/public/headline').'/'.$slider->url_foto }}" class="d-block w-100"  height="650" alt="...">
        </div>
      @endforeach
         <div class="carousel-caption d-none d-md-block" id="element">
      <h1>Mulai Rencanakan Perjalananmu </h1>
      <h1>Bersama <span>Travelxism</span></h1>
      
      <h2>Temukan informasi obyek wisata, rekomendasi rencana perjalanan, </h2>
      <h2>dan pemandu wisata terbaik hanya di Travelxism</h2>
      <br>
      <div class="d-flex">
        <a href="#destinasi" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=FY59xbxmi30" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a><br>
      </div>
     </div>
  
<a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true">     </span>
    <span class="sr-only"></span>
</a>
<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only"></span>
</a>
</div>

  <!-- ======= News Section =======  -->
  <section id="portfolio" class="portfolio">
    <div class="container-fluid">

    <div class="section-title">
          <h3><span>Berita </span>menarik untuk anda</h3>
          <p>Berita Travelxism terupdate</p>
        </div>

        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
              @foreach($berita1 as $berita)
                <div class="card-berita card me-3 mt-4 shadow-sm" style="width: 20rem; padding:0 !important;">
               
                    @foreach($berita->galeri as $row) 
                    <a href= "{{ route('newsdetail', $berita->id_berita) }}">
                    <img src="{{ asset('storage/'.$row->url_foto) }}" class="card-img-top" alt="..." style="height:250px">
                    </a>
                    @endforeach
                    
                    <div class="card-body">
                      <a href= "{{ route('newsdetail', $berita->id_berita) }}">
                      <h5 class="card-title text-primary">{{ $berita->judul_berita }}</h5>
                      </a>
                      <!--<p class="card-text" style="font-size: 14px";>{{ $berita->caption }}-->
                      </p>
                      <p class="card-text" style="font-size: 14px; color:rgb(180, 180, 171)";>by: {{ $berita->name }}
                      <p class="card-text" style="font-size: 14px; color:#808080";>{{ $berita->updated_at }}
                      </p>
                      
                      {{-- <a href="{{ route('newsdetail', $berita->id_berita) }}" class="btn btn-primary" style="font-size: 13px;">Selengkapnya</a> --}}
                    </div>
                </div>
              @endforeach
            </div>
        </div>
        
    </div>
    <br>
    <div class="d-flex justify-content-center">
          <a href="{{ ('news') }}" class="btn btn-primary" style="font-size: 13px;">Lihat semua berita</a>
        </div>
    </div>
    
</section>

<!-- News Section -->
<!-- <section id="clients" class="portofolio">

<div class="section-title">
      <h3><span>Berita </span>menarik untuk anda</h3>
      <p>Berita Travelxism terupdate</p>
    </div>
    
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
        @foreach($berita1 as $berita)
       
           <div class="card mb-3" style="max-width: 540px;">
 
              <div class="row g-0" href= "{{ route('newsdetail', $berita->id_berita) }}">
                <div class="col-md-4">
                  @foreach($berita->galeri as $row)
                        <img src="{{ asset('storage/'.$row->url_foto) }}" class="img-fluid rounded-start" href= "{{ route('newsdetail', $berita->id_berita) }}alt="...">
                  @endforeach
                </div>
                <div class="col-md-8">
                  <div class="card-body">

                  
                    <h5 class="card-title"  >{{ $berita->judul_berita }}</h5>
                    <p class="card-text">{{ $berita->caption }}</p>
                    <p class="card-text"><small class="text-muted">{{ $berita->name }}</small></p>
                    <a href="{{ route('newsdetail', $berita->id_berita) }}" class="btn btn-primary" style="font-size: 13px;">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        
        </div> 
        <div class="d-flex justify-content-center">
          <a href="{{ ('news') }}" class="btn btn-primary" style="font-size: 13px;">Lihat semua berita</a>
        </div>
    </div>

  </section>End News Section -->



    <!-- ======= Destinasi Section ======= -->
    <section id="destinasi" class="destinasi" style="padding:0 !important">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h3>Popular <span>Destinations</span></h3>
          <p>Pilih destinasi yang cocok untuk menghabiskan masa liburanmu bersama kami.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($destinasi as $destinasi1)
          
          <div  class="col-lg-4 col-md-6 portfolio-item filter-card " >
 
            @foreach($destinasi1->galeri as $row)
            <a href= "{{ route ('detail.show', $destinasi1->id )}}">
               <img src="{{ asset('storage/'.$row->url_foto) }}"class="img-fluid" style="width:400px">

            @endforeach
            <div class="portfolio-info" style="width:320px">
              <h4>{{ $destinasi1->nama_destinasi }}</h4>
              <p>{{ $destinasi1->alamat }}</p>
              @foreach($destinasi1->galeri as $row)
              <a href="{{ asset('storage/'.$row->url_foto) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $destinasi1->nama_destinasi }}"><i class="bx bx-zoom-in"></i></a>
              @endforeach
              <a href="" class="details-link" title="More Details"></a>
            </div>
            </a>
          </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center">
              <a href="{{ ('destinasifront') }}" class="btn btn-primary" style="font-size: 13px; margin-bottom:30px">Lihat semua destinasi</a>
        </div>
      </div>
    </section><!-- End Destinasi Section -->

  <!-- ======= Perjalanan Section =======  -->
    <!-- <section id="portfolio" class="portfolio">
    <div class="container-fluid">

    <div class="section-title">
          <h3>Ratusan rencana <span>Perjalanan</span> telah tersedia untukmu</h3>
          <p>Bingung mau jalan-jalan ke mana? Yuk lihat rekomendasikan rencana perjalanan yang mungkin kamu suka!</p>
        </div>

        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <div class="card me-3 mt-4" style="width: 20rem;">
                    <img src="assets/img/destinasi/destinasi-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-primary">Package Tour 1</h5>
                      <p class="card-text" style="font-size: 14px";>Sleman

Sebuah kabupaten di Daerah Istimewa Yogyakarta, Indonesia. Ibu kota kabupaten ini berada di kapanewon Sleman. Sleman dikenal sebagai asal buah salak pondoh.</p>
                      <a href="#" class="btn btn-primary" style="font-size: 13px;">Book Now</a>
                    </div>
                  </div>
        
                  <div class="card me-3 mt-4" style="width: 15rem;">
                    <img src="assets/img/destinasi/destinasi-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-primary">Package Tour 1</h5>
                      <p class="card-text" style="font-size: 14px";>Sleman

Sebuah kabupaten di Daerah Istimewa Yogyakarta, Indonesia. Ibu kota kabupaten ini berada di kapanewon Sleman. Sleman dikenal sebagai asal buah salak pondoh.</p>
                      <a href="#" class="btn btn-primary" style="font-size: 13px;">Book Now</a>
                    </div>
                  </div>

                  <div class="card me-3 mt-4" style="width: 15rem;">
                    <img src="assets/img/destinasi/destinasi-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-primary">Package Tour 1</h5>
                      <p class="card-text" style="font-size: 14px";>Sleman

Sebuah kabupaten di Daerah Istimewa Yogyakarta, Indonesia. Ibu kota kabupaten ini berada di kapanewon Sleman. Sleman dikenal sebagai asal buah salak pondoh.</p>
                      <a href="#" class="btn btn-primary" style="font-size: 13px;">Book Now</a>
                    </div>
                  </div>

                  <div class="card me-3 mt-4" style="width: 15rem;">
                    <img src="assets/img/destinasi/destinasi-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-primary">Package Tour 1</h5>
                      <p class="card-text" style="font-size: 14px";>Sleman

Sebuah kabupaten di Daerah Istimewa Yogyakarta, Indonesia. Ibu kota kabupaten ini berada di kapanewon Sleman. Sleman dikenal sebagai asal buah salak pondoh.</p>
                      <a href="#" class="btn btn-primary" style="font-size: 13px;">Book Now</a>
                    </div>
                  </div>
            </div>
        </div>
</div>
</section> -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">


      <div class="section-title">
          <h2>Partner</h2>
          <p>Kerja Sama Kami</p>
        </div>

        <div class="row">


        @foreach($partner as $partner1)
          <!-- <a href="{{ $partner1->link}}"> -->
          
          <div class="col-lg-3 col-md-4 col-6 align-items-center justify-content-center" href="{{ $partner1->link}}">
          <a link href= "https://{{ $partner1->link }}">
          <img src="{{ Storage::url('app/public/').$partner1->icon }}" class="img-fluid" alt=""></a>
            <p>{{ $partner1->label}}</p>
          
          </div>

          @endforeach

          
        </div>
       
      </div> <br> 
      <div class="d-flex justify-content-center">
              <a href="{{ ('partnerfront') }}" class="btn btn-primary mb-3" style="font-size: 13px;">Lihat semua Partner</a>
        </div>
    </section>
     <!-- End Clients Section -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Data</h2>
          <p>Data kami</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
              <p>Supported</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p>Assisted</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trained</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="16700" data-purecounter-duration="1" class="purecounter"></span>
              <p>Inspired</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    

<!-- ======= Testimoni Section ======= -->
<section id="counts" class="counts">
<div class="container" data-aos="fade-up">

<div class="section-title">
          <h2>Testimoni</h2>
          <p>Testimoni MBKM</p>
        </div>


        <div class="row testimoni d-flex justify-content-center">
          @foreach($testimonial as $testimoni)
  
          <div class="testimonial-card col-lg-4 border text-center mb-4" style="border-radius:14px; margin-left:14px; width:320px">
            <!-- <img class="bd-placeholder-img rounded-circle" img src="assets/img/destinasi/destinasi-2.jpg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg> -->
            <img src="{{ Storage::url('app/public/posts/').$testimoni->url_foto }}" class="rounded-circle mt-4" width="120" height="120" style="border:4px solid #0d6efd">
            <h5 class="mt-2">{{$testimoni->nama}}</h5>
            <p>{!!$testimoni->deskripsi!!} </p>
            <!-- <p><a class="btn btn-light" href="#">Selengkapnya</a></p> -->
          </div>
      @endforeach

  </div><!-- /.col-lg-4 -->
  <div class="d-flex justify-content-center mb-4">
              <a href="{{ ('testimonifront') }}" class="btn btn-primary" style="font-size: 13px;">Lihat semua Testimoni</a>
        </div>

</div><!-- /.row -->


<!-- ======= END Testimoni Section ======= -->


  @stop