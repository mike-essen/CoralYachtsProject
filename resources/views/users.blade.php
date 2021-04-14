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
                                        <li>
                                            <a href="/">HOME</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container" style="padding-top: 300px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row" style="padding-top: 20px;">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <a href="register">Register Here</a>
                                </div>

                                <div class="form-group row mb-0" style="padding-bottom: 20px;">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
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
