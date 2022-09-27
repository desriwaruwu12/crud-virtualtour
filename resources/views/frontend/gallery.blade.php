@extends('layouts.frontend.master')
@section('content')

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


  <main id="main">
   
   <!-- ======= Destinasi Section ======= -->
    <section id="destinasi" class="destinasi">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h3>Our <span>Photos</span></h3>
          <p>Pilih destinasi yang cocok untuk menghabiskan masa liburanmu bersama kami.</p>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        

        @foreach($posts as $post)
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('storage/'.$post->url_foto) }}"" class="img-fluid" alt="" style="width:400px">
            <div class="portfolio-info" style="width:320px">
              <h4>{{ $post->nama }}</h4>
              <p>{{ $post->jenis }}</p>
              <a href="{{Storage::url("storage/").$post->url_foto }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $post->nama }}"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End destinasi Section -->

  </main><!-- End #main -->



 
 
@stop