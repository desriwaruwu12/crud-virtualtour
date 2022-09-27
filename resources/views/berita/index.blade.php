<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Berita</title>
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
          </span> BERITA
          {{Breadcrumbs::render('berita')}}
        </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                   
                        <a href="{{route('berita.create')}}" class="btn btn-md btn-success mb-3">Tambah Berita</a>
                          <div class="table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                              <th scope="col">Gambar</th>
                                <th scope="col">Judul Berita</th>
                                <th scope="col">Isi Berita</th>
                                <th scope="col">Caption</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Nama Pembuat</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>


                            
                              @forelse ($berita as $berita)
                                <tr>
                                   
                                <td>
                                        <ul>
                                            @foreach($berita->galeri as $row)
                                            <li><img src="{{ asset('storage/'.$row->url_foto) }}" class="rounded" style="width: 150px"></li>
                                           
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ $berita->judul_berita }}</td>
                                    <td style="white-space: normal !important; 
                                    word-wrap: break-word;">{!! $berita->isi_berita !!}</td>
                                    <td style="white-space: normal !important; 
                                    word-wrap: break-word;">{{ $berita->caption }}</td>
                                    <td>
                                        <ul>
                                            @foreach($berita->tag as $row)
                                            <li> {{ $row->text_tag }} </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ $berita->name }}</td>
                                    
                                    <td class="text-center">

                                    

                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('berita.delete', $berita->id_berita) }}" method="POST">
                                            <a href="{{ route('berita.edit', $berita->id_berita) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                      </div>
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