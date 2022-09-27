<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
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
                    </span> User
                </h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                                    <a href="{{route('user.create')}}" class="btn btn-md btn-primary" style="color: #fff; background:linear-gradient(to right, #ce82ff, #ab64ff); border:none;">Tambah User</a>
                                </div>
                                   <div class="table table-responsive">

                                    <table class="table table-bordered">
                                        <thead style="color: #fff; background:linear-gradient(to right, #ce82ff, #ab64ff)">
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Level</th>
                                                <th scope="col">Aksi</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
    
                                            @forelse ($users as $user)
    
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->level }}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('user.delete',$user->id)}}" method="POST">
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
                                                Data User belum Tersedia.
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