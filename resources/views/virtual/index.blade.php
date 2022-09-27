<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Virtual Tour</title>
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
          </span> Virtual Tour
                </h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                                    <a href="{{route('virtual.create')}}" class="btn btn-md btn-success mb-3">TAMBAH VIRTUAL TOUR</a>
                                    <div class="table table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="btn-primary">
                                            <tr>
                                                <th scope="col">GAMBAR</th>
                                                <th scope="col">PAKET</th>
                                                <th scope="col">HARGA</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">AKSI</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($virtual as $post)
                                                <tr>
                                                    <td class="text-center">
                                                        <img src="{{ Storage::url('virtual/') .$post->url_gambar }}" class="rounded" style="width: 150px">
                                                    </td>
                                                    <td>{{$post->nama_paket }}</td>
                                                    <td>Rp.{{$post->harga }}</td>
                                                    <td>{{$post->deskripsi}}</td>
                                                    <td class="text-center">
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('virtual.destroy', $post->virtual_tour_id) }}" method="POST">
                                                            <a href= "{{ route('virtual.edit', $post->virtual_tour_id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                                {{ $virtual->links()}}
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
