


@extends('layouts.frontend.master')
@section('content')

<link rel="stylesheet" href="assets/css/stylevirtualdetail.css">
<link rel="stylesheet" href="assets/css/slider.css">
<link rel="stylesheet" href="assets/css/reset.css">
<!-- ======= Hero Section ======= -->
<br/>

<div class="container">
    <div class="row">
        <body>
        <div class="col-md-12"></br>
            <a href="{{ url('virtual') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
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
                        @foreach ($virtual_tour as $virtual_tour)
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
                                    @endforeach
                                    <tr>
                                    <td>Metode Pembayaran</td>
                                        <td>:</td>
                                        <td>

                                            @csrf
                                               <div class="col-sm-10">
                                                <select name='sel_depart' class="form-select">
                                                <option value="BCA">BCA</option>
                                                </select>
                                               </div>
                                               </br></br>
                                               <a class='buttonz' method="post" href="{{ route('invoice', $virtual_tour->virtual_tour_id)}}" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Pesan </button>
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
@stop




