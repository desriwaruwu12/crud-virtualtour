<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Work</title>
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
          </span> WORK
          {{Breadcrumbs::render('work1')}}
        </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                        <a href="{{ route('work.create') }}" class="btn btn-md btn-success mb-3">Tambah Work</a>
                         <div class="table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">DESKRIPSI</th>
                                    <th scope="col">JENIS</th>
                                    <th scope="col">ID USER</th>
                                    <th scope="col">FOTO</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($work as $work)
                                <tr>
                                    <td style="white-space: normal !important; 
                                    word-wrap: break-word;">{{ $work->deskripsi }}</td>
                                    <td>{!! $work->jenis !!}</td>
                                    <td>{{ $work->name }}</td>

                                    <td>
                                        <ul>
                                            @foreach($work->galeri as $row)
                                            <li><img src="{{ asset('storage/'.$row->url_foto) }}" class="rounded"></li>

                                            @endforeach
                                        </ul>
                                    </td>
                    

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('work.destroy', $work->id_work) }}" method="POST">
                                            <a href="{{ route('work.edit', $work->id_work) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Work belum Tersedia.
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
    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>
@endsection