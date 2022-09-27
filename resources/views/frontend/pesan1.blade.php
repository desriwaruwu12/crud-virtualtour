@extends('layouts.frontend.master2')
@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/css/stylevirtualdetail.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/reset.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/tampilan2.css')}}"/>

<!------ Include the above in your HEAD tag ---------->
<div>
    <div class="container">
        <div class="card-body">
            <div class="form-group row pb-5">
            <div class="row">
                <div class="clas-md-12">
                    <div class="card">
                        <div class="card-body">
                            </br></br>
                            <h6 class="md-5">
                                <p align="right"><a href="{{ route('cetak_pdf' , $pemesanan_virtual_tour_id) }}" class="btn btn-success float-right">GENERATE PDF</a></p>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
</br>
            <tr>
                <th scope="col">No Invoice : </th>
            </tr>
            <tbody>

                <tr>
                    <td> {{ $virtual_tour->virtual_tour_id }} </td>
                </tr>
            </tbody>

            <div class="card-body border-top pb-5 p-0 mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col" style="width: 200px;">Total</th>
                            <th scope="col" style="width: 10px;"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            
                            <td> 1 </td>
                            <td> {{ $virtual_tour->nama_paket }} </td>
                            <td>Rp. {{ number_format($virtual_tour->harga)}}</td>
                            <td>Rp. {{ number_format($virtual_tour->harga)}}</td>
                            <td></td>
                        </tr>
                       
                    </tbody>
                    <tfoot>
                        <td></td>
                        <td></td> 
                        <td style="text-align:right;">Total Harga</td>
                        <td>Rp. {{ number_format($virtual_tour->harga)}}
                    </tfoot>
                </table>
                <div class="">
                    <button type="button" wire:click="save" class="btn btn-success btn-sm float-right">Bayar</button>
                </div>
            </div>
        </div>
    </div>



    @push('scripts')
    @endpush
    @stop