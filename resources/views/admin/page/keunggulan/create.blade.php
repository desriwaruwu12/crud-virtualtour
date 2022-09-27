@extends('admin.layouts.main')

@section('content')    
<div class="main-panel">
  <div class="content-wrapper">
      <h3 class="page-title mb-3">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-plus"></i>
        </span> Tambah Keunggulan
        {{Breadcrumbs::render('keunggulan.create')}}
      </h3>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form action="{{route('keunggulan.store')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="keunggulan" class="font-weight-bold">Keunggulan</label>
                    <textarea type="text" rows="10" class="form-control @error('keunggulan') is-invalid @enderror" name="keunggulan"> </textarea>
                    
                    @error('keunggulan')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="url_metafor" class="font-weight-bold">Url Metafor</label>
                    <input type="text" class="form-control @error('url_metafor') is-invalid @enderror" name="url_metafor" placeholder="Url Metafor">

                    @error('url_metafor')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="about_us_id" class="font-weight-bold">About Us</label>
                    {{-- <input type="text" class="form-control @error('about_us_id') is-invalid @enderror" name="about_us_id" placeholder="About Us"> --}}
                   <select name="about_us_id" style="height:80px;" class="form-control" id="">
                     @foreach ($abouts as $item)
                     <option class="form-control" style="height:80px;" value="{{$item->id}}">
                      {{$item->visi}}
                    </option>
                     @endforeach
                   </select>

                    @error('about_us_id')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <input type="hidden" name="updater" value="{{Auth::user()->name}}">                
                  </div>
                  <button type="submit" class="btn btn-gradient-primary me-2">Tambah</button>
                  <a class="btn btn-light" href="{{route('keunggulan.index')}}">Batal</a>
                </form>
                 
              </div>
            </div>
          </div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
{{-- <script>
    CKEDITOR.replace( 'keunggulan' );
</script>  --}}
@endsection