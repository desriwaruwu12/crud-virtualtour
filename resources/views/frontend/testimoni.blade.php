@extends('layouts.frontend.master')
@section('content')

<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!--<link href="{{asset('assets/css/sliderpartner.css')}}" rel="stylesheet">-->

<!-- ======= Testimoni Section ======= -->
<section id="counts" class="counts">
<div class="container" data-aos="fade-up">

<div class="section-title">
          <h2>Testimoni</h2>
          <p>Testimoni MBKM</p>
        </div>


<!-- Three columns of text below the carousel -->
<div class="row testimoni d-flex justify-content-center">
        @foreach($testimonial as $testimoni)

        
        <div class="testimonial-card col-lg-4 border text-center mb-4" style="border-radius:14px; margin-left:14px; width:320px">
                <!-- <img class="bd-placeholder-img rounded-circle" img src="assets/img/destinasi/destinasi-2.jpg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg> -->
                <img src="{{ Storage::url('app/public/posts/').$testimoni->url_foto }}" class="rounded-circle mt-4" width="120" height="120">
                <h5 class="mt-2">{{$testimoni->nama}}</h5>
                <p>{!!$testimoni->deskripsi!!} </p>
                <!-- <p><a class="btn btn-light" href="#">Selengkapnya</a></p> -->
              </div>

        @endforeach

  </div><!-- /.col-lg-4 -->
  <!-- <div class="d-flex justify-content-center">
              <a href="{{ ('testimoni') }}" class="btn btn-primary" style="font-size: 13px;">Lihat semua Testimoni</a>
        </div> -->

</div><!-- /.row -->


<!-- ======= END Testimoni Section ======= -->


@stop