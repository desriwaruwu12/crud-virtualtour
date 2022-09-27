<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Destinasi</title>
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
          </span> DESTINASI
          {{Breadcrumbs::render('destinasi')}}
        </h3>
      </div>
          
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                        <a href="{{ route('destinasi.create') }}" class="btn btn-md btn-success mb-3">Tambah Destinasi</a>
                        <div class="table table-responsive">
                        <table width="200px" class="table table-bordered table-hover">
                            <thead class="table-success">
                              <tr>
                                <th scope="col">Nama Destinasi</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Longitude</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            {{-- @dd($destinasi) --}}
                              @forelse ($destinasi as $destin)
                                <tr>
                                    {{-- <td class="text-center">
                                        <img src="{{ Storage::url('app/public/destinasi/').$destin->image }}" class="rounded" style="width: 150px">
                                    </td> --}}
                                    <td>{{ $destin->nama_destinasi }}</td>
                                    <td>{{ $destin->deskripsi }}</td>
                                    <td>{{ $destin->alamat }}</td>
                                    <td>{{ $destin->longitude }}</td>
                                    <td>{{ $destin->latitude }}</td>

                                    <td> 
                                        <ul>
                                         {{-- @dd($destin) --}}
                                         {{-- @dd($destin->galeri) --}}
                                            @foreach($destin->galeri as $row)
                                            <li><img src="{{ asset('storage/'.$row->url_foto) }}" class="rounded" style="width:150px;height:100px;"></li>

                                            @endforeach
                                        </ul>
                                    </td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destinasi.destroy', $destin->id) }}" method="POST">
                                            <a href="{{ route('destinasi.edit', $destin->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Destinasi belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                        
                    </div>
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