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
                            <p><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M Y') }}</p>
                            <h4><a href="{{ route('single', $post->slug) }}">{{ $post->title }}</a></h4>
                            <div class="sep"></div>
                        @endforeach
                        <a href="" class="btn1">View All Posts</a>
                    </div>
                    <div class="bla-content banner">
                        <img src="{{ asset('img/banner/2.jpg') }}" class="img-responsive" alt="Banner" />
                    </div>

                    <h5><span>Tweets</span></h5>
                    <div id="tweet-feed">
                        <div class="tf-info">
                            <img src="{{ asset('img/logo-pic.png') }}" alt="logo" />
                            <p>
                                Follow berita terbaru kami di <a href="#">@PressmaNews</a>
                                <span><a href="#">http://pressmanews.id</a></span>
                            </p>
                        </div>
                        <div class="tf-info">
                            <img src="{{ asset('img/logo-pic.png') }}" alt="logo" />
                            <p>
                                Update artikel pilihan setiap hari hanya di
                                <a href="#">@PressmaNews</a>
                            </p>
                        </div>
                    </div>

                    <div class="side-poll">
                        <h6>What's Your Favourite News Category</h6>
                        <form>
                            <ul>
                                <li><input type="radio" id="radio1" name="radiog_lite" class="css-checkbox"><label for="radio1" class="css-label radGroup1">Business</label></li>
                                <li><input type="radio" id="radio2" name="radiog_lite" class="css-checkbox"><label for="radio2" class="css-label radGroup1">Technology</label></li>
                                <li><input type="radio" id="radio3" name="radiog_lite" class="css-checkbox"><label for="radio3" class="css-label radGroup1">Science</label></li>
                                <li><input type="radio" id="radio4" name="radiog_lite" class="css-checkbox"><label for="radio4" class="css-label radGroup1">Nature</label></li>
                                <li><input type="radio" id="radio5" name="radiog_lite" class="css-checkbox"><label for="radio5" class="css-label radGroup1">Culture</label></li>
                            </ul>
                        </form>
                        <a href="#">Vote</a>
                    </div>
                </div>

                <div class="col-md-9 block-right">
                    @foreach ($posts as $post)
                        <div id="bl-featured">
                            <div class="bl-featured-big">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive" alt="{{ $post->title }}" />
                                <div class="bl-info">
                                    <span>{{ $post->category->name }}</span>
                                    <h3><a href="{{ route('single', $post->slug) }}">{{ $post->title }}</a></h3>
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
                                            <img src="{{ asset('storage/' . $fe1_post->image) }}" class="img-responsive" alt="{{ $fe1_post->title }}" />
                                            <div class="fn-meta">{{ $fe1_post->category->name }}</div>
                                        </div>
                                        <h4><a href="{{ route('single', $fe1_post->slug) }}">{{ $fe1_post->title }}</a></h4>
                                        <em><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($fe1_post->published_at)->translatedFormat('d M Y') }}</em>
                                        <p>{!! \Illuminate\Support\Str::words(strip_tags($fe1_post->content), 10, '...') !!}</p>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-md-6">
                                @foreach ($fe2_posts as $fe2_post)
                                    <div class="fn-inner">
                                        <div class="fn-thumb">
                                            <img src="{{ asset('storage/' . $fe2_post->image) }}" class="img-responsive" alt="{{ $fe2_post->title }}" />
                                            <div class="fn-meta">{{ $fe2_post->category->name }}</div>
                                        </div>
                                        <h4><a href="{{ route('single', $fe2_post->slug) }}">{{ $fe2_post->title }}</a></h4>
                                        <em><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($fe2_post->published_at)->translatedFormat('d M Y') }}</em>
                                        <p>{!! \Illuminate\Support\Str::words(strip_tags($fe2_post->content), 10, '...') !!}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="col-md-4">
            <!-- Popular News -->
            <div class="side-widget p-news">
                <h5><span>Popular News</span></h5>
                <div class="sw-inner">
                    <ul>
                        @foreach ($posts as $post)
                            <li>
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                                <div class="pn-info">
                                    <em><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M Y') }}</em>
                                    <h4><a href="{{ route('single', $post->slug) }}">{{ $post->title }}</a></h4>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Banner -->
            <div class="side-widget sw-banner">
                <a href="#"><img src="{{ asset('img/banner/3.jpg') }}" class="img-responsive" alt="Banner" /></a>
            </div>

            <div class="side-widget m-comment">
                <h5><span>Prestasi Prima</span></h5>
                <ul>
                    @foreach ($pp_posts as $pp_post)
                        <li>
                            <img src="{{ asset('storage/' . $pp_post->image) }}" alt="{{ $pp_post->title }}" />
                            <span>{{ $pp_post->category->name }}</span>
                            <h4><a href="{{ route('single', $pp_post->slug) }}">{{ $pp_post->title }}</a></h4>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
@endsection
