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
                    <div class="img" style="background-image: url(asset/images/bg-1.jpg);"></div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4 text-center">Forgot Password?</h3>
                                <p>
                                    Don't worry! It happens. Please enter the email address with your account.
                                </p>
                            </div>
                        </div>
                        <form action="#" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group mt-3">
                                <input type="text" class="form-control mb-4" name="email" required>
                                <label class="form-control-placeholder" for="email">Email</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('admin.includes.script')

</body>
</html>
