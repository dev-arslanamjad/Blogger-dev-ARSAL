<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blogger | Admin LOGIN</title>
    <link href="{{ asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{ asset('admin_assets/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{ asset('admin_assets/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet">
    @stack('styles')

</head>

<body class="bg-light">
    <section class=" p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border border-light-subtle rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if(Session::has('error'))
                                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    @endif
                                    <div class="mb-5">
                                        <h1 class="text-center"><strong>Blogger - ADMIN</strong></h1>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('admin.authenticate') }}" method="post">
                                @csrf
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com">
                                            @error('email')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password">
                                            @error('password')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid text-center">
                                            <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>