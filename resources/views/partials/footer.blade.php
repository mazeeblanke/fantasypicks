<!-- ============== Start twitter section ============== -->
<section id="twitter">
    <div>
        <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i
                    class="fa fa-angle-left"></i></a>
        <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i
                    class="fa fa-angle-right"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="twitter-icon text-center hidden-sm hidden-xs">
                        <p>
                            <img src="{{ asset('img/icon/twitter.png') }}" alt="twitter" class="img-100p">
                        </p>
                    </div>
                    <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p class="info">Check out recent winnings on #FantasyPicksWIN</p>
                                <p class="link"> by <span>@FantasyPicks</span><a href="#"> #FantasyPicksWIN
                                                                                           http://tllg.net/8szMvf5t</a>
                                </p>
                            </div>
                            <div class="item">
                                <p class="info">Check out popular games on #FantasyPicksWIN</p>
                                <p class="link"> by <span>@FantasyPicks</span><a href="#"> #FantasyPicksWIN
                                                                                           http://tllg.net/8szMvf5t</a>
                                </p>
                            </div>
                            <div class="item">
                                <p class="info">Check out reviews on #FantasyPicksWIN</p>
                                <p class="link"> by <span>@FantasyPicks</span><a href="#"> #FantasyPicksWIN
                                                                                           http://tllg.net/8szMvf5t</a>
                                </p>
                            </div>
                        </div>
                    </div> <!-- //twitter-carousel -->
                </div>
            </div> <!-- //row -->
        </div> <!-- //container -->
    </div>
</section>
<!-- ========= //End twitter section ========= -->

<!-- ============== Start footer ============== -->
<section id="footer">
    <div class="color-overlay ptt80">
        <div class="container mtb50">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <p class="footer-logo mtb30"><img src="{{ asset('img/logo-footer.png') }}"
                                                      alt="Fantay Picks Logo"></p>
                    <ul class="nav-footer list-inline mtb30">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>

                        @if(Auth::check())
                            <li><a href="{{ route('logout') }}" onclick="$('#logout').submit()">Logout</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif

                        <li><a href="{{ route('matches.index') }}">Matches</a></li>
                    </ul>
                    <ul class="social-icon-footer list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div> <!-- //row -->
        </div>
    </div> <!-- //container -->

           <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-4">
                    <p class="info">
                        &copy; Copyright Fantasy Picks 2017. All Rights Reserved.
                    </p>
                </div>
            </div> <!-- //row -->
        </div> <!-- //container -->
    </div> <!-- //end copyright -->
</section>
<!-- ========= //End footer ========= -->