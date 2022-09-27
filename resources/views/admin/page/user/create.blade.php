@extends('admin.layouts.main')

@section('content')    
<div class="main-panel">
  <div class="content-wrapper">
      <h3 class="page-title mb-3">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-plus"></i>
        </span> Tambah User
      </h3>
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form action="{{route('user.store')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="name" class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" rows="10" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Lengkap" />
                    
                    @error('name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="username" class="font-weight-bold">Username</label>
                    <input type="text" rows="10" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" />
                    
                    @error('username')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="text" rows="10" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" />
                    
                    @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>
                  
                  <div class="form-group">
                    <label for="password" class="font-weight-bold">Password</label>
                    <input type="text" rows="10" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" />
                    
                    @error('password')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="alamat" class="font-weight-bold">Alamat</label>
                    <input type="text" rows="10" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat" />
                    
                    @error('alamat')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="no_telepon" class="font-weight-bold">Nomor Telepon</label>
                    <input type="text" rows="10" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" placeholder="No Telepon" />
                    
                    @error('no_telepon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="level" class="font-weight-bold">Level</label>
                   <select name="level" class="form-control" id="level">
                     <option class="form-control" value="ADMIN">ADMIN</option>
                     <option class="form-control" value="costumer">costumer</option>
                   </select>

                    @error('level')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror

                  </div>

                  <button type="submit" class="btn btn-gradient-primary me-2">Tambah</button>
                  <a class="btn btn-light" href="{{route('user.index')}}">Batal</a>
                </form>
                 
              </div>
            </div>
          </div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
{{-- <script>
    CKEDITOR.replace( 'keunggulan' );
</script>  --}}
@endsection