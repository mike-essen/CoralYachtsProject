<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <!-- PAGE TITLE -->
    <title>Home - Coral yachts</title>

    <!-- META-DATA -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- CSS:: FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS:: ANIMATE -->
    <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet">

    <!-- CSS:: MAIN -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('color-files/color-08.css') }}" rel="stylesheet">
</head>

<body>

<div class="r-wrapper">
    <header>
        <div class="r-header r-header-inner r-header-strip-01">
            <div class="r-header-strip r-header-strip-01">
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
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="r-header-action float-left">


                                <div class="r-search-wrapper">
                                    <div class="r-search-inner">
                                        <form>
                                            <input type="text" class="r-search-field" placeholder="Search"/>
                                            <button type="submit" class="r-search-btn">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /r-search-wrapper -->
                            </div>
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
            <div class="r-slider owl-carousel" id="defaultHomeSlider">
                <div class="r-slider-item">
                    <img src="{{ asset('images/-hero-yacht1.jpg') }}" class="img-fluid d-block m-auto" alt="">
                    <div class="container">
                        <div class="r-slider-top-content">
                            <h1 class="animated fadeInDown">OceJanco <span>X90</span></h1>
                            <h4 class="animated fadeInLeft">FOR RENT <strong>$500</strong> PER DAY</h4>
                            <a href="#" class="btn btn-outlined animated fadeInUp"> Reserve Now </a>
                        </div>
                    </div>
                </div>
                <div class="r-slider-item">
                    <img src="{{ asset('images/-hero-yacht-2.jpg') }}" class=" img-fluid d-block m-auto" alt="">
                    <div class="container">
                        <div class="r-slider-top-content">
                            <h1>DesTination <span>H5</span></h1>
                            <h4>FOR RENT <strong>$350</strong> PER DAY</h4>
                            <a href="#" class="btn btn-outlined"> Reserve Now </a>
                        </div>
                    </div>
                </div>
                <div class="r-slider-item">
                    <img src="{{ asset('images/-hero-yacht-3.jpg') }}" class="img-fluid d-block m-auto" alt="">
                    <div class="container">
                        <div class="r-slider-top-content">
                            <h1>Sparrow <span>Cap</span></h1>
                            <h4>FOR RENT <strong>$278</strong> PER DAY</h4>
                            <a href="#" class="btn btn-outlined"> Reserve Now </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </header>
    <section id="r-advantages-part" class="r-advantages-part">
        <div class="r-advantage-main-part">
            <div class="container clearfix">
                <div class="advantage-head">
                    <span>Multiple YACHT TYPE &amp; BRANDS</span>
                    <h2>Coral Yachts <b>Advantages.</b></h2>
                </div>
                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="r-advantages-box">
                            <div><img style="max-width:60px;" src="{{ asset('images/-service.png') }}"></div>
                            <div class="head animated pulse">24/7 Customer Online Support</div>
                            <div class="sub-text">Call us Anywhere Anytime</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="r-advantages-box">
                            <div><img style="max-width:60px;" src="{{ asset('images/-reservation.png') }}"></div>
                            <div class="head animated pulse">Reservation Anytime You Wants</div>
                            <div class="sub-text">24/7 Online Reservation</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="r-advantages-box">
                            <div><img style="max-width:60px;" src="{{ asset('images/-location.png') }}" alt=""></div>
                            <div class="head animated pulse">Lots of Picking Locations</div>
                            <div class="sub-text">250+ Locations</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="r-about-info">
        <div class="r-about-info">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="r-about-info-img">
                            <img style="max-width:380px;" src="{{ asset('images/-whoarewe.jpg') }}"
                                 class="img-fluid d-block m-auto">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="r-about-info-content">
                            <div class="r-sec-head r-sec-head-left r-sec-head-line r-sec-head-w pt-0">
                                <span>KNOW MORE ABOUT US</span>
                                <h2>What <b>Coral Yachts</b> Is.</h2>
                            </div>
                            <p>
                                We know the difference is in the details and that’s why our yacht rental services, in
                                the tourism and business industry, stand out for their quality and good taste.
                            </p>
                            <ul class="mb-0 pl-0">
                                <li><i class="fa fa-check-circle"></i> We working since 1980 with over 1.2 million
                                    customers!
                                </li>
                                <li><i class="fa fa-check-circle"></i> All brand & type yachts in our port</li>
                                <li><i class="fa fa-check-circle"></i> 1.000+ picking locations around the world</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="r-best-vehicles">
            <div class="r-sec-head r-accent-color r-sec-head-v">
                <span>FEATURED YACHTS</span>
                <h2>Our <b>Most Popular Offer.</b></h2>

            </div>
            <div class="container">
                <div class="row clearfix r-best-offer-list">
                    @foreach($banners->slice(0, 1) as $banner)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                    <div class="r-offer-rewst-this">
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
    <section id="r-quote">
        <div class="r-quote r-quote-sub pt-0 r-quote-noafter">
            <div class="r-sec-head r-accent-color r-sec-head-t">
                <span>LATEST TESTIMONIAL</span>
                <h2>What <b>They Say</b> About Us.</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div id="r-quote-carousel" class="carousel slide">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item">
                                    <p>“What a wonderfull experience, i could smoke jonko all day on this wonderfull
                                        ship, and every time i had munchies i could walk over to a restaurant and grab
                                        myself something i like. and ofcourse this was all within
                                        the price!” <br> <br> 10/10 would smoke again!</p>
                                </div>
                                <div class="carousel-item active">
                                    <p>“As the CEO of a Anti-Suicide hotline i find my self in a lot of stress most of
                                        the time, so i wanted to treat myself on some well deserved rest from all those
                                        depressed kids, so i booked a yacht and after one day
                                        i was so relaxed that i decided to take a couple of days extra!” <br> <br> 9/10
                                        would go again!
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p>“After my hit song 'Steen jij was nummer 1' I booked this yacht with the thought
                                        of writing a hit song about the sea, what i didn't know is that the elves where
                                        on that ship too and that they would try to steal
                                        my wizard hat that contains my power! luckely the staff of the ship removed them
                                        and send them back to Lothlórien, later on the chef told me to try this new type
                                        of dwarven ale it was really tasty and i got
                                        so drunk that my wizard staff made a whole songtext! my song shall pass number
                                        1!” <br> <br> 11/10 would sing again!</p>
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#r-quote-carousel" data-slide-to="0">
                                    <img class="img-fluid d-block" src="{{ asset('images/-customer1.jpg') }}" alt="">
                                    <span>
                      <b>Blowa van der Zee</b> <br>
                      Jonko Expert
                    </span>
                                </li>
                                <li data-target="#r-quote-carousel" data-slide-to="1" class="active text-center">
                                    <img class="img-fluid d-block" src="{{ asset('images/-customer2.jpg') }}" alt="">
                                    <span>
                      <b>Markus Heerkom</b> <br>
                      CEO Anti-Suicide hotline
                    </span>
                                </li>
                                <li data-target="#r-quote-carousel" data-slide-to="2">
                                    <img class="img-fluid d-block" src="{{ asset('images/-customer3.jpg') }}" alt="">
                                    <span>
                      <b>Sjorns Triest</b> <br>
                      Music wizard
                    </span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="r-counter-section r-counter-with-bg m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="r-counter-box">
                        <div class="r-counter-icon">
                            <img src="{{ asset('images/-smile.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="r-counts" data-count="1203890">
                            <!-- 1.172.700 -->
                            <span class="r-count">0</span>
                        </div>
                        <span class="r-count-title"> HAPPY CUSTOMERS </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="r-counter-box">
                        <div class="r-counter-icon">
                            <img src="{{ asset('images/-empolyee.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="r-counts" data-count="7845">
                            <!-- 2.450 -->
                            <span class="r-count">0</span>

                        </div>
                        <span class="r-count-title"> Employees happy to assist you </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="r-counter-box">
                        <div class="r-counter-icon">
                            <img src="{{ asset('images/-kilometer.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="r-counts" data-count="98977869">
                            <!-- 1.211.100 -->
                            <span class="r-count">0</span>
                        </div>
                        <span class="r-count-title"> Total kilometers </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="r-counter-box">
                        <div class="r-counter-icon">
                            <img src="{{ asset('images/-anker.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="r-counts" data-count="326">
                            <!-- 47.250 -->
                            <span class="r-count">0</span>
                        </div>
                        <span class="r-count-title"> Ports </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="r-latest-news">
        <div class="r-latest-news">
            <div class="r-sec-head r-sec-head-b">
                <span>ARTICLES FROM BLOG</span>
                <h2>Our <b>Latest News.</b></h2>
            </div>
            <div class="container">
                <div class="owl-carousel r-latest-news-list" id="r-latest-news-slider">
                    <div class="r-latest-news-single">
                        <a class="d-inline-block"><img src="{{ asset('images/-weed.jpg') }}"
                                                       class="img-fluid d-block m-auto"
                                                       alt=""></a>
                        <div class="r-latest-news-content">
                            <span class="r-date">04-20-2020</span>
                            <h4 style="color: #ffcd00;">Employee fined for smoking weed with customer.</h4>
                        </div>
                    </div>

                    <div class="r-latest-news-single">
                        <a class="d-inline-block"><img src="{{ asset('images/-wizard.jpg') }}"
                                                       class="img-fluid d-block m-auto"
                                                       alt=""></a>
                        <div class="r-latest-news-content">
                            <span class="r-date">08-24-2019</span>
                            <h4 style="color: #ffcd00;">Drunk wizard attacked elves on yacht.</h4>
                        </div>
                    </div>

                    <div class="r-latest-news-single">
                        <a class="d-inline-block"><img style="max-height: 245px;" src="{{ asset('images/-steen.jpg') }}"
                                                       class="img-fluid d-block m-auto" alt=""></a>
                        <div class="r-latest-news-content">
                            <span class="r-date">03-29-2020</span>
                            <h4 style="color: #ffcd00;">After more then a year of searching: Steen was found on our
                                yacht by a Drunk wizard, a smoking teen and the CEO of the Anti-suicide hotline!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="r-gallery-part">
        <div class="r-gallery-part r-gallery-part-home pt-0 pb-0">
            <h4 style="text-align: center;">Check out the best pictures from our customers!</h4>
            <ul class="clearfix">
                <li>
                    <a href="{{ asset('images/-hero-yacht1.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('images/-hero-yacht1.jpg') }}" class="d-block img-fluid" alt="">
                        <div class="gallery-hover">
                            <div class="gallery-text">
                                <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('images/-hero-yacht-2.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('images/-hero-yacht-2.jpg') }}" class="d-block img-fluid" alt="">
                        <div class="gallery-hover">
                            <div class="gallery-text">
                                <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('images/-hero-yacht-3.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('images/-hero-yacht-3.jpg') }}" class="d-block img-fluid" alt="">
                        <div class="gallery-hover">
                            <div class="gallery-text">
                                <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('images/-hero-yacht-4.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('images/-hero-yacht-4.jpg') }}" class="d-block img-fluid" alt="">
                        <div class="gallery-hover">
                            <div class="gallery-text">
                                <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('images/-hero-yacht-5.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('images/-hero-yacht-5.jpg') }}" class="d-block img-fluid" alt="">
                        <div class="gallery-hover">
                            <div class="gallery-text">
                                <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
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
