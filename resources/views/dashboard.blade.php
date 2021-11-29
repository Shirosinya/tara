@extends('layouts.main')
@section('title','Dashboard')
@section('content')

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Anggaran Departemen Keamanan <?php echo date('Y'); ?></h3>
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                                <div class="col-md-3 col-3 text-right" style="margin-left:-10px;">
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
                <div class="row">
                    <div class="col-xl-6 col-12 layout-spacing">
                        <div class="widget-content widget-content-area vendor-expenses-list-content br-4 p-0">
                            <div class="vendor-expenses-list">                            
                                <div class="vendor-expenses-header">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-6">
                                            <h5 class="mb-0">Vendor Expenses</h5>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-6 text-sm-right">
                                            <ul class="nav justify-content-end vendor-expenses nav-pills" id="vendor-expenses" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="vendor-expenses-monthly-tab" data-toggle="pill" href="#vendor-expenses-monthly" role="tab" aria-controls="vendor-expenses-monthly" aria-selected="true">Monthly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="vendor-expenses-yearly-tab" data-toggle="pill" href="#vendor-expenses-yearly" role="tab" aria-controls="vendor-expenses-yearly" aria-selected="false">Yearly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor-expenses-body">
                                    <div class="tab-content" id="vendor-expensesContent">
                                        <div class="tab-pane fade show active" id="vendor-expenses-monthly" role="tabpanel" aria-labelledby="vendor-expenses-monthly-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th class="text-right">Amount</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="pro-name mb-2">Apple</div>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="progress progress-md w-75">
                                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 45.3%" aria-valuenow="45.3" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <span>25.3%</span>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <p class="v-amount mb-0">$ 2,275</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="pro-name mb-2">HP-Laptop</div>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="progress progress-md w-75">
                                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 24.6%" aria-valuenow="24.6" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <span>14.6%</span>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <p class="v-amount mb-0">$ 937</p>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="pro-name mb-2">Samsung Monitor</div>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="progress progress-md w-75">
                                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30.85%" aria-valuenow="30.85" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <span>19.85%</span>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <p class="v-amount mb-0">$ 2,384</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                        
                                        <div class="tab-pane fade" id="vendor-expenses-yearly" role="tabpanel" aria-labelledby="vendor-expenses-yearly-tab">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th class="text-right">Amount</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="pro-name mb-2">Apple</div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="progress progress-md w-75">
                                                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 35.3%" aria-valuenow="24.3" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <span>24.8%</span>
                                                            </div>
                                                        </td>
                                                        <td class="action text-right">
                                                            <p class="v-amount mb-0">$ 27,900</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="pro-name mb-2">HP-Laptop</div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="progress progress-md w-75">
                                                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 13.4%" aria-valuenow="13.4" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <span>13.4%</span>
                                                            </div>
                                                        </td>
                                                        <td class="action text-right">
                                                            <p class="v-amount mb-0">$ 11,277</p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="pro-name mb-2">Samsung Monitor</div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="progress progress-md w-75">
                                                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 18.7%" aria-valuenow="18.7" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <span>18.7%</span>
                                                            </div>
                                                        </td>
                                                        <td class="action text-right">
                                                            <p class="v-amount mb-0">$ 28,508</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
<!-- </html> -->