<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('supplier/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('supplier/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('supplier/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('supplier/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">


                                    {{-- <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                    action="{{ route('supplier.post.login') }}" method="POST">
                                    @csrf
                                    <div class="text-center mb-10">
                                        <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                                        <div class="text-gray-400 fw-bold fs-4">New Here?
                                            <a href="../../demo2/dist/authentication/layouts/aside/sign-up.html"
                                                class="link-primary fw-bolder">Create an Account</a>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                        <input
                                            class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                            type="text" name="email" value="{{ old('email') }}" autocomplete="off" />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-10">
                                        <div class="d-flex flex-stack mb-2">
                                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                            <a href="../../demo2/dist/authentication/layouts/aside/password-reset.html"
                                                class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                        </div>
                                        <input
                                            class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                            type="password" name="password" autocomplete="off" />
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        @if ($errors->has('login'))
                                            <div class="alert alert-danger">{{ $errors->first('login') }}</div>
                                        @endif
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">Continue</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                            <img alt="Logo"
                                                src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                                                class="h-20px me-3" />Continue with Google</a>
                                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                            <img alt="Logo"
                                                src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}"
                                                class="h-20px me-3" />Continue with Facebook </a>
        
        
                                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                            <img alt="Logo"
                                                src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}"
                                                class="h-20px me-3" />Continue with Apple</a>
                                    </div>
                                </form> --}}


                                    <form role="form" action="{{ route('supplier.post.login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Email" name="email" aria-label="Email">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                placeholder="Password" aria-label="Password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe"
                                                name="remember">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign
                                            up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                                    currency"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('supplier/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('supplier/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('supplier/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('supplier/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>

