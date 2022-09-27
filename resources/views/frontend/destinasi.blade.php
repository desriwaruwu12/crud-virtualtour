@extends('layouts.frontend.master')
 @section('content')

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- ======= Destinasi Section ======= -->
    <section id="destinasi" class="destinasi">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h3>Popular <span>Destinations</span></h3>
          <p>Pilih destinasi yang cocok untuk menghabiskan masa liburanmu bersama kami.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($destinasi as $destinasi1)
          
          <div  class="col-lg-4 col-md-6 portfolio-item filter-card " >
 
            @foreach($destinasi1->galeri as $row)
            <a href= "{{ URL::to('destinasifront/'.$destinasi1->id ) }}">
               <img src="{{ asset('storage/'.$row->url_foto) }}"class="img-fluid" style="width:400px">

            @endforeach
            <div class="portfolio-info" style="width:320px">
              <h4>{{ $destinasi1->nama_destinasi }}</h4>
              <p>{{ $destinasi1->alamat }}</p>
              @foreach($destinasi1->galeri as $row)
              <a href="{{ asset('storage/'.$row->url_foto) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $destinasi1->nama_destinasi }}"><i class="bx bx-zoom-in"></i></a>
              @endforeach
            </div>
            </a>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Destinasi Section -->


  @stop