@extends('layouts.frontend.master')
@section('content')

<link rel="stylesheet" href="assets/css/stylevirtualdetail.css">
<link rel="stylesheet" href="assets/css/slider.css">
<link rel="stylesheet" href="assets/css/reset.css">
<!-- ======= Hero Section ======= -->

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="md-9">
                        Pembelian
                        <a href="{{ url('generate-invoice') }}" class="btn btn-success float-right py-1">Generate Invoice </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mt-3">
            <div class="card-body">
                <h5> Detail Pembelian </h5>
                <div clas="row">
                    <div class="col-md-4 mt-3">
                        <div class="border p-2">
                            <label>Tracking</label>
                            <h6> Tracking </h6>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="border p-2">
                            <label>Pesan Tracking </label>
                            <h6> {{ isset($orders->tracking_msg) == true ? $orders->tracking_msg:'Nothing Updated' }} </h6>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="border p-2">
                            <label>Pembelian</label>
                            <h6> {{ $orders->payment_mode }} </h6>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="border p-2">
                            <label> Status Pembelian </label>
                            <h6>
                                @if($orders->payment_status == '0')
                                Pending
                                @elseif($orders->payment_status == '1')
                                Paid
                                @elseif($orders->payment_status == '2')
                                Sukses
                                $elseif($orders->payment_status == '3')
                                Gagal
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="border p-2">
                            <label>Status Pembelian</label>
                            <h6>
                                @if($orders->payment_status == '0')
                                Pending
                                @elseif($orders->payment_status == '1')
                                Berhasil
                                @elseif($orders->payment_status == '2')
                                Gagal
                                @endif
                            </h6>
                        </div>
                    </div>

                </div class="col-md-4 mt-3">
                <div class="border p-2">
                    <label>ID Pembelian </label>
                    <h6> {{ isset ($order->payment_id) == true ? $orders->payment_id:'No Id'}} </h6>
                </div>
            </div>

        </div class="col-md-4 mt-3">
        <div class="border p-2">
            <label>Status Pembelian</label>
            <h6>
                @if($orders->payment_status == '0')
                Pending
                @elseif($orders->payment_status == '1')
                Berhasil
                @elseif($orders->payment_status == '2')
                Gagal
                @endif
            </h6>
        </div>
    </div>

    <div class="col-md-8 mt-3">
        <div class="border p-2">
            <label> Cancel </label>
            <h6> {{ isset ($orders->cancel_reason) == true ? $orders->cancel_reason:'Not Cancel' }} </h6>
        </div>
    </div>
</div>
<hr class="bg-dark">
<h5> Paket Pembelian <h5>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @php $total = "0"; @endphp
                @foreach ($orders->orderitems as $item)
                <tr>
                    <td> {{ $item->id }} </td>
                    <td> {{ $item->produk->nama }} </td>
                    <td> {{ $item->jumlah }} </td>
                    <td> {{ number_format ($item->harga, 0) }} </td>
                    <td> {{ $item->harga * $item->jumlah }} </td>
                </tr>
                @php $total = $total +($item->price * $item->jumlah) @endphp
                @endforeach
                <tr>
                    <td colspan="4" class="text-right">Total</td>
                    <td> {{ number_format($total, 0) }} </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-right">Tax </td>
                    <td>
                        @if(isset($item->tax_amt))
                        @php
                        $tax = $item->tax_amt;
                        $tax_total = ($total * $tax)/100;
                        @endphp
                        {{ number_format($tax_total) }}
                        @else
                        0
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>


<di


    
            @stop