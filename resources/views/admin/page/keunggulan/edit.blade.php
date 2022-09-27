@extends('admin.layouts.main')

@section('content')    
<div class="main-panel">
  <div class="content-wrapper">
      <h3 class="page-title mb-3">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-plus"></i>
        </span> Edit Keunggulan
        

       
      </h3>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{route('keunggulan.update', $keunggulan->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="keunggulan">Keunggulan</label>
                    <textarea type="text" rows="14" class="form-control @error('keunggulan') is-invalid @enderror" name="keunggulan" placeholder="Keunggulan"> {{$keunggulan->keunggulan}} </textarea>
                    
                    @error('keunggulan')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="url_metafor">Url Metafor</label>
                    <input type="text" class="form-control @error('url_metafor') is-invalid @enderror" name="url_metafor" placeholder="Url Metafor" value="{{$keunggulan->url_metafor}}">

                    @error('url_metafor')
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

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'keunggulan' );
</script> 
@endsection