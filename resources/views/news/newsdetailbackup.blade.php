@extends('layouts.frontend.master')
@section('content')


  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/stylenews.css')}}" rel="stylesheet">

  <main id="main">
    <!-- Page Content -->
    <div class="container">
           <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" style="background-image: url('https://www.remotelands.com/remotenew1/dist/images/country/indonesia/city/5/b130418004.jpg')">
                    <div class="carousel-caption">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" style="background-image: url('https://i.pinimg.com/564x/ff/12/17/ff121708f886e4b73df4aa69b32d9566.jpg')">
                    <div class="carousel-caption">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                    <div class="carousel-caption">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

          {{-- @foreach ($galeri as $g)  --}}
         @foreach ($berita->galeri as $item)
          <div class="container">
            <br>
            <br>

            <center><h1 class="mb-4"> {{$item->judul_berita}} </h1>
            <img class="" src="{{asset('storage/'.$item->url_foto)}}" height="300"  alt=""></center>
            </br>
            <!-- Portfolio Item Row -->
            <div class="row">
              <div class="col-md-8">
                <div class="text-center">
               
              </div>
            </div>
            {{-- @endforeach --}}
              <div class="mb-4">
                <p>{!! $item->caption !!}</p>

                <p>{!! $item->isi_berita !!}</p>

              </div>
          @endforeach 
            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <h3 class="my-4">Related Projects</h3>

            <div class="row">

              <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                      <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                    </a>
              </div>

              <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                      <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                    </a>
              </div>
              <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                      <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                    </a>
              </div>

              <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                      <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                    </a>
              </div>

            </div>
            <!-- /.row -->
          </div>    


    </div>
<!-- /.container -->


  </main>

@stop