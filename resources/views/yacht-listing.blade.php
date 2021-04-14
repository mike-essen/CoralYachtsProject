<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <!-- PAGE TITLE -->
    <title>Home - Royal Cars</title>

    <!-- META-DATA -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
                                        <li>
                                            <a href="/">HOME</a>
                                        </li>
                                        <li><a href="faq">FAQ</a></li>
                                        @if (Auth::check())
                                            <li><a href="listing">YACHTS</a></li>
                                        @else
                                        @endif
                                        <li><a href="contact">CONTACT US</a></li>
                                        <li><a href="users">LOGIN</a></li>

                                        @guest
                                            @if (auth::check())
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
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

    <div class="r-car-search">

    </div> <!-- /r-car-search -->

    <section>
        <div class="r-best-vehicles" style="padding-top: 150px;">
            <div class="container">
                <div class="row clearfix r-best-offer-list">
                    @foreach($banners as $banner)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="r-best-offer-single">
                                <div class="r-best-offer-in">
                                    <div class="r-offer-img">
                                        <a class="d-inline-block"
                                           {{ \loginportal\Banner::defineCorrectWidth($banner->width)  }}
                                           href="#"><img style="max-width:300px; max-height: 100px;"
                                                         src="{{asset('/storage/' . $banner->image_nl)}}"
                                                         class="img-fluid d-block m-auto" alt=""></a>
                                        <div class="r-offer-img-over" >
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                    <div class="r-best-offer-content">
                                        <a href="#"><b>{{ $banner->title }} </b>Deluxe</a>
                                        <p>Start at <b>{{ $banner->price }}</b> per day</p>

                                        <ul class="pl-0 mb-0">
                                            <li><i class="fa"></i><span>2020</span></li>
                                            <li><i class="fa"></i><span>POOL</span></li>
                                            <li><i class="fa"></i><span>BAR</span></li>
                                            <li><i class="fa"></i><span>LUXE</span></li>
                                        </ul>
                                    </div>
                                    <div class="r-offer-rewst-this" onclick="return alert('Yacht Rented')">
                                        <span class="text-uppercase">Rent this yacht</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
<div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
<!-- JQUERY:: JQUERY.JS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- JQUERY:: APPEAR.JS -->
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

</body>
</html>
