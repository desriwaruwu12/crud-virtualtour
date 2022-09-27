<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data keunggulan</title>
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
                    </span> KEUNGGULAN
                
                    {{Breadcrumbs::render('keunggulan')}}
                  
                </h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                                    <a href="{{route('keunggulan.create')}}" class="btn btn-md btn-primary" style="color: #fff; background:linear-gradient(to right, #ce82ff, #ab64ff); border:none;">Tambah Keunggulan</a>
                                </div>
                                   <div class="table table-responsive">
                                <table class="table table-bordered">
                                    <thead style="color: #fff; background:linear-gradient(to right, #ce82ff, #ab64ff)">
                                        <tr>
                                            <th scope="col">Keunggulan</th>
                                            <th scope="col">Url Metafor</th>
                                            <th scope="col">Visi</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($keunggulans as $item)

                                        <tr>
                                            <td>{!! $item->keunggulan !!}</td>
                                            <td>{{ $item->url_metafor }}</td>
                                            <td>{!! $item->visi !!}</td>
                                            <td>{{ $item->name }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('keunggulan.delete',$item->id)}}" method="POST">
                                                    <a href="{{route('keunggulan.edit',$item->id)}}" class="btn btn-sm btn-success">
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
                                            Data keunggulan belum Tersedia.
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

        @endsection