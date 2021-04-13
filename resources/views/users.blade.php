<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <!-- PAGE TITLE -->
    <title>Login-Register - Royal Cars</title>

    <!-- META-DATA -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- CSS:: ANIMATE -->
    <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet">

    <!-- CSS:: MAIN -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('color-files/color-08.css') }}" rel="stylesheet">

</head>
<body>
<div class="r-wrapper">
    <header>
        <div class="r-header r-header-inner">
            <div class="r-header-strip">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="r-logo">
                                <a href="#" class="d-inline-block"><img
                                    style="max-height:80px; padding-left:100px; padding-bottom:20px;"
                                    src="{{ asset('images/-logo.png') }}" class="img-fluid d-block" alt=""></a>
                            </div>
                            <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="r-nav-section float-right">
                                <nav>
                                    <ul>
                                        <li class="r-has-child">
                                            <a href="/">HOME</a>
                                        </li>
                                        <li><a href="faq">FAQ</a></li>
                                        <li class="r-has-child">
                                            <a href="listing">YACHTS</a>
                                            <ul class="pl-0 ml-0">
                                                <li><a href="listing">Yacht List Map</a></li>
                                                <li><a href="booking">Yacht Booking</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact">CONTACT US</a></li>
                                        <li><a href="users">LOGIN</a></li>
                                        <li><a href="banners">ADMIN</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="r-login-register">
        <div class="r-login-register">
            <div class="r-login-register-in">
                <div class="r-auth-or">
                    <span>OR</span>
                </div>
                <div class="clearfix">
                    <div class="r-auth-outer r-login">
                        <div class="r-auth-head">
                            <h2><b>Login</b> Now</h2>
                            <span>Login to our website</span>
                        </div>
                        <div class="r-auth-form">
                            <div class="r-login-fb">
                                <a href="#"><img src="assets/images/fb.jpg" class="img-fluid d-block m-auto" alt=""></a>
                            </div>
                            <div class="r-or-line"><span>OR SIGN IN</span></div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" required placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" required placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-full">LOGIN NOW</button>
                                </div>
                            </form>
                            <div class="r-from-inof">
                                <p class="text-center">
                                    * Denotes mandatory field. <br>
                                    ** At least one telephone number is required.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="r-auth-outer r-register">
                        <div class="r-auth-head">
                            <h2><b>Register</b> Now</h2>
                            <span>Required information for account creation</span>
                        </div>
                        <div class="r-auth-form">
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" required class="form-control" placeholder="User name">
                                </div>
                                <div class="form-group">
                                    <input type="password" required class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" required class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="email" required class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <img src="assets/images/recaptcha.jpg" class="img-fluid d-block m-auto" alt="">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-full">SIGN UP NOW</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
</div>
<div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
<!-- JQUERY:: JQUERY.JS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- JQUERY:: APPEAR.JS -->
<script src="{{ asset('js/plugins/owl/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/owl/owl.carousel2.thumbs.js') }}"></script>
<script src="{{ asset('js/plugins/appear/appear.js') }}"></script>


<!-- JQUERY:: COUNTER.JS -->
<script src="{{ asset('js/plugins/counter/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/plugins/counter/counter.min.js') }}"></script>


<!-- JQUERY:: BOOTSTRAP.JS -->
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- JQUERY:: PLUGINS -->
<script src="{{ asset('js/plugins/owl/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/plugins/lightcase/lightcase.js') }}"></script>


<!-- JQUERY:: MAP -->
<script src="{{ asset('js/map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>

<!-- JQUERY:: CUSTOM.JS -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
