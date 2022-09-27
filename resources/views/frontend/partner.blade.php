@extends('layouts.frontend.master')
@section('content')

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">


      <div class="section-title">
          <h2>Partner</h2>
          <p>Kerja sama kami</p>
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
       
      </div> 
      <!-- <div class="d-flex justify-content-center">
              <a href="{{ ('testimoni') }}" class="btn btn-primary" style="font-size: 13px;">Lihat semua Partner</a>
        </div> -->
    </section>
     <!-- End Clients Section -->


@stop