@extends('front-end.master')
@section('title')

    Home
@endsection
@section('body')
    <div id="content">
        <div class="slider">
            <div class="camera_wrap">
                <div data-src="{{ asset('/') }}/front-end/img/slide-1.jpg">
                    <div class="camera_caption fadeIn">
                        For those who <span>have taste for life</span>
                    </div>
                </div>
                <div data-src="{{ asset('/') }}/front-end/img/slide-2.jpg">
                    <div class="camera_caption fadeIn">
                        Gourmet cooking <span>resource</span>
                    </div>
                </div>
                <div data-src="{{ asset('/') }}/front-end/img/slide-3.jpg">
                    <div class="camera_caption fadeIn">
                        The source of your <span>cooking inspiration</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h3>What's new?</h3>
                </div>
            </div>
            <div class="row">
                <div class="list_carousel responsive clearfix">
                    <ul id="foo" class="text">
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img1.jpg">
                                <a href="#" class="caption">
                                    <p class="text-info">Quis nostrud</p>
                                    Adipisicing elit sed do eiusmod
                                </a>
                            </div>
                        </li>
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img2.jpg">
                                <a href="#" class="caption"><p class="text-info">Excepteur sint </p>
                                    Adipisicing elit sed do eiusmod</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img3.jpg">
                                <a href="#" class="caption">
                                    <p class="text-info">Occaecat cupidatat</p>
                                    Adipisicing elit sed do eiusmod
                                </a>
                            </div>
                        </li>
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img4.jpg">
                                <a href="#" class="caption">
                                    <p class="text-info">Non proident</p>
                                    Adipisicing elit sed do eiusmod
                                </a>
                            </div>
                        </li>
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img1.jpg">
                                <a href="#" class="caption">
                                    <p class="text-info">Quis nostrud</p>
                                    Adipisicing elit sed do eiusmod
                                </a>
                            </div>
                        </li>
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img2.jpg">
                                <a href="#" class="caption">
                                    <p class="text-info">Excepteur sint </p>
                                    Adipisicing elit sed do eiusmod
                                </a>
                            </div>
                        </li>
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img3.jpg">
                                <a href="#" class="caption">
                                    <p class="text-info">Occaecat cupidatat</p>
                                    Adipisicing elit sed do eiusmod
                                </a>
                            </div>
                        </li>
                        <li class="span3">
                            <div>
                                <img alt="" src="{{ asset('/') }}/front-end/img/page1-img4.jpg">
                                <a href="#" class="caption">
                                    <p class="text-info">Non proident</p>
                                    Adipisicing elit sed do eiusmod
                                </a>
                            </div>
                        </li>
                    </ul>
                    <a id="prev" class="prev" href="#"></a>
                    <a id="next" class="next" href="#"></a>
                </div>
            </div>
        </div>
        <div class="border-1 bot-1">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <h3>Kids' kitchen</h3>
                        <ul class="list-kids">
                            <li>
                                <img src="{{ asset('/') }}/front-end/img/page1-img5.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Quis nostrud</a></p>
                                Adipisicing elit sed do eiusmod
                            </li>
                            <li>
                                <img src="{{ asset('/') }}/front-end/img/page1-img7.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Excepteur sint</a></p>
                                Adipisicing elit sed do eiusmod
                            </li>
                            <li>
                                <img src="{{ asset('/') }}/front-end/img/page1-img9.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Occaecat</a></p>
                                Adipisicing elit sed do eiusmod
                            </li>
                        </ul>
                        <a href="#" class="link">See all</a>
                    </div>
                    <div class="span4">
                        <h3>What we offer </h3>
                        <ul class="list-kids">
                            <li>
                                <img src="{{ asset('/') }}/front-end/img/page1-img6.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Cupidatat non</a></p>
                                Adipisicing elit sed do eiusmod
                            </li>
                            <li>
                                <img src="{{ asset('/') }}/front-end/img/page1-img8.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Proident sunt</a></p>
                                Adipisicing elit sed do eiusmod
                            </li>
                            <li>
                                <img src="{{ asset('/') }}/front-end/img/page1-img10.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Culpa qui officia</a></p>
                                Adipisicing elit sed do eiusmod
                            </li>
                        </ul>
                        <a href="#" class="link">See all</a>
                    </div>
                    <div class="span4">
                        <h3>About us</h3>
                        <ul class="list-about">
                            <li>
                                <p class="text-info">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</p>
                                Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </li>
                            <li>
                                <p class="text-info">Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</p>
                                Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                            </li>
                        </ul>
                        <a href="#" class="link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-1">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h3>Follow us</h3>
                        <ul class="list-follow row">
                            <li class="span4">
                                <img src="{{ asset('/') }}/front-end/img/fb.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Facebook</a></p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit
                            </li>
                            <li class="span4">
                                <img src="{{ asset('/') }}/front-end/img/tw.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">Twitter</a></p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit
                            </li>
                            <li class="span4">
                                <img src="{{ asset('/') }}/front-end/img/yt.jpg" alt="">
                                <p class="text-info"><a href="#" class="text-info">You Tube</a></p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
