<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head1')
</head>
<body>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="wrap">
                <div class="img" style="background-image: url(../../../asset/images/bg-1.jpg);"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4 text-center">Sign Up</h3>
                  </div>	
                </div>
                <form action="{{route('register.store')}}" method="POST" class="signin-form">
                  @csrf
                  <div class="form-group mt-3">
                    <input type="text" class="form-control mb-4" name="username" required>
                    <label class="form-control-placeholder" for="username">Username</label>
                  </div>

                  <div class="form-group mt-3">
                    <input type="text" class="form-control mb-4" name="name" required>
                    <label class="form-control-placeholder" for="name">Nama Lengkap</label>
                  </div>

                  <div class="form-group mt-3">
                    <input type="text" class="form-control mb-4" name="alamat" required>
                    <label class="form-control-placeholder" for="alamat">Alamat</label>
                  </div>

                  <div class="form-group mt-3">
                    <input type="text" class="form-control mb-4" name="no_telepon" required>
                    <label class="form-control-placeholder" for="no_telepon">Nomor Telepon</label>
                  </div>

                  <div class="form-group mt-3">
                    <input type="email" class="form-control mb-4" name="email" required>
                    <label class="form-control-placeholder" for="email">Email</label>
                  </div>

                  <div class="form-group">
                    <input id="password-field" type="password mb-4" name="password" class="form-control" required>
                    <label class="form-control-placeholder" for="password">Password</label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                  </div>

                </form>
                <p class="text-center">Have already an account ? <a data-toggle="tab" href="{{route('login')}}"> Sign In here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @include('admin.includes.script')
  
</body>
</html>