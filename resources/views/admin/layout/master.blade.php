<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/medroc/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 11:21:17 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Medroc - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                            <!-- App Search-->
                            <!-- <form class="app-search d-none d-lg-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="ri-search-line"></span>
                                </div>
                            </form> -->

                        </div>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <a href="{{route('admin-profile')}}">
                            <div class="dropdown d-inline-block user-dropdown">
                                    <img class="rounded-circle header-profile-user" src="{{ asset('images/admin.jpg') }}" alt="Header Avatar">
                            </div>
                        </a>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('backend')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('images/courier.jpg') }}" alt="" height="22" style="width: 43%;height: auto;">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('images/courier.jpg') }}" alt="" height="22" style="width: 43%;height: auto;">
                        </span>
                    </a>

                    <a href="{{route('backend')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('images/courier.jpg') }}" alt="" height="22" style="width: 43%;height: auto;">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('images/courier.jpg') }}" alt="" height="22" style="width: 43%;height: auto;">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <x-sidebar/>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        @yield('content')
                       
                    </div><!-- end row -->
                    
                </div>
                <!-- End Page-content -->
               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

        @yield('customjs')

        

        <!-- jquery.vectormap map -->
        <script src="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

        <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>


<!-- Mirrored from themesdesign.in/medroc/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 11:23:53 GMT -->
</html>