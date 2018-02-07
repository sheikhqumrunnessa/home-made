<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('/') }}/front-end/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}/front-end/img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/camera.css">
    <!-- font-awesome font -->
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/font/font-awesome.css" type="text/css" media="screen">
    <!-- fontello font -->
    <script src="{{ asset('/') }}/front-end/js/jquery.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery-migrate-1.1.1.js"></script>
    <script src="{{ asset('/') }}/front-end/js/superfish.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery.mobilemenu.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery.cookie.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery.equalheights.js"></script>
    <script src="{{ asset('/') }}/front-end/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{ asset('/') }}/front-end/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="{{ asset('/') }}/front-end/js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery.mousewheel.min.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery.touchSwipe.min.js"></script>
    <script src="{{ asset('/') }}/front-end/js/jquery.ui.totop.js"></script>
    <script>
        $(document).ready(function(){
            jQuery('.camera_wrap').camera();
        });
        $(function() {
            $('#foo').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev',
                next: '#next',
                scroll: 1,
                items: {
                    height: '100%',
                    width: 290,
                    visible: {
                        min: 1,
                        max: 4
                    }
                },
                mousewheel: true,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });
        });
    </script>
    <!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/ie.css" type="text/css" media="screen">
    <script src="{{ asset('/') }}/front-end/assets/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<header>
    <div class="header-white">
        <div class="container">
            <div class="row">
                <div class="span12 header-menu">
                    <ul>
                        <li><a href="#">Join Free</a></li>
                        <li><a href="#">Subscribe to newsletter</a></li>
                        <li><a href="#">Log in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span12 header-block">
                <h1 class="brand"><a href="index.html"><img src="{{ asset('/') }}/front-end/img/logo.png" alt="Cooking Recipes"></a></h1>
                <div class="navbar navbar_ clearfix">
                    <div class="navbar-inner">
                        <div class="nav-collapse nav-collapse_ collapse">
                            <ul class="nav sf-menu clearfix">
                                <li class="active"><a href="{{route('/')}}">Home</a></li>
                                <li class="sub-menu"><a href="{{route('news')}}">News</a>
                                    <ul>
                                        <li><a href="#">Lorem ipsum</a></li>
                                        <li><a href="#">Dolor sit amet</a></li>
                                        <li><a href="#">Conse ctetur</a></li>
                                        <li><a href="#">Dipisicing</a></li>
                                        <li><a href="#">Eeliteiusmod</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('new-recipe')}}">New recipes</a></li>
                                <li><a href="{{route('post-recipe')}}">Post recipe</a></li>
                                <li><a href="{{route('contacts')}}">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!--==============================content=================================-->
@yield('body')
<!--==============================aside=================================-->
<aside>
    <div class="container">
        <div class="row aside-list">
            <div class="span3">
                <div class="maxheight">
                    <h5>Navigation</h5>
                    <ul>
                        <li><a href="{{route('/')}}" class="active">Home</a></li>
                        <li><a href="{{route('news')}}">News</a></li>
                        <li><a href="{{route('new-recipe')}}">New recipes</a></li>
                        <li><a href="{{route('post-recipe')}}">Post recipe</a></li>
                        <li><a href="{{route('contacts')}}">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="maxheight">
                    <h5>Categories</h5>
                    <ul>
                        <li><a href="#">Breakfast Recipes</a></li>
                        <li><a href="#">Appetizer Recipes</a></li>
                        <li><a href="#">Bread Recipes</a></li>
                        <li><a href="#">Soup Recipes</a></li>
                        <li><a href="#">Main Dish Recipes</a></li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="maxheight">
                    <h5>Popular</h5>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Conse ctetur adipisicing</a></li>
                        <li><a href="#">Elit sed do eiusmod tempor</a></li>
                        <li><a href="#">Incididunt ut labore</a></li>
                        <li><a href="#">Et dolore magna aliqua</a></li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="maxheight">
                    <h5>Events</h5>
                    <ul>
                        <li><a href="#">Dolor sit amet</a></li>
                        <li><a href="#">Ctetur adipisicing</a></li>
                        <li><a href="#">Elit sed do eiusmod tempor</a></li>
                        <li><a href="#">Incididunt ut labore</a></li>
                        <li><a href="#">Et dolore magna</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="span12">Cooking Recipes &copy; 2013. <br><a href="{{route('privacy-policy')}}">Privacy Policy</a> <!-- {%FOOTER_LINK} --></div>
        </div>
    </div>
</footer>
<script src="{{ asset('/') }}/front-end/js/bootstrap.js"></script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>