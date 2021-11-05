@extends('layouts.main')
@section('title','Suku Cadang')
@section('body')
<body>
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-12 layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header widget-heading">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Rounded Pills</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area rounded-pills">
                    
                    <ul class="nav nav-pills mb-3  nav-fill" id="rounded-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link  btn-rounded active" id="rounded-pills-home-tab" data-toggle="pill" href="#rounded-pills-home" role="tab" aria-controls="rounded-pills-home" aria-selected="true"><i class="flaticon-home-fill-1"></i> Home</a>
                        </li>
                        <li class="nav-item ml-1">
                            <a class="nav-link  btn-rounded" id="rounded-pills-profile-tab" data-toggle="pill" href="#rounded-pills-profile" role="tab" aria-controls="rounded-pills-profile" aria-selected="false"><i class="flaticon-user-7"></i> Profile</a>
                        </li>
                        <li class="nav-item ml-1">
                            <a class="nav-link  btn-rounded" id="ronded-pills-contact-tab" data-toggle="pill" href="#rounded-pills-contact" role="tab" aria-controls="rounded-pills-contact" aria-selected="false"><i class="flaticon-telephone"></i> Contact</a>
                        </li>

                        <li class="nav-item ml-1">
                            <a class="nav-link  btn-rounded" id="ronded-pills-settings-tab" data-toggle="pill" href="#rounded-pills-settings" role="tab" aria-controls="rounded-pills-settings" aria-selected="false"><i class="flaticon-settings-7"></i> Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="rounded-pills-tabContent">
                        <div class="tab-pane fade show active" id="rounded-pills-home" role="tabpanel" aria-labelledby="rounded-pills-home-tab">
                            <h4 class="mb-4">We move your world!</h4>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>      
                        </div>
                        <div class="tab-pane fade" id="rounded-pills-profile" role="tabpanel" aria-labelledby="rounded-pills-profile-tab">
                            <div class="media mt-4 mb-3">
                                <img class="mr-3" src="assets/img/profile-32.jpeg" alt="Generic placeholder image">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="rounded-pills-contact" role="tabpanel" aria-labelledby="ronded-pills-contact-tab">
                            <p class="dropcap  dc-outline-primary">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="rounded-pills-settings" role="tabpanel" aria-labelledby="ronded-pills-settings-tab">
                            <blockquote class="blockquote">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-12 col-12 layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header widget-heading">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Rounded Pills with Background</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area rounded-background-pills">
                    
                    <ul class="nav nav-pills justify-content-center" id="rounded-background-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link btn-rounded active" id="rounded-background-pills-home-tab" data-toggle="pill" href="#rounded-background-pills-home" role="tab" aria-controls="rounded-background-pills-home" aria-selected="true"><i class="flaticon-home-fill-1"></i> Home</a>
                        </li>

                        <li class="nav-item ml-1">
                            <a class="nav-link btn-rounded" id="rounded-background-pills-profile-tab" data-toggle="pill" href="#rounded-background-pills-profile" role="tab" aria-controls="rounded-background-pills-profile" aria-selected="false"><i class="flaticon-user-7"></i> Profile</a>
                        </li>

                        <li class="nav-item ml-1">
                            <a class="nav-link btn-rounded" id="rounded-background-pills-contact-tab" data-toggle="pill" href="#rounded-background-pills-contact" role="tab" aria-controls="rounded-background-pills-contact" aria-selected="false"><i class="flaticon-telephone"></i> Contact</a>
                        </li>

                        <li class="nav-item ml-1">
                            <a class="nav-link  btn-rounded" id="rounded-background-pills-settings-tab" data-toggle="pill" href="#rounded-background-pills-settings" role="tab" aria-controls="rounded-background-pills-settings" aria-selected="false"><i class="flaticon-settings-7"></i> Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="rounded-background-pills-tabContent">
                        <div class="tab-pane fade show active" id="rounded-background-pills-home" role="tabpanel" aria-labelledby="rounded-background-pills-home-tab">
                            <h4 class="mb-4">We move your world!</h4>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>      
                        </div>
                        <div class="tab-pane fade" id="rounded-background-pills-profile" role="tabpanel" aria-labelledby="rounded-background-pills-profile-tab">
                            <div class="media mt-4 mb-3">
                                <img class="mr-3" src="assets/img/profile-32.jpeg" alt="Generic placeholder image">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="rounded-background-pills-contact" role="tabpanel" aria-labelledby="rounded-background-pills-contact-tab">
                            <p class="dropcap  dc-outline-primary">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="rounded-background-pills-settings" role="tabpanel" aria-labelledby="rounded-background-pills-settings-tab">
                            <blockquote class="blockquote">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            </blockquote>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</body>
