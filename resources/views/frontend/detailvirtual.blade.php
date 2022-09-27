@extends('layouts.frontend.master1')
@section('content')


<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{asset('assets/css/stylevirtualdetail.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/reset.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/tampilan.css')}}"/>

<div class="container">
    <div class="row">
        <body>
            </br>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive" src="assets/img/about.jpg" width="600px" height="400px" alt="">
                            </div>
                            <div class="col-md-6 mt-5">

                                <font size="10">{{ $virtual_tour->nama_paket }} </font></br></br></br>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ $virtual_tour->harga }} </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pelaksanaan</td>
                                            <td>:</td>
                                            <td> {{ $virtual_tour->tanggal_pelaksanaan }} </td>
                                        </tr>
             
                                        <tr>
                                            <td>Metode Pembayaran</td>
                                            <td>:</td>
                                            <td>

                                                @csrf
                                                <div class="col-sm-10">
                                                    <select name='sel_depart' class="form-select">
                                                        <option value="0">BCA</option>
                                                    </select>
                                                
                                                    <div class="form-group mt-4 mb-4">
                                                        <div class="captcha">
                                                            <span>{!! captcha_img('math') !!}</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group mb-4">
                                                        <input id="captcha" type="text" class="form-control @error ('captcha') is-invalid @enderror" placeholder="Masukkan Captcha" name="captcha" require>

                                                        @error('captcha')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                             </body>

                                            </br></br>
                                            <a class='buttonz' method="post" href="{{ route('pesan', $virtual_tour->virtual_tour_id)}}" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Pesan </button>
                                                </form>
                                                </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </br></br>
     </body>

@endsection