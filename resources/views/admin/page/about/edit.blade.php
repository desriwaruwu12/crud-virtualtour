@extends('admin.layouts.main')

@section('content')

<div class="content-wrapper">
    <h3 class="page-title mb-3">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-plus"></i>
      </span> Edit About
      {{Breadcrumbs::render('about.add1')}}
    </h3>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('about.update', $abouts->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label class="font-weight-bold">VISI</label>
                                <textarea type="text" class="form-control @error('visi') is-invalid @enderror" name="visi" placeholder="Masukkan Visi">{{$abouts->visi}}</textarea>
                            
                                <!-- error message untuk title -->
                                @error('visi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">MISI</label>
                                <input type="text" class="form-control @error('misi') is-invalid @enderror" name="misi" value="{{$abouts->misi}}" placeholder="Masukkan Misi">
                            
                                <!-- error message untuk title -->
                                @error('misi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">DESKRIPSI</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{$abouts->deskripsi}}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NO CONTACT</label>
                                <input type="text" class="form-control @error('no_contact') is-invalid @enderror" name="no_contact" value="{{$abouts->no_contact}}" placeholder="Masukkan no contact">
                            
                                <!-- error message untuk title -->
                                @error('no_contact')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ALAMAT</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$abouts->alamat}}" placeholder="Masukkan alamat">
                            
                                <!-- error message untuk title -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">EMAIL</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$abouts->email}}" placeholder="Masukkan email">
                            
                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">IG URL</label>
                                <input type="text" class="form-control @error('ig_url') is-invalid @enderror" name="ig_url" value="{{$abouts->ig_url}}" placeholder="Masukkan ig url">
                            
                                <!-- error message untuk title -->
                                @error('ig_url')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TWITTER URL</label>
                                <input type="text" class="form-control @error('twitter_url') is-invalid @enderror" name="twitter_url" value="{{$abouts->twitter_url}}" placeholder="Masukkan twitter url">
                            
                                <!-- error message untuk title -->
                                @error('twitter_url')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">FB URL</label>
                                <input type="text" class="form-control @error('fb_url') is-invalid @enderror" name="fb_url" value="{{$abouts->fb_url}}" placeholder="Masukkan fb url">
                            
                                <!-- error message untuk title -->
                                @error('fb_url')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">YOUTUBE URL</label>
                                <input type="text" class="form-control @error('youtube_url') is-invalid @enderror" name="youtube_url" value="{{$abouts->youtube_url}}" placeholder="Masukkan youtube url">
                            
                                <!-- error message untuk title -->
                                @error('youtube_url')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Ubah</button>
                            <a class="btn btn-light" href="{{route('keunggulan.index')}}">Batal</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'visi' );
    CKEDITOR.replace( 'misi' );
    CKEDITOR.replace( 'deskripsi');
</script> 

@endsection