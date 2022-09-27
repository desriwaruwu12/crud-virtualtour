<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data About</title>
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
          </span> ABOUT
          {{Breadcrumbs::render('about')}}
        </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                                    <a href="{{route('about.add')}}" class="btn btn-md btn-primary" style="color: #fff; background:linear-gradient(to right, #ce82ff, #ab64ff); border:none;">Tambah About</a>
                                    {{-- <a href="{{route('dashboard')}}" class="btn btn-md btn-light">Kembali</a> --}}
                                </div>
                                <table class="table table-responsive table-bordered">
                                <thead style="color: #fff; background:linear-gradient(to right, #ce82ff, #ab64ff)">
                                    <tr>
                                            <th scope="col">Visi</th>
                                            <th scope="col">Misi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">No Kontak</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Url Instagram</th>
                                            <th scope="col">Url Twitter</th>
                                            <th scope="col">Url Facebook</th>
                                            <th scope="col">Url Youtube</th>
                                            <th scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @forelse ($about as $about)
                                        
                                        <tr>
                                            <td>{!! $about->visi !!}</td>
                                            <td>{!! $about->misi !!}</td>
                                            <td>{!! $about->deskripsi !!}</td>
                                            <td>{{ $about->no_contact }}</td>
                                            <td>{{ $about->alamat }}</td>
                                            <td>{{ $about->email }}</td>
                                            <td>{{ $about->ig_url }}</td>
                                            <td>{{ $about->twitter_url }}</td>
                                            <td>{{ $about->fb_url }}</td>
                                            <td>{{ $about->youtube_url }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('about.destroy',$about->id)}}" method="POST">
                                                    <a href="{{route('about.edit',$about->id)}}" class="btn btn-sm btn-success">
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
                                            Data About belum Tersedia.
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
    
@endsection