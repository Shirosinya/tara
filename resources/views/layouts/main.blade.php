<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>TARA | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/users/login-1.css" rel="stylesheet" type="text/css" /> -->
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/accounting-dashboard/style.css" rel="stylesheet" type="text/css" />
    <link href="plugins/charts/c3charts/c3.min.css" rel="stylesheet" type="text/css" />    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>
<body>
    
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav flex-row ml-lg-auto">
            <li class="nav-item dropdown cs-toggle d-lg-none"> 
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="flaticon-user-fill d-lg-none" style = "margin-right: 20px;"></span>
                </a>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->
@yield('body')
    <!--  USER INFO CONTROL SIDEBAR  -->
    <aside class="control-sidebar control-sidebar-light-color cs-content">
        <div class="">
            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="close-sidebar">
                        <i class="flaticon-close-fill p-3 toggle-control-sidebar"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="usr-info text-center mb-5">
                        <img alt="admin-profile" src="assets/img/120x120.jpg" class="img-fluid rounded-circle mb-3">
                        <div class=" mt-2">
                            <h5 class="usr-name mb-0">Linda Nelson</h5>
                            <p class="usr-occupation mb-0 mt-1">Developer</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"><i class="mr-1 flaticon-power-button"></i> <span style="color: red;">Log Out</span></button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--  END CONTROL SIDEBAR  -->
</body>
    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer" style="text-align:center;">&#xA9; 2019 Departemen Kemananan Petrokimia Gresik</p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/loader.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/charts/sparklines/jquery.sparkline.min.js"></script>
    <script src="plugins/charts/d3charts/d3.v3.min.js"></script>
    <script src="plugins/charts/c3charts/c3.min.js"></script>
    <script src="plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="plugins/calendar/pignose/pignose.calendar.js"></script>
    <script src="plugins/dropzone/dropzone.min.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="assets/js/accounting-dashboard/accounting-custom.js"></script>
        
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->