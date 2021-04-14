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
        <section id="r-contact-part" class="r-contact-part" style="padding: 220px;">
            <div class="container clearfix">
                <div class="contact-head">
                    <span>OUR OFFICE</span>
                    <h2>Contact <b>Coral Yachts</b> for<br> More Information. </h2>
                </div>

                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="r-contact-address">
                            <div class="head">Main Office</div>
                            <div class="r-contact-img"><img src="assets/images/contact-img01.jpg"
                                    class="img-fluid d-block m-auto" alt=""></div>
                            <div class="address address-cnt"><i class="fa fa-map-marker"></i><b>420</b> Steenboom AP, NL
                            </div>
                            <div class="call address-cnt"><i class="fa fa-phone"></i><b>+100</b>-1212-2000</div>
                            <div class="mail address-cnt"><i class="fa fa-envelope"></i>info@CoralYachts.com</div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="r-contact-address">
                            <div class="head">Other Office</div>
                            <div class="r-contact-img"><img src="assets/images/contact-img02.jpg"
                                    class="img-fluid d-block m-auto" alt=""></div>
                            <div class="address address-cnt"><i class="fa fa-map-marker"></i><b>69</b> mancafe DV, NL
                            </div>
                            <div class="call address-cnt"><i class="fa fa-phone"></i><b>+100</b>-1212-2000</div>
                            <div class="mail address-cnt"><i class="fa fa-envelope"></i>info@CoralYachts.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="r-get-in-touch">
            <div class="r-get-in-touch">
                <div class="container">
                    <div class="r-get-header">
                        <span>CONTACT US NOW</span>
                        <h2>Keep <b>In Touch.</b></h2>
                    </div>
                    <div class="r-get-form">
                        <div class="clearfix">
                            <div class="form-group"><input required="" name="userName" id="userName" type="text"
                                    placeholder="User name"></div>
                            <div class="form-group"><input required="" name="userEmail" id="userEmail" type="email"
                                    placeholder="Email Address"></div>
                        </div>
                        <div class="form-group"><input type="text" required="" name="subject" id="subject"
                                placeholder="Title Message"></div>
                        <div class="form-group">
                            <textarea placeholder="Message" name="content" required="" id="content"></textarea>
                        </div>
                        <div class="text-center">
                            <button onclick="return alert('Message Send!')">SEND MESSAGE NOW</button>
                        </div>
                        <div class="mt-4 text-uppercase text-white text-center" id="mail-status"></div>
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
    <script src="{{ asset('js/contact.js') }}"></script>

    <script>
        function sendContact() {
        var valid;
        valid = validateContact();
        if (valid) {
            jQuery.ajax({
                url: "contact_mail.php",
                data: 'userName=' + $("#userName").val() + '&userEmail=' + $("#userEmail").val() + '&subject=' + $("#subject").val() + '&content=' + $(content).val(),
                type: "POST",
                success: function (data) {
                    $("#mail-status").html(data);
                },
                error: function () {
                }
            });
        }
    }

    function validateContact() {
        var valid = true;
        if (!$("#userName").val()) {
            valid = false;
        }
        if (!$("#userEmail").val()) {
            valid = false;
        }
        if (!$("#subject").val()) {
            valid = false;
        }
        if (!$("#content").val()) {
            valid = false;
        }
        return valid;
    }
    </script>

</body>

</html>
