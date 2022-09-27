@extends('layouts.frontend.master')
@section('content')

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/news.css')}}" rel="stylesheet">
   
  <main>
    <!--================Blog Area =================-->
        <!--<section class="blog_area section-padding">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-8 mb-5 mb-lg-0">-->
        <!--                <div class="blog_left_sidebar">-->
        <!--                    <article class="blog_item">-->
        <!--                        <div class="blog_details">                                -->
                                
        <!--                           @foreach ($galeri as $g) -->
        <!--                                <div class="blog_item_img">-->
        <!--                                    <a href= "{{ route('newsdetail', $g->id_berita) }}">-->
        <!--                                    <img class="card-img rounded-0" src="{{asset('storage/'.$g->url_foto)}}" alt="#"> -->
                                           
        <!--                                </div>-->
        <!--                                <a class="d-inline-block" href="{{ route('newsdetail', $g->id_berita) }}">-->
        <!--                                <br>   -->
        <!--                                    <h2>{{$g->judul_berita}}</h2>-->
        <!--                                </a>-->
        <!--                                <p>{!! $g->caption !!}</p>-->
        <!--                            @endforeach-->
                                   
                                    
        <!--                            <ul class="blog-info-link">-->
        <!--                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>-->
        <!--                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>-->
        <!--                            </ul>                                           -->
        <!--                        </div>-->
                                
                                  
        <!--                    </article>-->
                                 
        <!--                </div>-->
        <!--                <div class="d-flex justify-content-center">-->
        <!--                    {!! $galeri->links() !!}-->
        <!--                </div>-->
                        
        <!--            </div>-->

        <!--            <div class="col-lg-4">-->
        <!--                <div class="blog_right_sidebar">-->

        <!--                    <aside class="single_sidebar_widget post_category_widget">-->
        <!--                        <h4 class="widget_title">Category</h4>-->
        <!--                        <ul class="list cat-list">-->
        <!--                            <li>-->
        <!--                                <a href="#" class="d-flex">-->
        <!--                                    <p>Resaurant food</p>-->
        <!--                                    <p>(37)</p>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#" class="d-flex">-->
        <!--                                    <p>Travel news</p>-->
        <!--                                    <p>(10)</p>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#" class="d-flex">-->
        <!--                                    <p>Modern technology</p>-->
        <!--                                    <p>(03)</p>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#" class="d-flex">-->
        <!--                                    <p>Product</p>-->
        <!--                                    <p>(11)</p>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#" class="d-flex">-->
        <!--                                    <p>Inspiration</p>-->
        <!--                                    <p>(21)</p>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#" class="d-flex">-->
        <!--                                    <p>Health Care</p>-->
        <!--                                    <p>(09)</p>-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </aside>-->

        <!--                    <aside class="single_sidebar_widget popular_post_widget">-->
        <!--                        <h3 class="widget_title">Recent Post</h3>-->
        <!--                        <div class="media post_item">-->
        <!--                            @foreach ($galeri as $g)-->
        <!--                            <img src="{{asset('storage/'.$g->url_foto)}}" width="20%" height="40%" alt="post">-->
        <!--                            <div class="media-body">-->
        <!--                                <a href="single-blog.html">-->
        <!--                                    <h3>From life was you fish...</h3>-->
        <!--                                </a>-->
        <!--                                <p>January 12, 2019</p>-->
        <!--                            </div> -->
        <!--                            @endforeach-->
        <!--                        </div>-->
                               
        <!--                    </aside>-->
        <!--                    <aside class="single_sidebar_widget tag_cloud_widget">-->
        <!--                        <h4 class="widget_title">Tag Clouds</h4>-->
        <!--                        <ul class="list">-->
        <!--                            <li>-->
        <!--                                <a href="#">project</a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#">love</a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#">technology</a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#">travel</a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#">restaurant</a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#">life style</a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#">design</a>-->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                                <a href="#">illustration</a>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </aside>-->


        <!--                    <aside class="single_sidebar_widget instagram_feeds">-->
        <!--                        <h4 class="widget_title">Instagram Feeds</h4>-->
        <!--                        <ul class="instagram_row flex-wrap">-->
        <!--                            @foreach ($galeri as $g)-->
        <!--                            <li>-->
        <!--                                <a href="#">-->
        <!--                                    <img class="img-fluid" src="{{asset('storage/'.$g->url_foto)}}" alt="">-->
        <!--                                </a>-->
        <!--                            </li>-->
        <!--                            @endforeach -->

        <!--                        </ul>-->
        <!--                    </aside>-->


        <!--                    <aside class="single_sidebar_widget newsletter_widget">-->
        <!--                        <h4 class="widget_title">Newsletter</h4>-->

        <!--                        <form action="#">-->
        <!--                            <div class="form-group">-->
        <!--                                <input type="email" class="form-control" onfocus="this.placeholder = ''"-->
        <!--                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>-->
        <!--                            </div>-->
        <!--                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"-->
        <!--                                type="submit">Subscribe</button>-->
        <!--                        </form>-->
        <!--                    </aside>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        
         <section id="portfolio" class="portfolio mb-4">
            <div class="container-fluid">
        
            <div class="section-title">
        
                <div class="container mt-4">
                    <div class="row d-flex justify-content-center">
                        @foreach ($galeri as $g) 
                        <div class="card-berita card me-3 mt-4 shadow-sm py-4" style="width: 20rem; padding:0 !important;">
                       
                            <div class="blog_item_img">
                                <a href= "{{ route('newsdetail', $g->id_berita) }}">
                                <img class="card-img rounded-0" src="{{asset('storage/'.$g->url_foto)}}" alt="#" style="height: 270px"> 
                            </div>
                            
                            <a class="d-inline-block" href="{{ route('newsdetail', $g->id_berita) }}">
                                <br>   
                                    <p class="text-center" style="font-size:14px">{{$g->judul_berita}}</p>
                                </a>
                                <!--<p class="text-center">{!! $g->caption !!}</p>-->
                        </div>
                      @endforeach
                    </div>
                </div>   
            </div>
            
        </section>
        <!--================Blog Area =================-->
  </main>

@stop
