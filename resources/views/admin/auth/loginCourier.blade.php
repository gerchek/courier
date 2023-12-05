<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/medroc/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 11:31:32 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Medroc - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <!-- <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" /> -->
        <!-- Icons Css -->
        <!-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- App Css-->
        <!-- <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg d-flex align-items-center min-vh-100 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="index.html" class="d-block auth-logo">
                            <img src="assets/images/logo-dark.png" alt="" height="24" class="logo logo-dark mx-auto">
                            <img src="assets/images/logo-light.png" alt="" height="24" class="logo logo-light mx-auto">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="p-4">
                    <div class="card overflow-hidden mt-2">
                        <div class="auth-logo text-center bg-primary position-relative">
                            <div class="img-overlay"></div>
                            <div class="position-relative pt-4 py-5 mb-1">
                            </div>
                        </div>
                        <div class="card-body position-relative">
                            <div class="p-4 mt-n5 card rounded">
                                <form class="form-horizontal" action="{{ route('courier-validate_login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Login</label>
                                        <input type="email" class="form-control" id="name" placeholder="Enter login" name="email">
                                    </div>
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif

                                    <div class="mb-3">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">        
                                    </div>

                                    @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif


                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log IN</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>

        </div>

        <!-- JAVASCRIPT -->
        <!-- <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script> -->

    </body>

<!-- Mirrored from themesdesign.in/medroc/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 11:31:32 GMT -->
</html>
