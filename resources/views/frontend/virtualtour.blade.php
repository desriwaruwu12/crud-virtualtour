@extends('layouts.frontend.master')
@section('content')
    {{-- CSS MASTER --}}
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/css/offtour.css" rel="stylesheet">
    <style>
        h2 {
            color: #000;
            font-size: 26px;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            margin: 30px 0 80px;
        }
        h2 b {
            color: #002fff;
        }
        h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 4px;
            background: rgba(0, 0, 0, 0.2);
            left: 0;
            right: 0;
            bottom: -20px;
        }
        .item-price span {
            color: #86bd57;
            font-size: 110%;
        }
    </style>


    <div class="container-fluid">
        <div class="px-lg-5">

            <h2>Virtual <b>Tour</b></h2>
            <div class="row">
                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/33/a1/e1/33a1e1cbfb6089545e05452b52eb07fb.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Jelajahi Malioboro yang iconic</a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <a href="{{ ('vdetail') }}" class="btn btn-primary">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/92/81/43/92814362894f576535559e0a04f5d7e9.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Melihat Borobudur secara lenkap</a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <a href="{{ ('vdetail') }}" class="btn btn-primary">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/b4/fb/b9/b4fbb950f0ff93b970cc3463d0403573.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Ikuti keseruan ngecamp di Bukit Klangon </a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <a href="{{ ('vdetail') }}" class="btn btn-primary">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->


                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/30/36/55/303655abd035ce58bc79f29e83af7a3c.jpg" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Sunset an di Parangtritis makin romantis</a></h5>
                            <p class="item-price"><span>Rp. 200.000</span></p>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <a href="{{ ('vdetail') }}" class="btn btn-primary">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <div class="py-5 text-center"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
            </div>

        </div>
    </div>
@stop
