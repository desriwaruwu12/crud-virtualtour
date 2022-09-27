<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Offline Tour</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">

@extends('admin.layouts.main')

@section('content')
    
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-text-short"></i>
          </span> Offline Tour
        </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                        <a href="{{ route('offline.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA OFFLINE TOUR</a>
                           <div class="table table-responsive">
                        <table class="table table-bordered">
                            <thead class="btn-primary">
                              <tr>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jenis Paket</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Jumlah Mimimum</th>
                                <th scope="col">Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($offline as $item)
                                <tr>
                                   
                                    <td>{{ $item->nama_paket }}</td>
                                    <td style=" white-space: normal !important;"> {!! $item->deskripsi !!}</td>
                                    <td>Rp. {{$item->harga}}</td>
                                    <td>{{ $item->jenis_paket }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('offline/') .$item->url_gambar}}" class="rounded" style="width: 80px; height:80px">
                                    </td>
                                    <td>{{ $item->jumlah_minimum }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('offline.destroy', $item->tour_offline_id) }}" method="POST">
                                            <a href="{{ route('offline.edit', $item->tour_offline_id) }}" class="btn btn-sm btn-primary">
                                              <i class="mdi mdi-pencil-box"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                              <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Tour Offline belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table> 
                        </div>
                      </div>
                    {{ $offline->links()}}
              </div>
        </div>
    </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</body>
</html>
@endsection