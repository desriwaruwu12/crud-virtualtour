@extends('admin.layouts.main')

@section('content')    
<div class="main-panel">
  <div class="content-wrapper">
      <h3 class="page-title mb-3">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-plus"></i>
        </span> Edit Tour Offline
       
      </h3>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" action="{{route('offline.update', $offline->tour_offline_id)}}" method="POST">
                  @csrf
                  @method('PUT')

                  <div class="form-group">
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" name="nama_paket" value="{{$offline->nama_paket}}">

                    @error('nama_paket')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <textarea type="text" rows="14" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="deskripsi"> {{$offline->deskripsi}} </textarea>
                    
                    @error('deskripsi')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>
                  
                <div class="form-group">
                    <label class="font-weight-bold">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{$offline->harga}}">
                
                    <!-- error message untuk title -->
                    @error('harga')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="font-weight-bold" for="jenis_paket">Pilih Paket</label>

                    <select style="color:#000000aa" class="form-control" name="jenis_paket" value="{{$offline->id}}">{{$offline->jenis_paket}}
                          <option value="Honeymoon" {{$offline->jenis_paket == "Honeymoon" ? 'selected' : ''}}>Honeymoon</option>
                          <option value="Paket Besar" {{$offline->jenis_paket == "Paket Besar" ? 'selected' : ''}}>Paket Besar</option>
                          <option value="Paket Sedang" {{$offline->jenis_paket == "Paket Sedang" ? 'selected' : ''}}>Paket Sedang</option>
                          <option value="Paket Kecil" {{$offline->jenis_paket == "Paket Kecil" ? 'selected' : ''}}>Paket Kecil</option>
                    </select>
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Jumlah Minimum</label>
                  <input type="text" class="form-control @error('jumlah_minimum') is-invalid @enderror" name="jumlah_minimum" value="{{ old('jumlah_minimum', $offline->jumlah_minimum)}}" >

                  <!-- error message untuk title -->
                  @error('jumlah_minimum')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
              </div>

                <div class="form-group">
                    <label class="font-weight-bold">Gambar</label>
                    <input type="file" class="form-control @error('url_gambar') is-invalid @enderror" name="url_gambar" value="{{ old('url_gambar', $offline->url_gambar)}}" >

                    <!-- error message untuk title -->
                    @error('url_gambar')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                  <button type="submit" class="btn btn-gradient-primary me-2">Ubah</button>
                  <a class="btn btn-light" href="{{route('offline.index')}}">Batal</a>
                </form>
              </div>
            </div>
          </div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'deskripsi' );
</script> 

<script>
  //message with toastr
  @if(session()->has('success'))
  
      toastr.success('{{ session('success') }}', 'BERHASIL!'); 

  @elseif(session()->has('error'))

      toastr.error('{{ session('error') }}', 'GAGAL!'); 
      
  @endif
</script>

@endsection