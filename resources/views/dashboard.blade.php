@extends('layouts.main')
@section('title','Dashboard')
@section('content')

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Accounting Dashboard</h3>
                    </div>
                </div>
                
                <div class="row layout-spacing accounts-widgets">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-income">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value">$ 82,341</h6>
                                    <p class="mt-2">Income</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-currency"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-cogs">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value">$ 47,641</h6>
                                    <p class="mt-2">Cogs</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-dollar-coin"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4">
                        <div class="widget-content widget-content-area br-4 accounts-profit">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value">$ 84,534</h6>
                                    <p class="mt-2">Profit</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-money"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="widget-content widget-content-area br-4 accounts-expenses">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h6 class="value">$ 45,141</h6>
                                    <p class="mt-2">Expenses</p>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <i class="flaticon-wallet"></i>
                                </div>
                            </div>
                            <div class="progress br-30 mb-0 mt-5">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-12 layout-spacing">
                        <div class="widget-content widget-content-area product-sales-list-content br-4 p-0">
                            <div class="product-sales-list">
                                <div class="product-sales-header">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-6 mb-4 mb-sm-0">
                                            <h5 class="mb-0">Product Sales</h5>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-6 text-sm-right">
                                            <ul class="nav justify-content-end product-sales nav-pills" id="product-sales" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="product-sales-monthly-tab" data-toggle="pill" href="#product-sales-monthly" role="tab" aria-controls="product-sales-monthly" aria-selected="true">Monthly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="product-sales-yearly-tab" data-toggle="pill" href="#product-sales-yearly" role="tab" aria-controls="product-sales-yearly" aria-selected="false">Yearly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-sales-body">

                                    <div class="tab-content" id="product-salesContent">
                                        
                                        <div class="tab-pane fade show active" id="product-sales-monthly" role="tabpanel" aria-labelledby="product-sales-monthly-tab">
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
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-1 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-1">Apple</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps1">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="14%">4976.5 $</p>
                                                                        <p class="montly-inc-1">+265</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-2 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-2">HP-Laptop</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">

                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps2">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="9%">3081.2 $</p>
                                                                        <p class="montly-inc-2">+127</p>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-3 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-3">Samsung Monitor</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps3">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="2%">7376.5 $</p>
                                                                        <p class="montly-inc-3">+80</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="product-sales-yearly" role="tabpanel" aria-labelledby="product-sales-yearly-tab">

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
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-1 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-1">Apple</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">

                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps4">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="11%">61,712 $</p>
                                                                        <p class="montly-inc-1">+2080</p>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-2 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-2">HP-Laptop</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">

                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps5">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="11%">37,070 $</p>
                                                                        <p class="montly-inc-2">+1615</p>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="d-m-pro-name-3 data-marker"></div>
                                                                    </div>
                                                                    <div class="pro-name pro-name-3">Samsung Monitor</div>
                                                                </div>
                                                            </td>
                                                            <td class="action text-right">

                                                                <div class="d-flex justify-content-between">
                                                                    <div class="pchart">
                                                                        <span id="ps6">Loading...</span>
                                                                    </div>
                                                                    <div class="pcontent">
                                                                        <p class="p-l-tooltip montly-price mb-0"  data-placement="top" title="3.5%">91,102 $</p>
                                                                        <p class="montly-inc-3">+1556</p>
                                                                    </div>
                                                                </div>

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

                

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">

                        <div class="widget-content widget-content-area br-4 p-0">

                            <div class="customer-bal-summary">
                                <div class="c-b-s-header">
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <h6 class="">Customer Balance Summary</h6>
                                        </div>
                                        <div class="col-md-6 col-6 text-sm-right">
                                            <ul class="nav justify-content-end c-b-s-tab nav-pills" id="c-b-s-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="c-b-s-monthly-tab" data-toggle="pill" href="#c-b-s-monthly" role="tab" aria-controls="c-b-s-monthly" aria-selected="true">Monthly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="c-b-s-yearly-tab" data-toggle="pill" href="#c-b-s-yearly" role="tab" aria-controls="c-b-s-yearly" aria-selected="false">Yearly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="c-b-s-body">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="c-b-s-monthly" role="tabpanel" aria-labelledby="c-b-s-monthly-tab">
                                            <div class="table-responsive customer-bal-summary-scroll-monthly">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="" scope="col">Customer</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th class="text-center" scope="col">Status</th>
                                                            <th class="text-right" scope="col">Receipt</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="customer-name">Andy King</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 1,275</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Alma Clarke</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 2,344</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Shaun Park</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 1,057</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Alan Green</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 3,361</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Kristen Beck</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 2,895</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Nia Hillyer</td>
                                                            <td class="c-b-s-date">10 Jan 2019</td>
                                                            <td class="customer-price">$ 1,713</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="c-b-s-bottom">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <p class="mb-0 mt-1 pagination-stats text-sm-left text-center mb-sm-0 mb-4">Showing 1 to 10 of 24 entries</p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <ul class="pagination pagination-style-5 pagination-rounded justify-content-sm-end justify-content-center pagination-sm mb-0 mt-0">
                                                            <li><a href="javascript:void(0);">Previous</a></li>
                                                            <li><a href="javascript:void(0);">1</a></li>
                                                            <li><a href="javascript:void(0);">2</a></li>
                                                            <li><a href="javascript:void(0);">3</a></li>
                                                            <li><a href="javascript:void(0);">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane" id="c-b-s-yearly" role="tabpanel" aria-labelledby="c-b-s-yearly-tab">
                                            <div class="table-responsive customer-bal-summary-scroll-yearly">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="" scope="col">Customer</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th class="text-center" scope="col">Status</th>
                                                            <th class="text-right" scope="col">Receipt</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="customer-name">Andy King</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 24,146</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Alma Clarke</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 46,275</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="customer-name">Shaun Park</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 15,275</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="customer-name">Alan Green</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 39,881</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="customer-name">Kristen Beck</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 29,133</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-success">Paid</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="customer-name">Nia Hillyer</td>
                                                            <td class="c-b-s-date">Jan 2018 - 19</td>
                                                            <td class="customer-price">$ 25,794</td>
                                                            <td class="text-center"><span class="badge badge-pills badge-warning">Pending</span></td>
                                                            <td class="text-right"><i class="flaticon-download-1 mr-3"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="c-b-s-bottom">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <p class="mb-0 mt-1 pagination-stats text-sm-left text-center mb-sm-0 mb-4">Showing 1 to 10 of 24 entries</p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <ul class="pagination pagination-style-5 pagination-rounded justify-content-sm-end justify-content-center pagination-sm mb-0 mt-0">
                                                            <li><a href="javascript:void(0);">Previous</a></li>
                                                            <li><a href="javascript:void(0);">1</a></li>
                                                            <li><a href="javascript:void(0);">2</a></li>
                                                            <li><a href="javascript:void(0);">3</a></li>
                                                            <li><a href="javascript:void(0);">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-4 col-12 layout-spacing">
                        <div class="widget-content widget-content-area r-p-summary br-4 p-0">
                            <div class="r-p-summary-header">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-5">
                                        <h6 class="">Profit Summary</h6>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-7 text-sm-right">
                                        <ul class="nav justify-content-end r-p-summary nav-pills mb-3" id="r-p-summary" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="r-p-summary-monthly-tab" data-toggle="pill" href="#r-p-summary-monthly" role="tab" aria-controls="r-p-summary-monthly" aria-selected="true">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="r-p-summary-yearly-tab" data-toggle="pill" href="#r-p-summary-yearly" role="tab" aria-controls="r-p-summary-yearly" aria-selected="false">Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="r-p-summary-body">

                                <div class="tab-content">
                                    
                                    <div class="tab-pane active" id="r-p-summary-monthly" role="tabpanel" aria-labelledby="r-p-summary-monthly-tab">
                                        <div class="r-p-summary-montly">
                                            <div id="r_p_summary" class="mt-5"></div>

                                            <div class="r-p-summary-legend text-center">
                                                <div class="row">
                                                    <div class="col-md-12 mb-4">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_sales data-marker"></div>
                                                            </div>
                                                            <span class="r_p_sales">Sales</span>


                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_revenue ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_revenue">Revenue</span>

                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_expanditure ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_expanditure">Expenses</span>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    
                                    <div class="tab-pane" id="r-p-summary-yearly" role="tabpanel" aria-labelledby="r-p-summary-yearly-tab">
                                        <div class="r-p-summary-yearly">
                                            <div id="r_p_summary_yearly" class="mt-5"></div>

                                            <div class="r-p-summary-legend text-center">
                                                <div class="row">
                                                    <div class="col-md-12 mb-4">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_sales data-marker"></div>
                                                            </div>
                                                            <span class="r_p_sales">Sales</span>


                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_revenue ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_revenue">Revenue</span>

                                                            <div class="align-self-center">
                                                                <div class="d-m-r_p_expanditure ml-2 data-marker"></div>
                                                            </div>
                                                            <span class="r_p_expanditure">Expenses</span>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

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