@extends('index')

@section('content')
    <div class="main-content container">
        {{-- <div class="col-md-12">
            <div class="page_header">
                <div class="col-md-12">
                    <h5 class="no-uppercase">Qatar Airways, the global launch customer of the new Airbus A350</h5>
                    <ul class="bcrumbs">
                        <li><a href="#">home</a></li>
                        <li><a href="#">travel</a></li>
                        <li>Qatar Airways, the global launch customer of the new Airbus A350</li>
                    </ul>
                </div>
            </div>
        </div> --}}

        <div class="col-md-8 news-single">
            <div id="bl-featured">
                <div class="bl-featured-big">
                    <a href="./news_single.html">
                        <img src="{{ asset('storage/' . $singgleposts->image) }}" class="img-responsive" alt="" />
                        <div class="bl-info text-capitalize">
                            <h3>{{ $singgleposts->title }}</h3>
                        </div>
                    </a>
                </div>
            </div>
            <p>{!! $singgleposts->content !!}</p>
            <div class="ns-meta">
                <br>
                <div class="nsm-inner">
                    <span><i class="fa fa-clock-o"></i>{{ $singgleposts->published_at }}</span>
                </div>
                <br>
            </div>

            {{-- <div class="news-comment">
                <h5>5 Comments</h5>
                <ul>
                    <li>
                        <img src="images/news/2/1.jpg" alt="" />
                        <div class="nc-inner">
                            <h6>Collis Ta'eed <span>47 minutes ago</span></h6>
                            <p>Testing the comments</p>
                            <a href="#" class="reply">reply</a>
                        </div>
                    </li>
                    <li class="sub-comment">
                        <img src="images/news/2/2.jpg" alt="" />
                        <div class="nc-inner">
                            <h6>Jeffrey Way <span>47 minutes ago</span></h6>
                            <p>Works good</p>
                            <a href="#" class="reply">reply</a>
                        </div>
                    </li>
                    <li class="sub-sub-comment">
                        <img src="images/news/2/3.jpg" alt="" />
                        <div class="nc-inner">
                            <h6>John Smith <span>47 minutes ago</span></h6>
                            <p>lorem ipsum dolor sit amet</p>
                            <a href="#" class="reply">reply</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/news/2/3.jpg" alt="" />
                        <div class="nc-inner">
                            <h6>Collis Ta'eed <span>47 minutes ago</span></h6>
                            <p>dolor sit amet</p>
                            <a href="#" class="reply">reply</a>
                        </div>
                    </li>
                </ul>
            </div> --}}

            {{-- <div class="n-commentform">
                <h5>Send Us a message</h5>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ncf-ico">
                                <input type="text" placeholder="Name">
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <div class="ncf-ico">
                                <input type="text" placeholder="e-mail">
                                <span><i class="fa fa-envelope-o"></i></span>
                            </div>
                            <div class="ncf-ico">
                                <input type="text" placeholder="website">
                                <span><i class="fa fa-link"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ncf-textarea">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <button type="submit">Post a Comment</button>
                        </div>
                    </div>
                </form>
            </div> --}}
        </div>

        <!-- Sidebar -->
        <aside class="col-md-4">
            <!-- Popular News -->
            <div class="side-widget p-news">
                <h5><span>News recommendations</span></h5>
                <div class="sw-inner">
                    <ul>
                        @foreach ($posts as $post)
                        <li>
                            <img src="{{ asset('storage/'. $post->image) }}" alt="" />
                            <div class="pn-info">
                                <em><i class="fa fa-clock-o"></i>  {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M Y') }}  <a href="#">
                                <h4><a href="{{ route('single', $post->slug) }}">{{ $post->title }}</a></h4>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Banner -->
            <div class="side-widget sw-banner">
                <a href="#"><img src="images/banner/3.jpg" class="img-responsive" alt="" /></a>
            </div>
            {{-- <div class="side-widget m-comment">
                <h5><span>Most Commented</span></h5>
                <ul>
                    <li>
                        <img src="images/xtra/8.jpg" alt="" />
                        <span>Entertainment</span>
                        <h4><a href="#">Designed BY the Community, FOR the Community!</a></h4>
                    </li>
                    <li>
                        <img src="images/xtra/9.jpg" alt="" />
                        <i class="fa fa-play"></i>
                        <span>Entertainment</span>
                        <h4><a href="#">Designed BY the Community, FOR the Community!</a></h4>
                    </li>
                    <li>
                        <img src="images/xtra/10.jpg" alt="" />
                        <span>Entertainment</span>
                        <h4><a href="#">Designed BY the Community, FOR the Community!</a></h4>
                    </li>
                </ul>
            </div> --}}
        </aside>
    </div>
@endsection
