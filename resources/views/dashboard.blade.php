@extends('layouts.main')
@section('title','Dashboard')
@section('content')

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Anggaran Departemen Keamanan {{$year}}</h3>
                    </div>
                </div>
                <div class="row layout-spacing accounts-widgets">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi1/$pengajuan1*100) <= 25 ? 'income' : (($realisasi1/$pengajuan1*100) <= 50 ? 'cogs' : (($realisasi1/$pengajuan1*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan1,2,',','.')}}</h6>
                                    <p class="mt-2">Suku Cadang</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-currency"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi1/$pengajuan1*100) <= 25 ? 'primary' : (($realisasi1/$pengajuan1*100) <= 50 ? 'success' : (($realisasi1/$pengajuan1*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi1/$pengajuan1*100)}}%" aria-valuenow="{{($realisasi1/$pengajuan1*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi1,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi2/$pengajuan2*100) <= 25 ? 'income' : (($realisasi2/$pengajuan2*100) <= 50 ? 'cogs' : (($realisasi2/$pengajuan2*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan2,2,',','.')}}</h6>
                                    <p class="mt-2" style="margin-bottom:-30px;">Jasa Konsultan</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-dollar-coin"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi2/$pengajuan2*100) <= 25 ? 'primary' : (($realisasi2/$pengajuan2*100) <= 50 ? 'success' : (($realisasi2/$pengajuan2*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style= "width: {{($realisasi2/$pengajuan2*100)}}%" aria-valuenow="{{($realisasi2/$pengajuan2*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi2,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi3/$pengajuan3*100) <= 25 ? 'income' : (($realisasi3/$pengajuan3*100) <= 50 ? 'cogs' : (($realisasi3/$pengajuan3*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan3,2,',','.')}}</h6>
                                    <p class="mt-2">Jasa Audit</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-dollar-coin"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi3/$pengajuan3*100) <= 25 ? 'primary' : (($realisasi3/$pengajuan3*100) <= 50 ? 'success' : (($realisasi3/$pengajuan3*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi3/$pengajuan3*100)}}%" aria-valuenow="{{($realisasi3/$pengajuan3*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi3,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi4/$pengajuan4*100) <= 25 ? 'income' : (($realisasi4/$pengajuan4*100) <= 50 ? 'cogs' : (($realisasi4/$pengajuan4*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan4,2,',','.')}}</h6>
                                    <p class="mt-2" style="margin-bottom:-30px;">Jasa Tenaga Kerja & Alih Daya</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-dollar-coin"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi4/$pengajuan4*100) <= 25 ? 'primary' : (($realisasi4/$pengajuan4*100) <= 50 ? 'success' : (($realisasi4/$pengajuan4*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi4/$pengajuan4*100)}}%" aria-valuenow="{{($realisasi4/$pengajuan4*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi4,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row layout-spacing accounts-widgets">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi5/$pengajuan5*100) <= 25 ? 'income' : (($realisasi5/$pengajuan5*100) <= 50 ? 'cogs' : (($realisasi5/$pengajuan5*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan5,2,',','.')}}</h6>
                                    <p class="mt-2" style="margin-bottom:-30px; margin-right: 40px;">Sewa Peralatan Pabrik & Kantor</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-money"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi5/$pengajuan5*100) <= 25 ? 'primary' : (($realisasi5/$pengajuan5*100) <= 50 ? 'success' : (($realisasi5/$pengajuan5*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi5/$pengajuan5*100)}}%" aria-valuenow="{{($realisasi5/$pengajuan5*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi5,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi6/$pengajuan6*100) <= 25 ? 'income' : (($realisasi6/$pengajuan6*100) <= 50 ? 'cogs' : (($realisasi6/$pengajuan6*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan6,2,',','.')}}</h6>
                                    <p class="mt-2">Kehumasan</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-wallet"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi6/$pengajuan6*100) <= 25 ? 'primary' : (($realisasi6/$pengajuan6*100) <= 50 ? 'success' : (($realisasi6/$pengajuan6*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi6/$pengajuan6*100)}}%" aria-valuenow="{{($realisasi6/$pengajuan6*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi6,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi7/$pengajuan7*100) <= 25 ? 'income' : (($realisasi7/$pengajuan7*100) <= 50 ? 'cogs' : (($realisasi7/$pengajuan7*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan7,2,',','.')}}</h6>
                                    <p class="mt-2">Inspeksi & Perijinan</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-wallet"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi7/$pengajuan7*100) <= 25 ? 'primary' : (($realisasi7/$pengajuan7*100) <= 50 ? 'success' : (($realisasi7/$pengajuan7*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi7/$pengajuan7*100)}}%" aria-valuenow="{{($realisasi7/$pengajuan7*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi7,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi8/$pengajuan8*100) <= 25 ? 'income' : (($realisasi8/$pengajuan8*100) <= 50 ? 'cogs' : (($realisasi8/$pengajuan8*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan8,2,',','.')}}</h6>
                                    <p class="mt-2" style="margin-bottom:-30px;">Peralatan Kerja</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-wallet"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi8/$pengajuan8*100) <= 25 ? 'primary' : (($realisasi8/$pengajuan8*100) <= 50 ? 'success' : (($realisasi8/$pengajuan8*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi8/$pengajuan8*100)}}%" aria-valuenow="{{($realisasi8/$pengajuan8*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi8,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row layout-spacing accounts-widgets">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-{{($realisasi9/$pengajuan9*100) <= 25 ? 'income' : (($realisasi9/$pengajuan9*100) <= 50 ? 'cogs' : (($realisasi9/$pengajuan9*100) <= 75 ? 'profit' : 'expenses'))}}">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <h6 class="value">Rp. {{number_format($pengajuan9,2,',','.')}}</h6>
                                    <p class="mt-2" style="margin-bottom:-30px; margin-right: 40px;">Peralatan Kantor</p>
                                </div>
                                <div class="col-md-3 col-3 text-right" style="margin-left:-20px;">
                                    <i class="flaticon-wallet"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-{{($realisasi9/$pengajuan9*100) <= 25 ? 'primary' : (($realisasi9/$pengajuan9*100) <= 50 ? 'success' : (($realisasi9/$pengajuan9*100) <= 75 ? 'warning' : 'danger'))}}" role="progressbar" style="width: {{($realisasi9/$pengajuan9*100)}}%" aria-valuenow="{{($realisasi9/$pengajuan9*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="col-md-12 col-12">
                                <p style="margin-left:-15px;">Realisasi: <strong>Rp. {{number_format($realisasi9,2,',','.')}}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Grafik Anggaran Akumulatif Departemen Keamanan Tahun {{$year}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <div id="chart_line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->
@endsection
@section('chart')
    <script>
        (function() {
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Bulan', 'Rencana', 'Realisasi'],
        ['Jan',  {{$peng_arr[0]}},      {{$real_arr[0]}}],
        ['Feb',  {{$peng_arr[1]}},      {{$real_arr[1]}}],
        ['Mar',  {{$peng_arr[2]}},      {{$real_arr[2]}}],
        ['Apr',  {{$peng_arr[3]}},      {{$real_arr[3]}}],
        ['Mei',  {{$peng_arr[4]}},      {{$real_arr[4]}}],
        ['Jun',  {{$peng_arr[5]}},      {{$real_arr[5]}}],
        ['Jul',  {{$peng_arr[6]}},      {{$real_arr[6]}}],
        ['Agu',  {{$peng_arr[7]}},      {{$real_arr[7]}}],
        ['Sep',  {{$peng_arr[8]}},      {{$real_arr[8]}}],
        ['Okt',  {{$peng_arr[9]}},      {{$real_arr[9]}}],
        ['Nov',  {{$peng_arr[10]}},      {{$real_arr[10]}}],
        ['Des',  {{$peng_arr[11]}},      {{$real_arr[11]}}],
      ]);

    // Options
    var options = {
        fontName: 'Roboto',
        height: 400,
        curveType: 'function',
        fontSize: 12,
        chartArea: {
            left: '5%',
            width: '90%',
            height: 350
        },
        pointSize: 4,
        tooltip: {
            textStyle: {
                fontName: 'Roboto',
                fontSize: 13
            }
        },
        colors: [ "#3232b7", "#f58b22"
        ],
        vAxis: {
            title: 'Rencana dan Realisasi',
            titleTextStyle: {
                fontSize: 13,
                italic: false
            },
            gridlines:{
                color: '#e5e5e5',
                count: 10
            },
            minValue: 0
        },
        legend: {
            position: 'top',
            alignment: 'center',
            textStyle: {
                fontSize: 12
            }
        }
    };

      var chart = new google.visualization.LineChart(document.getElementById('chart_line'));
      chart.draw(data, options);
    }
    
    // Resize chart -----------------------
    $(function () {

        // Resize chart on sidebar width change and window resize
        $(window).on('resize', resize);
        $(".sidebar-control").on('click', resize);

        // Resize function
        function resize() {
            drawChart();
        }

    });

})();

    </script>
    @stop