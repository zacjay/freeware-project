<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Page</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/vendor/bootstrap.min.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/vendor/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/vendor/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/vendor/cryptocurrency-icons.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/plugins/plugins.css')}}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/helper.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{url('public/assets/css/style-primary.css')}}">

</head>

<body>

    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                           <div class="header-logo col-auto">
                        
                            <div class="content"><h1>WELCOME</h1></div><img src="{{('public/assets/images/logo/log.png')}}" alt="" style="height: 250px; width: 160px;">
                        
                    </div>

                            <div class="login-register-form">
                                
                                <form method="post" action="{{url('Registered')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-20"><input class="form-control" type="text" placeholder="Username" name="username"></div>
                                        <div class="col-12 mb-20"><input class="form-control" type="email" placeholder="Email Id" name="email"></div>
                                        <div class="col-12 mb-20"><input class="form-control" type="password" placeholder="Password" name="password"></div>
                                        <div class="col-12 mb-20">
                                            <select class="form-control" name="role">
                                                <option>Choose Role</option>
                                                <option>Super Market</option>
                                                <option>NGO</option>
                                            </select>
                                        </div>

                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-20">
                                <input class="form-control" type="file" multiple name="image">
                            </div>
                        </div>
                                       <!--  <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox-2"><input id="remember" type="checkbox"><i class="icon"></i>Remember.</label></div> -->
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15"><a href="{{url('Login')}}">Click here to Login</a></div>

                                               
                                            </div>
                                        </div>
                                        <div class="col-12 mt-10"><button class="button button-primary button-outline" type="submit">Sing Up</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <!-- <h1>Sign in</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{url('public/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{url('public/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('public/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{url('public/assets/js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugins JS-->
    <script src="{{url('public/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('public/assets/js/plugins/tippy4.min.js.js')}}"></script>
    <!--Main JS-->
    <script src="{{url('public/assets/js/main.js')}}"></script>

</body>

</html>