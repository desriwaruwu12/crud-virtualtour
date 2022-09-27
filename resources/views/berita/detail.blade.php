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
          </span> Berita
          {{Breadcrumbs::render('berita')}}
        </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                   
                        <a href="{{route('berita.index')}}" class="btn btn-md btn-success mb-3">Kembali</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>  
                                <th scope="col">Judul Berita</th>
                                <th scope="col">Isi Berita</th>
                                <th scope="col">Caption</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Nama Pembuat</th>
                              </tr>
                            </thead>
                            <tbody>   
                            
                            @forelse ($berita as $row)
                                <tr>
                                <td>{{$berita->judul_berita}}</td>
                                <td>{!!$berita->isi_berita!!}</td>
                                <td>{{$berita->caption}}</td>
                                <td>
                                <ul>
                                    @foreach($tag_berita as $row)
                                    <li> {{ $row->text_tag }} </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{$berita->name}}</td>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</body>
</html>
@endsection