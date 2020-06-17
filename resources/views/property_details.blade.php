<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{csrf_token()}}"/>

    <title>CREA | Property Details</title>
    <link rel="icon" type="image/ico" sizes="52*32" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/reality-icon.css">
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert.min.css">
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
                    <div class="logo"><a href="" style="padding: 15px 0 6px;"><img alt=""
                                                                                              src="images/logo.png"
                                                                                              style="height: 64px;"></a>
                    </div>
                </div>
                <!--Info Box-->
                <div class="col-md-9 col-sm-12 right">
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
                            <li><a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand sticky_logo" href="{{url('')}}"><img src="images/logo.png"
                                                                                    class="logo"
                                                                                    alt=""></a>
                    </div> <!-- End Header Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                            <li>
                                <a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Home </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle"
                                   data-toggle="dropdown">Features </a>
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


<!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase">Property Details</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Property Details</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->


<!-- Property Detail Start -->
<section id="property" class="padding_top padding_bottom_half">
    <div class="container">
        <div class="row">
            <div class="col-md-8 listing1 property-details">
                <h2 class="text-uppercase" id="propertyName"></h2>
                <p class="bottom30" id="propertyAddress"></p>
                <div id="property-d-1" class="owl-carousel">

                </div>
                <div id="property-d-1-2" class="owl-carousel">

                </div>
                <div class="property_meta bg-black bottom40" id="propertyIcoSummary">
                </div>
                <h2 class="text-uppercase">Property Description</h2>
                <p class="bottom30" id="property_description_1"></p>
                <p class="bottom30" id="property_description_2"></p>
                <h2 class="text-uppercase bottom20">Quick Summary</h2>
                <div class="row property-d-table bottom40">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table table-striped table-responsive">
                            <tbody id="quickSummaryTbody1">

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table table-striped table-responsive">
                            <tbody id="quickSummaryTbody2">

                            </tbody>
                        </table>
                    </div>
                </div>
                <h2 class="text-uppercase bottom20">Features</h2>
                <div class="row bottom40">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="pro-list" id="featureList1">

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="pro-list" id="featureList2">

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="pro-list" id="featureList3">

                        </ul>
                    </div>
                </div>

                <h2 class="text-uppercase bottom20">Property Map</h2>
                <div class="row bottom40">
                    <div class="col-md-12 bottom20">
                        <div class="property-list-map">
                            <div id="property-listing-map" class="multiple-location-map"
                                 style="width:100%;height:430px;"></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <h2 class="text-uppercase top20">Similar Properties</h2>
                        <p class="bottom30">We have Properties in these Areas View a list of Featured Properties.</p>
                    </div>
                    <div class="col-sm-12">
                        <div id="two-col-slider" class="owl-carousel">



                        </div>
                    </div>
                </div>

            </div>
            <aside class="col-md-4 col-xs-12">
                <div class="property-query-area clearfix">
                    <div class="col-md-12">
                        <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
                    </div>
                    <form class="callus">

                        <div class="form-group col-sm-12">
                            <div class="col-sm-12">
                                <label for="drpLocation">Location</label>
                            </div>
                            <div class="col-sm-12">
                                <select id="drpLocation" class="selectTo form-control" multiple="multiple">
                                    <option></option>
                                    <option id="Ambalangoda">Ambalangoda</option>
                                    <option id="Ampara">Ampara</option>
                                    <option id="Anuradhapura">Anuradhapura</option>
                                    <option id="Badulla">Badulla</option>
                                    <option id="Battaramulla South">Battaramulla South</option>
                                    <option id="Batticaloa">Batticaloa</option>
                                    <option id="Bentota">Bentota</option>
                                    <option id="Beruwala">Beruwala</option>
                                    <option id="Chilaw">Chilaw</option>
                                    <option id="Colombo">Colombo</option>
                                    <option id="Dambulla">Dambulla</option>
                                    <option id="Dehiwala">Dehiwala</option>
                                    <option id="Devinuwara">Devinuwara</option>
                                    <option id="Ella Town">Ella Town</option>
                                    <option id="Eravur Town">Eravur Town</option>
                                    <option id="Galle">Galle</option>
                                    <option id="Gampaha">Gampaha</option>
                                    <option id="Gampola">Gampola</option>
                                    <option id="Hanwella Ihala">Hanwella Ihala</option>
                                    <option id="Haputale">Haputale</option>
                                    <option id="Hatton">Hatton</option>
                                    <option id="Hendala">Hendala</option>
                                    <option id="Hikkaduwa">Hikkaduwa</option>
                                    <option id="Homagama">Homagama</option>
                                    <option id="Horana South">Horana South</option>
                                    <option id="Horawala Junction">Horawala Junction</option>
                                    <option id="Ja Ela">Ja Ela</option>
                                    <option id="Jaffna">Jaffna</option>
                                    <option id="Kadugannawa">Kadugannawa</option>
                                    <option id="Kalmunai">Kalmunai</option>
                                    <option id="Kalutara">Kalutara</option>
                                    <option id="Kandana">Kandana</option>
                                    <option id="Kandy">Kandy</option>
                                    <option id="Kataragama">Kataragama</option>
                                    <option id="Katunayaka">Katunayaka</option>
                                    <option id="Kegalle">Kegalle</option>
                                    <option id="Kelaniya">Kelaniya</option>
                                    <option id="Kilinochchi">Kilinochchi</option>
                                    <option id="Koggala">Koggala</option>
                                    <option id="Kolonnawa">Kolonnawa</option>
                                    <option id="Kotikawatta">Kotikawatta</option>
                                    <option id="Kuliyapitiya">Kuliyapitiya</option>
                                    <option id="Kurunegala">Kurunegala</option>
                                    <option id="Maharagama">Maharagama</option>
                                    <option id="Matale">Matale</option>
                                    <option id="Matara">Matara</option>
                                    <option id="Mihintale">Mihintale</option>
                                    <option id="Minuwangoda">Minuwangoda</option>
                                    <option id="Mirissa city">Mirissa city</option>
                                    <option id="Monaragala">Monaragala</option>
                                    <option id="Moratuwa">Moratuwa</option>
                                    <option id="Mount Lavinia">Mount Lavinia</option>
                                    <option id="Mulleriyawa">Mulleriyawa</option>
                                    <option id="Negombo">Negombo</option>
                                    <option id="Nuwara Eliya">Nuwara Eliya</option>
                                    <option id="Panadura">Panadura</option>
                                    <option id="Peliyagoda">Peliyagoda</option>
                                    <option id="Pita Kotte">Pita Kotte</option>
                                    <option id="Point Pedro">Point Pedro</option>
                                    <option id="Polonnaruwa">Polonnaruwa</option>
                                    <option id="Puttalam">Puttalam</option>
                                    <option id="Ratnapura">Ratnapura</option>
                                    <option id="Sigiriya">Sigiriya</option>
                                    <option id="Sri Jayewardenepura Kotte">Sri Jayewardenepura Kotte</option>
                                    <option id="Talawakele">Talawakele</option>
                                    <option id="Talpe">Talpe</option>
                                    <option id="Tangalle">Tangalle</option>
                                    <option id="Trincomalee">Trincomalee</option>
                                    <option id="Unawatuna">Unawatuna</option>
                                    <option id="Vakarai">Vakarai</option>
                                    <option id="Valvedditturai">Valvedditturai</option>
                                    <option id="Vavuniya">Vavuniya</option>
                                    <option id="Wattala">Wattala</option>
                                    <option id="Wattegama">Wattegama</option>
                                    <option id="Weligama">Weligama</option>
                                    <option id="Welisara">Welisara</option>
                                    <option id="Wellawaya">Wellawaya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="col-sm-12">
                                <label for="drpPropertyType">Property Type</label>
                            </div>
                            <div class="col-sm-12">
                                <select id="drpPropertyType" class="selectTo form-control" multiple="multiple">
                                    <option></option>
                                    <option>Apartments</option>
                                    <option>Hotels</option>
                                    <option>House</option>
                                    <option>Land</option>
                                    <option>Villa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="col-sm-12">
                                <label for="drpContractType">Contract Type</label>
                            </div>
                            <div class="col-sm-12">
                                <select id="drpContractType" class="selectTo form-control" multiple="multiple">
                                    <option></option>
                                    <option>Sale</option>
                                    <option>Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="col-sm-12">
                                <div class="single-query-slider">
                                    <div class="clearfix top20">
                                        <label class="pull-left">Bed Rooms:</label>
                                        <div class="price text-right">
                                            <span></span>
                                            <div class="leftLabel"></div>
                                            <span>to </span>
                                            <div class="rightLabel"></div>
                                        </div>
                                    </div>
                                    <div data-range_min="0" data-range_max="15" data-cur_min="0" data-cur_max="15"
                                         class="nstSlider bedRoomsSlider">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="col-sm-12">
                                <div class="single-query-slider">
                                    <div class="clearfix top20">
                                        <label class="pull-left">Price Range:</label>
                                        <div class="price text-right">
                                            <span>$</span>
                                            <div class="leftLabel"></div>
                                            <span>to $</span>
                                            <div class="rightLabel"></div>
                                        </div>
                                    </div>
                                    <div data-range_min="0" data-range_max="9500000" data-cur_min="0"
                                         data-cur_max="9500000"
                                         class="nstSlider priceSlider">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12 text-center">
                            <button type="button" id="btnSearch" class="btn-blue border_radius">Search</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="bottom40 margin40">Featured Properties</h3>
                    </div>
                </div>
                <div id="featuredItemContainer">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="margin40 bottom20">Latest Properties</h3>
                    </div>
                    <div class="col-md-12">
                        <div id="agent-2-slider" class="owl-carousel">

                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Property Detail End -->


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
                    <p class="bottom15">If you are interested in castle do not wait and <a href="javascript:void(0);">BUY
                            IT NOW!</a></p>
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
                    <p>Copyright &copy; 2019 <span>Castle</span>. All rights reserved.</p>
                </div>
                <div class="col-md-5 text-right">
                    <p>Designed by <a href="javascript:void(0);">Brighthemes</a></p>
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
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="plugins/sweetalert/sweetalert.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
<script
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDvYpTPkF3uHTteyeXPhjeHMq51klQbQt8&amp;libraries=places"></script>
<script src="jsPages/property_details.js"></script>
<script>
    $('.selectTo').select2({
        placeholder: "All"
    });
</script>
</body>
</html>

