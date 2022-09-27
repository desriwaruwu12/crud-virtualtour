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
          </span> HEADLINE
          {{Breadcrumbs::render('headline')}}
        </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                        <a href="{{ route('headline.create') }}" class="btn btn-md btn-success mb-3">Tambah Headline</a>
                          <div class="table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">URUTAN</th>
                                <th scope="col">FOTO</th>
                                <th scope="col">GET</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CAPTION</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($headline as $post)
                                <tr>
                                    <td>{{ $post->urutan }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('app/public/headline').'/'.$post->url_foto }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $post->url_get }}</td>
                                    <td>{{$post->judul}}</td>
                                    <td>{{ $post->caption }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('headline.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('headline.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Headline belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $headline->links() }}
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