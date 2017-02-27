@extends('layouts.app')

@section('content')
    <!-- ============== Start breadcrumbs ============== -->
    <section id="contact-breadcrumbs" class="text-center">
        <div class="color-overlay">
            <div class="container">
                <h3 class="section-title wow fadeInDown">MATCHES</h3>
                <p class="section-info col-sm-6 col-sm-offset-3 wow fadeInDown" data-wow-delay=".25s">
                    Who do you think will win?
                </p>
            </div>
        </div> <!-- //container -->
    </section>
    <!-- ========= //End breadcrumbs ========= -->


    <!-- ============== Start blog-section ============== -->
    <section id="blog-section">

        <!-- article section -->
        <div class="all-articles mtb80 top15">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    @foreach($matches as $match)
                        <!-- article 01 -->
                            <article class="article-01 wow fadeIn">
                                <div class="row-same-height row-full-height">
                                    <div class="post-info col-sm-3 col-xs-height col-full-height">
                                        <p class="date">{{ $match->scheduled->format('M, Y') }}</p>
                                        <p class="post-number">{{ $match->scheduled->format('j') }}</p>
                                    </div>
                                    <div class="col-sm-9 col-xs-height col-full-height">
                                        <div class="details">
                                            <h4>
                                                <span class="text-success">{{ $match->home_team->name }}</span> VS <span
                                                        class="text-danger">{{ $match->away_team->name }}</span>
                                            </h4>
                                            <ul class="entry-meta list-inline">
                                                @if($match->probability_home_win)
                                                    <li>Home win chance: {{$match->probability_home_win}}%</li>
                                                @endif
                                                @if($match->probability_away_win)
                                                    <li>Away win chance: {{$match->probability_away_win}}%</li>
                                                @endif
                                                @if($match->probability_draw)
                                                    <li>Draw chance: {{$match->probability_draw}}%</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article> <!-- //article 01 -->
                        @endforeach
                    </div>
                </div> <!-- //row -->
            </div> <!-- //container -->
        </div>
    </section>
    <!-- ========= //End sort-item ========= -->
@endsection