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
          {{Breadcrumbs::render('berita.create')}}
        </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="mb-4">
                    <form action="{{route('berita.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

            <div class="col-lg-4">

                <h5>Berita</h5>
                
                      

                    <div class="form-group">
            <label>judul_berita</label>
            <input type="text" name="judul_berita" class="form-control" placeholder="judul_berita" required>
        </div>
        
        <div class="form-group">
            <label>caption</label>
            <input type="text" name="caption" class="form-control" placeholder="caption" required>
        </div>
      
    
        <div class="form-group">
            <label>text tag</label>
            <input type="text" name="text_tag" class="form-control" placeholder="text tag" required>
        </div>

        <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" class="form-control @error('url_foto') is-invalid @enderror" name="url_foto[]" required multiple>
          </div>
          <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
              
       
            </div>    
            
            <div class="col-lg-8">
            
                <label class="font-weight-bold">Isi Berita</label>
                <textarea class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" rows="5" placeholder="Masukkan Konten Post">{{ old('isi_berita') }}</textarea>            
                               
                    <!-- error message untuk content -->
                        @error('content')
                            <div class="alert alert-danger mt-2">
                            {{ $message }}
                            </div>
                        @enderror
            </div>                   
           
    </form>

    
                </div>

            </div>

        </div>

    </div>

</div>                
                  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi_berita' );
    
</script>


</body>
</html>
@endsection