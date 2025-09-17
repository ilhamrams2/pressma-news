@extends('index')

@section('content')
    <div class="main-content container">
        <div class="col-md-8 block-1">
            <div class="row">
                <div class="col-md-3 b1-aside">
                    <h5><span>Latest News</span></h5>
                    <div class="bla-content">

                        @foreach ($posts as $post)
                            <span class="cat-default">{{ $post->category->name }}</span>
                            <p><i class="fa fa-clock-o"></i>{{ $post->published_at }}</p>
                            <h4><a href="{{ route('single', $post->slug) }}">{{ $post->title }}</a></h4>
                            <div class="sep"></div>
                        @endforeach

                        <a href="#" class="btn1">View All Posts</a>
                    </div>
                    <div class="bla-content banner">
                        <img src="{{ asset('img/banner/2.jpg') }}" class="img-responsive" alt="" />
                    </div>
                    <h5><span>Tweets</span></h5>
                    <div id="tweet-feed">
                        <div class="tf-info">
                            <img src="{{ asset('img/logo-pic.png') }}" alt="" />
                            <p>Check out 'Momental - Vertical Navigation HTML5 Template' on <a
                                    href="#">@EnvatoMarket</a> by <a href="#">@premiummlayers</a> #themeforest
                                <span><a href="#">http://t.co/eva3o65Kky</a></span>
                            </p>
                        </div>
                        <div class="tf-info">
                            <img src="{{ asset('img/logo-pic.png') }}" alt="" />
                            <p>Check out 'Momental - Vertical Navigation HTML5 Template' on <a
                                    href="#">@EnvatoMarket</a> by <a href="#">@premiummlayers</a> #themeforest
                                <span><a href="#">http://t.co/eva3o65Kky</a></span>
                            </p>
                        </div>
                        <div class="tf-info">
                            <img src="{{ asset('img/logo-pic.png') }}" alt="" />
                            <p>Check out 'Momental - Vertical Navigation HTML5 Template' on <a
                                    href="#">@EnvatoMarket</a> by <a href="#">@premiummlayers</a> #themeforest
                                <span><a href="#">http://t.co/eva3o65Kky</a></span>
                            </p>
                        </div>
                    </div>
                    <div class="side-poll">
                        <h6>What's Your Favourite News Category</h6>
                        <form>
                            <ul>
                                <li><input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" /><label
                                        for="radio1" class="css-label radGroup1">Business</label></li>
                                <li><input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" /><label
                                        for="radio2" class="css-label radGroup1">Technology</label></li>
                                <li><input type="radio" name="radiog_lite" id="radio3" class="css-checkbox" /><label
                                        for="radio3" class="css-label radGroup1">Science</label></li>
                                <li><input type="radio" name="radiog_lite" id="radio4" class="css-checkbox" /><label
                                        for="radio4" class="css-label radGroup1">Nature</label></li>
                                <li><input type="radio" name="radiog_lite" id="radio5" class="css-checkbox" /><label
                                        for="radio5" class="css-label radGroup1">Culture</label></li>
                            </ul>
                        </form>
                        <a href="#">Vote</a>
                    </div>
                </div>

                <div class="col-md-9 block-right">
                    @foreach ($posts as $post)
                        <div id="bl-featured">
                            <div class="bl-featured-big">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive" alt="" />
                                <div class="bl-info">
                                    <span>{{ $post->category->name }}</span>
                                    <h3><a href="./news_single.html">{{ $post->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Featured News -->
                    <div class="featured-news">
                        <h5><span>Featured News</span></h5>
                        <div class="row">

                            <div class="col-md-6">
                                @foreach ($fe1_posts as $fe1_post)
                                    <div class="fn-inner">
                                        <div class="fn-thumb">
                                            <img src="{{ asset('storage/' . $fe1_post->image) }}" class="img-responsive"
                                                alt="" />
                                            <div class="fn-meta">{{ $fe1_post->category->name }}</div>
                                        </div>
                                        <h4><a href="./news_single.html">{{ $fe1_post->title }}</a></h4>
                                        <em><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($fe1_post->published_at)->translatedFormat('d M Y') }} <a href="#"></em>
                                        <p>{!! \Illuminate\Support\Str::words(strip_tags($fe1_post->content), 10, '...') !!}</p>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-md-6">
                                @foreach ($fe2_posts as $fe2_post)
                                    <div class="fn-inner">
                                        <div class="fn-thumb">
                                            <img src="{{ asset('storage/' . $fe2_post->image) }}" class="img-responsive"
                                                alt="" />
                                            <div class="fn-meta">{{ $fe2_post->category->name }}</div>
                                        </div>
                                        <h4><a href="./news_single.html">{{ $fe2_post->title }}</a></h4>
                                        <em><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($fe2_post->published_at)->translatedFormat('d M Y') }} <a href="#"></em>
                                        <p>{!! \Illuminate\Support\Str::words(strip_tags($fe2_post->content), 10, '...') !!}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- <div class="cat-blocks">
                        <h4><span>Technology</span></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="cb-big">
                                    <img src="images/xtra/7.jpg" class="img-responsive" alt="" />
                                    <div class="bl-info">
                                        <h3><a href="./news_single.html">Authors, VAT and a Global Marketplace</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 cb-info">
                                <h5><a href="./news_single.html">Improvements to the author earnings page</a></h5>
                                <span class="date"><i class="fa fa-clock-o"></i> December 13,2014 <a href="#"><i
                                            class="fa fa-comments"></i> 5</a></span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt laoreet dolore</p>
                                <ul>
                                    <li><a href="./news_single.html">Envato's Most Wanted - Pagewiz Landing Page Templates
                                            - $14,000</a></li>
                                    <li><a href="./news_single.html">Item Support: Feeding back key dataand insights from
                                            the surveys</a></li>
                                    <li><a href="./news_single.html">In progress - Our knowledge base will be unavailable
                                            for maintenance</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space40"></div>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="col-md-4">
            <!-- Popular News -->
            <div class="side-widget p-news">
                <h5><span>Politic News</span></h5>
                <div class="sw-inner">
                    <ul>

                        @foreach ($posts as $post)
                            <li>
                                <img src="{{ asset('storage/' . $post->image) }}" alt="" />
                                <div class="pn-info">
                                    <em><i class="fa fa-clock-o"></i> {{ $post->published_at }} <a href="#"></em>
                                    <h4><a href="./news_single.html">{{ $post->title }}</a></h4>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <!-- Banner -->
            <div class="side-widget sw-banner">
                <a href="#"><img src="{{ asset('img/banner/3.jpg') }}" class="img-responsive" alt="" /></a>
            </div>
            <div class="side-widget m-comment">
                <h5><span>PRESTASI PRIMA</span></h5>
                <ul>

                    @foreach ($pp_posts as $pp_post)
                        <li>
                            <img src="{{ asset('storage/' . $pp_post->image) }}" alt="" />
                            <span>{{ $pp_post->category->name }}</span>
                            <h4><a href="#">{{ $pp_post->title }}</a></h4>
                        </li>
                    @endforeach

                </ul>
            </div>
        </aside>
    </div>
@endsection
