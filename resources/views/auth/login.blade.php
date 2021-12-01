<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>TARA | Login </title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/petro-logo.png"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/users/login-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="login">

    <form class="form-login" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/petro-full.png" class="theme-logo">
            </div>

            <div class="col-md-12">
                <label for="inputName" class="">Username</label>                
                <input style="border: 1px solid rgba(0,0,0, 0.2); border-width: medium; border-radius: 5px;" type="text" name="username" id="inputName" class="form-control mb-4" placeholder="Username" required >                
                <label for="inputPassword" class="">Password</label>                
                <input style="border: 1px solid rgba(0,0,0, 0.2); border-width: medium; border-radius: 5px;" type="password" name="password" id="inputPassword" class="form-control mb-5" placeholder="Password" required>                
                <div class="checkbox d-flex justify-content-between mb-4 mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>                
                <button class="btn btn-lg btn-gradient-success btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>
                <!-- <a href="user_register_1.html" class="btn btn-lg btn-outline-dark btn-block btn-rounded mb-3">Register</a> -->
            </div>

            <!-- <div class="col-md-12 mb-0 text-center social-icons">
                <h5 class="mt-4 mb-4">or</h5>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-facebook-logo flaticon-circle-p"></i></button>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-google-plus-bold flaticon-circle-p"></i></button>
                <button class="btn btn-outline-secondary rounded-circle btn-rounded mb-4 mr-2"><i class="flaticon-twitter-logo flaticon-circle-p"></i></button>
            </div> -->
        </div>
    </form>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>