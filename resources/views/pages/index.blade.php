@extends('layouts.app')

@section('content')
    <!-- ============== start home section  ============== -->
    <section id="home">
        <div id="home-slider" class="carousel slide in" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{ asset('img/slider/01.jpg') }})">
                    <div class="color-overlay">
                        <div class="caption">
                            <p class="slider-logo"><img src="{{ asset('img/logo.png') }}" alt="logo"></p>
                            <h1 class="main-title wow fadeInUp" data-wow-delay=".25s">PREDICT</h1>
                            <p class="sub-title wow fadeInUp" data-wow-delay=".75s">COMPLETELY FREE</p>
                        </div>
                    </div>
                </div><!-- //item -->
                <div class="item" style="background-image: url({{ asset('img/slider/02.jpg') }})">
                    <div class="color-overlay">
                        <div class="caption">
                            <p class="slider-logo"><img src="{{ asset('img/logo.png') }}" alt="logo"></p>
                            <h1 class="main-title wow fadeInUp" data-wow-delay=".25s">WIN</h1>
                            <p class="sub-title wow fadeInUp" data-wow-delay=".75s">PRIZES WORTH THOUSANDS OF RAND</p>
                        </div>
                    </div>
                </div><!-- //item -->
                <div class="item" style="background-image: url({{ asset('img/slider/03.jpg') }})">
                    <div class="color-overlay">
                        <div class="caption">
                            <p class="slider-logo"><img src="{{ asset('img/logo.png') }}" alt="logo"></p>
                            <h1 class="main-title wow fadeInUp" data-wow-delay=".25s">SHOWCASE</h1>
                            <p class="sub-title wow fadeInUp" data-wow-delay=".75s">YOUR TALENT TO YOUR FRIENDS</p>
                        </div>
                    </div>
                </div><!-- //item -->
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

            <!-- arrow bellow -->
            <a data-scroll id="arrow-bellow" href="#features"><img src="{{ asset('img/icon/arrow-bellow.png') }}"
                                                                   alt="arrow-bellow"></a>
        </div>
    </section>
    <!-- ========= //End home section ========= -->


    <!-- ============== Start features section ============== -->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 feature-item">
                    <div class="content text-center wow fadeInDown" data-wow-delay=".15s">
                        <p class="icon">
                            <img src="{{ asset('img/icon/award.png') }}" alt="img">
                        </p>
                        <h5 class="title">Award Winning</h5>
                        <p class="info">
                            We take this seriously.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature-item">
                    <div class="content text-center wow fadeInDown" data-wow-delay=".35s">
                        <p class="icon">
                            <img src="{{ asset('img/icon/camera.png') }}" alt="img">
                        </p>
                        <h5 class="title">SHOWCASE</h5>
                        <p class="info">
                            Share your victories with your friends.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature-item">
                    <div class="content text-center wow fadeInDown" data-wow-delay=".55s">
                        <p class="icon">
                            <img src="{{ asset('img/icon/mobile.png') }}" alt="img">
                        </p>
                        <h5 class="title">FREE SUPPORT &amp; UPDATES</h5>
                        <p class="info">
                            We have a support ticket and monkeys to answer your questions!
                        </p>
                    </div>
                </div>
            </div> <!-- //row -->
        </div> <!-- //container -->
    </section>
    <!-- ========= //End features section ========= -->

    <!-- ============== Start client section ============== -->
    <section id="our-clients" class="mtb100">
        <div class="container">
            <h3 class="section-title wow fadeInDown">Our Sponsors</h3>
            <p class="section-info col-sm-6 col-sm-offset-3 wow fadeInDown" data-wow-delay=".25s">
                Play big. Win big.
            </p>
            <div class="clearfix"></div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 each-client"><a href="#"><img src="{{ asset('img/clients/1.png') }}"
                                                                            alt="client"></a></div>
                <div class="col-md-3 col-sm-6 each-client"><a href="#"><img src="{{ asset('img/clients/2.png') }}"
                                                                            alt="client"></a></div>
                <div class="col-md-3 col-sm-6 each-client"><a href="#"><img src="{{ asset('img/clients/3.png') }}"
                                                                            alt="client"></a></div>
                <div class="col-md-3 col-sm-6 each-client"><a href="#"><img src="{{ asset('img/clients/4.png') }}"
                                                                            alt="client"></a></div>
            </div> <!-- //row -->
        </div> <!-- //container -->
    </section>
    <!-- ========= //End client section ========= -->


    <!-- ============== Start count-down ============== -->
    <section id="count-down" class="text-center">
        <div class="color-overlay ptt100 ptb100">
            <div class="container">
                <div class="row">
                    <div class="counter-content">
                        <div class="col-sm-4 each-counter wow zoomIn">
                            <p class="icon">
                                <img src="{{ asset('img/icon/clients.png') }}" alt="img">
                            </p>
                            <span class="counter count1">8637</span>
                            <p class="title">Clients</p>
                            <p class="info">
                                Who believe in us.
                            </p>
                        </div>
                        <div class="col-sm-4 each-counter wow zoomIn">
                            <p class="icon">
                                <img src="{{ asset('img/icon/projects.png') }}" alt="img">
                            </p>
                            <span class="counter count2">82698</span>
                            <p class="title">BETS MADE</p>
                            <p class="info">
                                We're growing faster than ever before!
                            </p>
                        </div>
                        <div class="col-sm-4 each-counter wow zoomIn">
                            <p class="icon">
                                <img src="{{ asset('img/icon/deliveries.png') }}" alt="img">
                            </p>
                            <span class="counter count3">230362</span>
                            <p class="title">SOUTH AFRICAN RAND</p>
                            <p class="info">
                                Won in prizes!
                            </p>
                        </div>
                    </div>
                </div> <!-- //row -->
            </div> <!-- //container -->
        </div>
    </section>
    <!-- ========= //End count-down ========= -->


    <!-- ============== Start about info ============== -->
    <section id="about-info" class="text-center ptt100 ptb80">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 each-part wow zoomIn">
                    <p class="icon">
                        <img src="{{ asset('img/icon/custom-care.png') }}" alt="img">
                    </p>
                    <p class="title">CUSTOMER CARE</p>
                    <p class="info">
                        086-432-9600
                    </p>
                </div>
                <div class="col-sm-3 each-part wow zoomIn">
                    <p class="icon">
                        <img src="{{ asset('img/icon/mail-info.png') }}" alt="img">
                    </p>
                    <p class="title">MAIL US</p>
                    <p class="info">
                        support@fantasypicks.co.cza
                    </p>
                </div>
                <div class="col-sm-3 each-part wow zoomIn">
                    <p class="icon">
                        <img src="{{ asset('img/icon/work-time.png') }}" alt="img">
                    </p>
                    <p class="title">Work Time</p>
                    <p class="info">
                        Mon. - Fri. (10:00 - 22:00)
                    </p>
                </div>
                <div class="col-sm-3 each-part wow zoomIn">
                    <p class="icon">
                        <img src="{{ asset('img/icon/work-place.png') }}" alt="img">
                    </p>
                    <p class="title">Work Place</p>
                    <p class="info">
                        1st Ave Johannesburg<br>
                        <small>GP 4892, SA</small>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= //End about info ========= -->
@endsection
