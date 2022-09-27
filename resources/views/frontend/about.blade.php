@extends('layouts.frontend.master')
@section('content')

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- ======= Testimoni Section ======= -->
<div class="container mt-5">

<div class="section-title">
    <h2>Tentang Kami</h2>
    <p class="ketiga"></p>
</div>

{{-- <div class="mb-4 visi">
    <img width="100%" style="height: 400px; border-radius:10px" src="assets/img/malioboro.jpg" class="img-fluid">
</div> --}}
<section class="section section-visimisi">
<div class="container mb-4 d-flex justify-content-center">
    <div class="row mt-4 justify-content-center">
        @foreach ($about as $a)
        <div class="card card-misi me-2 text-center mb-2" style="width: 24rem;">
            <div class="card-body card-visi">
              <h3 class="card-title text-center">Visi Misi</h3>
              <p class="card-text text-center">{!!$a->visi!!}</p>
            </div>
            <div class="card-footer" style="background-color: rgb(6, 77, 143)">
            </div>
        </div>
        
        <div class="card card-misi text-center mb-2" style="width: 24rem;">
            <div class="card-body card-visi">
                <h3 class="card-title text-center">Deskripsi Perusahaan</h3>
                <p class="card-text text-center">{!!$a->deskripsi!!}</p>
            </div>
            <div class="card-footer" style="background-color: rgb(6, 77, 143)">
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
  
<div class="section-title mt-4">
    <h2>Keunggulan</h2>
</div>

<div class="centerlayout mb-4">
    @foreach ($keunggulan as $keung)
        <div class="row d-flex   justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-12 text-center">
                <p>{!!$keung->keunggulan!!}</p>
            </div>
        </div>
    @endforeach
</div>

<div class="section-title mt-4">
    <h2>Meet The Team</h2>
    <p>We Will Deliver The Best Service With <br>
    The Best Team</p>
</div>


<div class="row  d-flex justify-content-center">
    @foreach($staff as $s)

    
    <div class="staff shadow-sm col-lg-4 text-center mb-4" style="border-radius:14px; margin-left:14px; width:280px;">
            <!-- <img class="bd-placeholder-img rounded-circle" img src="assets/img/destinasi/destinasi-2.jpg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg> -->
            <img src="{{ Storage::url('app/public/staff/').$s->image }}" class="rounded-circle mt-4" width="200" height="200">
            <h5 class="mt-2">{{$s->nama}}</h5>
            <p class="text-center" style="font-size: 14px; color:#7a7a7a">{{$s->posisi}} </p>
            <!--<p style="font-size: 14px">{!!$s->deskripsi!!} </p>-->
            <!-- <p><a class="btn btn-light" href="#">Selengkapnya</a></p> -->
          </div>

    @endforeach

</div><!-- /.col-lg-4 -->
<!-- <div class="d-flex justify-content-center">
          <a href="{{ ('testimoni') }}" class="btn btn-primary" style="font-size: 13px;">Lihat semua Testimoni</a>
    </div> -->

</div><!-- /.row -->



</div>
@stop