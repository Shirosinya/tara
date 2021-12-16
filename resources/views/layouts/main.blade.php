<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>TARA | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/petro-logo.png"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/users/login-1.css" rel="stylesheet" type="text/css" /> -->
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="../../plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/accounting-dashboard/style.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/charts/c3charts/c3.min.css" rel="stylesheet" type="text/css" />    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="../../plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/table/datatable/custom_dt_ordering_sorting.css">
    <!-- toastr -->
    <!-- <link href="plugins/notification/toastr/toastr.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
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
            background: #fff url(../../assets/img/arrow-down.png) no-repeat right .75rem center;
            background-size: 13px 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        select.form-control::-ms-expand { display: none; }

        table.dataTable tr th.select-checkbox.selected::after {
            content: "✔";
            margin-top: -11px;
            margin-left: -4px;
            text-align: center;
            text-shadow: rgb(176, 190, 217) 1px 1px, rgb(176, 190, 217) -1px -1px, rgb(176, 190, 217) 1px -1px, rgb(176, 190, 217) -1px 1px;
        }
        #chart_google, #chart_google_c, #chart_pie, #chart_donut,
        #chart_3dpie, #chart_diffpie, #chart_line, #chart_area, #chart_combo 
        { width: 100%; height: 400px; font-size: 11px; }
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
            <a href="index.html" class=""> <img src="../../assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
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
                            <img src="../../assets/img/petro-logo.png" class="img-fluid" alt="logo">
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
                    </li>
                    @if(Auth::user()->role_id != '3')
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
                                        <a href="/jasakonsultan"> Jasa Konsultan </a>
                                    </li>
                                    <li>
                                        <a href="/jasaaudit"> Jasa Audit </a>
                                    </li>
                                    <li>
                                        <!-- <div class="col-sm-12"> -->
                                        <a href="/jasaTKAD" style="margin-left:20px;"> Jasa Tenaga Kerja Alih Daya </a> 
                                        <!-- </div> -->
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#sewa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Sewa <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="sewa">
                                    <li>
                                        <a href="/sewaperalatanpabrikkantor" style="margin-left:30px;"> Peralatan Pabrik & Kantor </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#lainnya" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  data-parent="#ecommerce"> Lainnya <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="lainnya">
                                    <li>
                                        <a href="/kehumasan"> Kehumasan </a>
                                    </li>
                                    <li>
                                        <a href="/inspeksiperijinan"> Inspeksi & Perijinan </a>
                                    </li>
                                    <li>
                                        <a href="/peralatankerja"> Peralatan Kerja </a>
                                    </li>
                                    <li>
                                        <a href="/peralatankantor"> Peralatan Kantor </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
                <div style="margin: 0px 10px 0px 10px; color: white;">
                    <p>TARA - Pencatatan Anggaran</p>
                    <!-- Developed by Fernaldi Widharsono -->
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
                        <img alt="admin-profile" src="../../assets/img/120x120.jpg" class="img-fluid rounded-circle mb-3">
                        <div class=" mt-2">
                            <h5 class="usr-name mb-0">{{$user->username}}</h5>
                            <p class="usr-occupation mb-0 mt-1">{{$user->name}}</p>
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
    <script src="../../assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="../../assets/js/loader.js"></script>
    <script src="../../plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/app.js"></script>
    <script src="../../plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/loadjs/4.2.0/loadjs.min.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="../../assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="../../plugins/charts/sparklines/jquery.sparkline.min.js"></script>
    <script src="../../plugins/charts/d3charts/d3.v3.min.js"></script>
    <script src="../../plugins/charts/c3charts/c3.min.js"></script>
    <script src="../../plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="../../plugins/calendar/pignose/pignose.calendar.js"></script>
    <script src="../../plugins/dropzone/dropzone.min.js"></script>
    <script src="../../plugins/progressbar/progressbar.min.js"></script>
    <script src="../../assets/js/accounting-dashboard/accounting-custom.js"></script>
    <script src="../../plugins/table/datatable/datatables.js"></script>
    <script src="../../plugins/charts/googlecharts/loader.js"></script>
    
    @yield('chart')
    
    <script>        
        $('#default-ordering').DataTable( {
            "columnDefs": [
            {
                "targets": [ 6 ],
                "sortable": false,
                "searchable": false
            }],
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            }, "order": [[ 0, "desc" ]],
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); },

        } );
        
        $('#default-ordering1').DataTable( {
            "columnDefs": [
            {
                "targets": [ 6 ],
                "sortable": false,
                "searchable": false
            }],
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            },
            "order": [[ 0, "desc" ]],
            // "columnDefs": [
            // {
            //     "targets": [ 6 ],
            //     "sortable": false,
            //     "searchable": false
            // },
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); },
	    } );
        
        $('#default-ordering2').DataTable( {
            "language": {
                "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
                "info": "Showing page _PAGE_ of _PAGES_"
            },
            "order": [[ 0, "asc" ]],
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); },
	    } );
    </script>
    <!-- Script Tabel Pengajuan -->
    <script>
        $("#head-cb").on('click',function(){
            if($("#head-cb").prop('checked')==true){
                $(".cb-child").prop('checked',true)
            }else{
                $(".cb-child").prop('checked',false)
            }
            if($("#head-cb").prop('checked')==true){
                $("#buttonSetujui").prop('disabled',false)
                $("#buttonDitolak").prop('disabled',false)
            }else{
                $("#buttonSetujui").prop('disabled',true)
                $("#buttonDitolak").prop('disabled',true)
            }
        })

        $("#default-ordering").on('click','.cb-child',function(){
            if($(this).prop('checked')!=true){
                $("#head-cb").prop('checked',false)
            }
            let semua_checkbox = $("#default-ordering .cb-child:checked")
            if(semua_checkbox.length > 0){
                $("#buttonSetujui").prop('disabled',false)
                $("#buttonDitolak").prop('disabled',false)
            }else{
                $("#buttonSetujui").prop('disabled',true)
                $("#buttonDitolak").prop('disabled',true)
            }
        })

    function setujuiButton(){
        let checkbox_terpilih = $("#default-ordering .cb-child:checked")
        let semua_id = []
        $.each(checkbox_terpilih, function(index,elm){
            semua_id.push(elm.value)
        })
        $("#buttonSetujui").prop('disabled',true)
        $.ajax({
            url:"{{url('')}}/sukucadang/setujui/pengajuan",
            method:"post",
            data:{ids:semua_id},
            success:function(result){
                // if(result === "no_errors"){
                //     location.href = "/sukucadang/setujui/pengajuan"
                // }
                window.top.location.reload(true)
                $("#buttonSetujui").prop('disabled',false)
            }
        })
    }

    function tolakButton(){
        let checkbox_terpilih = $("#default-ordering .cb-child:checked")
        let semua_id = []
        $.each(checkbox_terpilih, function(index,elm){
            semua_id.push(elm.value)
        })
        $("#buttonDitolak").prop('disabled',true)
        $.ajax({
            url:"{{url('')}}/sukucadang/tolak/pengajuan",
            method:"post",
            data:{ids:semua_id},
            success:function(result){
                // console.log("berhasil tolak")
                window.top.location.reload(true)
                $("#buttonDitolak").prop('disabled',false)
            }
        })
    }
    </script>
    <!-- Script Tabel Pengajuan END -->

    <!-- Script Tabel Realisasi -->
    <script>
        $("#head-cb2").on('click',function(){
            if($("#head-cb2").prop('checked')==true){
                $(".cb-child2").prop('checked',true)
            }else{
                $(".cb-child2").prop('checked',false)
            }
            if($("#head-cb2").prop('checked')==true){
                $("#buttonSetujui2").prop('disabled',false)
                $("#buttonDitolak2").prop('disabled',false)
            }else{
                $("#buttonSetujui2").prop('disabled',true)
                $("#buttonDitolak2").prop('disabled',true)
            }
        })

        $("#default-ordering1").on('click','.cb-child2',function(){
            if($(this).prop('checked')!=true){
                $("#head-cb2").prop('checked',false)
            }
            let semua_checkbox = $("#default-ordering1 .cb-child2:checked")
            if(semua_checkbox.length > 0){
                $("#buttonSetujui2").prop('disabled',false)
                $("#buttonDitolak2").prop('disabled',false)
            }else{
                $("#buttonSetujui2").prop('disabled',true)
                $("#buttonDitolak2").prop('disabled',true)
            }
        })

    function setujuiButton2(){
        let checkbox_terpilih = $("#default-ordering1 .cb-child2:checked")
        let semua_id = []
        $.each(checkbox_terpilih, function(index,elm){
            semua_id.push(elm.value)
        })
        $("#buttonSetujui2").prop('disabled',true)
        $.ajax({
            url:"{{url('')}}/sukucadang/setujui/realisasi",
            method:"post",
            data:{ids:semua_id},
            success:function(result){
                // if(result === "no_errors"){
                //     location.href = "/sukucadang/setujui/pengajuan"
                // }
                window.top.location.reload(true)
                $("#buttonSetujui2").prop('disabled',false)
            }
        })
    }

    function tolakButton2(){
        let checkbox_terpilih = $("#default-ordering1 .cb-child2:checked")
        let semua_id = []
        $.each(checkbox_terpilih, function(index,elm){
            semua_id.push(elm.value)
        })
        // console.log(semua_id)
        // console.log("tertolak")
        $("#buttonDitolak2").prop('disabled',true)
        $.ajax({
            url:"{{url('')}}/sukucadang/tolak/realisasi",
            method:"post",
            data:{ids:semua_id},
            success:function(result){
                console.log("berhasil tolak")
                window.top.location.reload(true)
                $("#buttonDitolak2").prop('disabled',false)
            }
        })
    }
    </script>
    <!-- Script Tabel Realisasi END-->
    
    <script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value);
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>
        
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->