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

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_ordering_sorting.css">
    <!-- END PAGE LEVEL STYLES -->

    <style>
        .form-control {
            border: 1px solid #ccc;
            color: #888ea8;
            font-size: 15px;
        }
        code { color: #3862f5; }
        .form-control:disabled, .form-control[readonly] { background-color: #f1f3f9; border-color: #f1f3f1; }
        .btn-primary.disabled, .btn-primary:disabled { background-color: #3862f5; border-color: #3862f5; }
        label { color: #3b3f5c; margin-bottom: 14px; }
        .form-control::-webkit-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-ms-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-moz-placeholder { color: #888ea8; font-size: 15px; }
        .form-control:focus { border-color: #3862f5; }
        .input-group-text {
            background-color: #f3f4f7;
            border-color: #e9ecef;
            color: #6156ce;
        }
        select.form-control {
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            vertical-align: middle;
            background: #fff url(assets/img/arrow-down.png) no-repeat right .75rem center;
            background-size: 13px 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        select.form-control::-ms-expand { display: none; }
    </style>
    <!--  BEGIN CUSTOM STYLE FILE  -->
</head>
<body>
    
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle" style="margin-top:5px;">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2" style="color: white;"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav flex-row ml-lg-auto">
            <li class="nav-item dropdown cs-toggle d-lg-none"> 
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <i class="flaticon-user-fill d-lg-none" style = "margin-top: 8px; margin-right:30px; font-size: 1.5em; color: white;"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header END -->
       <!--  BEGIN NAVBAR  -->
       <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        <ul class="navbar-nav flex-row ml-lg-auto">            
            <li class="nav-item dropdown cs-toggle order-lg-0 order-3"> 
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="flaticon-user-fill d-lg-inline-block d-none"></span>
                    <!-- <span class="flaticon-user-fill d-lg-none"></span> -->
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            <nav id="sidebar">
                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="index.html" class="navbar-brand">
                            <img src="assets/img/logo-3.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> TARA </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="/" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-2"></i>
                                <span>Anggaran</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="/sukucadang"> Suku Cadang </a>
                            </li>
                            <li>
                                <a href="#jasa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Jasa <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="jasa">
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Jasa Konsultan </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_2.html"> Jasa Audit </a>
                                    </li>
                                    <li>
                                        <!-- <div class="col-sm-12"> -->
                                        <a href="ecommerce_product_details_2.html" style="margin-left:20px;"> Jasa Tenaga Kerja Alih Daya </a> 
                                        <!-- </div> -->
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#sewa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Sewa <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="sewa">
                                    <li>
                                        <a href="ecommerce_product_details_1.html" style="margin-left:30px;"> Peralatan Pabrik & Kantor </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#lainnya" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Lainnya <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="lainnya">
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Kehumasan </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Inspeksi & Perijinan </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Peralatan Kerja </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Peralatan Kantor </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>Petty Cash</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features"  data-parent="#accordionExample">
                            <li>
                                <a href="ui_loader.html"> Biaya </a>
                            </li>
                            <li>
                                <a href="ui_loader.html"> Top Up </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div style="margin: 0px 10px 0px 10px; color: white;">
                    <p>TARA - Pencatatan Anggaran</p>
                    <p>Developed by Fernaldi W.</p>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
    <!-- END MAIN CONTAINER --> 

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
                        <br>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="mr-1 flaticon-power-button"></i> <span style="color: white;">Log Out</span></button>
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
    <script src="plugins/table/datatable/datatables.js"></script>
    <script>        
        $('#default-ordering').DataTable( {
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }, "order": [[ 3, "desc" ]],
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
	    } );

        $('#default-ordering1').DataTable( {
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }, "order": [[ 3, "desc" ]],
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
	    } );
    </script>
        
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->