<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{csrf_token()}}"/>

    <title>CREA | Favorite Properties</title>
    <link rel="icon" type="image/ico" sizes="52*32" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/reality-icon.css">
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="plugins/select2/css/select2.min.css">
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
</head>
<body>


<!--Loader-->
<div id="page-loader">
    <div class="page-loader__logo">
        <img src="{{asset('images/logo.png')}}" alt="Logo">
    </div><!-- .page-loader__logo -->

    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div><!-- .sk-folding-cube -->
</div>
<!--Loader-->


<!--Header-->
<header class="layout_default">

    <div class="topbar grey">
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                </div>
                <div class="col-md-7 text-right">
                    <ul class="breadcrumb_top text-right">
                        <li><a href="favorite_properties"><i class="icon-icons43"></i>Favorites</a></li>
                        <li><a href="login"><i class="icon-icons179"></i>Login / Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-upper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo"><a href="{{url('/')}}" style="padding: 15px 0 6px;"><img alt=""
                                                                                               src="images/logo.png"
                                                                                               style="height: 64px;"></a>
                    </div>
                </div>
                <!--Info Box-->
                <div class="col-md-9 col-sm-12 right hidden-xs ">
                    <div class="info-box first">
                        <div class="icons"><i class="icon-telephone114"></i></div>
                        <ul>
                            <li><strong>Phone Number</strong></li>
                            <li>+1 900 234 567 - 68</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <div class="icons"><i class="icon-icons74"></i></div>
                        <ul>
                            <li><strong>Manhattan Hall,</strong></li>
                            <li>Castle Melbourne, australia</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <div class="icons"><i class="icon-icons142"></i></div>
                        <ul>
                            <li><strong>Email Address</strong></li>
                            <li><a href="javascript:void(0)">info@castle.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="attr-nav">
                        <ul class="social_share clearfix">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href="javascript:void(0)"><i class="icon-google4"></i></a></li>
                        </ul>
                    </div>
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand sticky_logo" href="{{url('')}}"><img src="images/logo-white.png"
                                                                                    class="logo" alt=""></a>
                    </div> <!-- End Header Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                            <li class="dropdown">
                                <a href="{{url('')}}">Home </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Features </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">News</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">FAQ's</a>
                                    </li>
                                    <li><a href="favorite_properties">Favorite Properties</a></li>
                                </ul>
                            </li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--Header Ends-->


<section class="page-banner padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase">Favorite Properties</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Favorite Properties</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<!-- Listing Start -->
<section id="property" class="padding_top listing1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <h2 class="text-uppercase">My favorite Properties</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="row" id="favoritePropertiesContainer">

        </div>
    </div>
</section>
<!-- Listing end -->


<!--Footer-->
<footer class="padding_top footer2">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <a href="javascript:void(0);" class="logo bottom30"><img src="images/logo.png" alt="logo"></a>
                    <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        tempor cum consectetuer
                        adipiscing.
                    </p>
                    <p class="bottom15">If you are interested in castle do not wait and <a href="javascript:void(0);">BUY IT NOW!</a></p>
                    <ul class="social_share">
                        <li><a href="javascript:void(0);" class="facebook"><i class="icon-facebook-1"></i></a></li>
                        <li><a href="javascript:void(0);" class="twitter"><i class="icon-twitter-1"></i></a></li>
                        <li><a href="javascript:void(0);" class="google"><i class="icon-google4"></i></a></li>
                        <li><a href="javascript:void(0);" class="linkden"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="javascript:void(0);" class="vimo"><i class="icon-vimeo3"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">Latest News</h4>
                    <div class="media">
                        <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
                        <div class="media-body">
                            <a href="javascript:void(0);">Nearest mall in high tech Goes your villa</a>
                            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
                        <div class="media-body">
                            <a href="javascript:void(0);">Nearest mall in high tech Goes your villa</a>
                            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
                        <div class="media-body">
                            <a href="javascript:void(0);">Nearest mall in high tech Goes your villa</a>
                            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">Get in Touch</h4>
                    <ul class="getin_touch">
                        <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li>
                        <li><a href="javascript:void(0);"><i class="icon-icons142"></i>info@castle.com</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-browser2"></i>www.castle.com</a></li>
                        <li><i class="icon-icons74"></i>Castle Melbourne, Merrick Way,FL 12345 australia</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30 heading">Subscribe</h4>
                    <p>Sign up with your email to get latest updates and offers</p>
                    <form class="top30">
                        <input class="search" placeholder="Enter your Email" type="text" style="color: #363946;">
                        <a class="button_s" href="#">
                            <i class="icon-mail-envelope-open"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--CopyRight-->
<div class="copyright index2">
    <div class="copyright_inner">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>Copyright &copy; 2017 <span>Casstle</span>. All rights reserved.</p>
                </div>
                <div class="col-md-5 text-right">
                    <p>Designed by <a href="javascript:void(0)">Brighthemes</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/selectbox-0.2.min.js"></script>
<script src="js/zelect.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="plugins/select2/js/select2.full.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
<script src="jsPages/favorite_properties.js"></script>
<script
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBxkj_IYX-5eajayv78Kg20BGJ5_OP3LJM&amp;libraries=places"></script>
<script src="js/google-map.js"></script>
{{--<script src="js/neary-by-place.js"></script>--}}
<script>
    $('.selectTo').select2({
        placeholder: "All"
    });
</script>

</body>
</html>

