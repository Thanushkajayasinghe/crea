<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{csrf_token()}}"/>

    <title>CREA | Home</title>
    <link rel="icon" type="image/ico" sizes="52*32" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reality-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootsnav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/range-Slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/sweetalert/sweetalert.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/flaticon/flaticon.css')}}">
    <style>
        .select2-container {
            width: 100% !important;
        }

        .box-two {
            -webkit-box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.10);
            -moz-box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.10);
            box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.10);
        }

        #whyChooseUs {
            background: linear-gradient(rgba(17, 20, 35, .3),
            rgba(17, 20, 35, .3)), url("{{asset('images/haddyliving.jpg')}}") no-repeat center / cover;
            overflow: hidden;
            position: relative;
        }

        #whyChooseUs::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 60%;
            height: 100%;
            background-color: rgba(13, 20, 50, 0.7);
        }

        .pb_30 {
            padding-bottom: 30px;
        }

        .icon_default i {
            color: #17c788;
        }

        .icon_font i {
            font-size: 52px;
        }

        .living-list ul li i {
            float: left;
            padding-right: 14px;
            display: table;
        }

        .living-list ul li {
            text-align: justify;
        }

        .living-list ul li p {
            color: #eceeed;
        }

        .box-six i {
            border: 1px solid;
            border-top-color: currentcolor;
            border-right-color: currentcolor;
            border-bottom-color: currentcolor;
            border-left-color: currentcolor;
            border-radius: 50%;
            position: relative;
            display: inline-block;
            width: 120px;
            height: 120px;
        }

        @media (max-width: 991.98px) {
            #whyChooseUs::before {
                width: 100%;
            }

            .tp-parallax-wrap {
                width: 95% !important;
            }

            .tp-parallax-wrap:first-child {
                top: 150px !important;
            }

            .tp-parallax-wrap:nth-child(2) {
                top: 330px !important;
            }

            .tp-loop-wrap {
                width: 100% !important;
            }

            #two-col-slider .owl-prev {
                position: absolute;
                top: -119px;
                right: 39px;
                display: initial !important;
            }

            #two-col-slider .owl-next {
                position: absolute;
                top: -119px;
                right: -6px;
                display: initial !important;
            }
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
<!--Loader Ends-->


<!--Slider-->
<div class="rev_slider_wrapper">
    <div id="rev_overlaped" class="rev_slider" data-version="5.0">
        <ul>
            <!-- SLIDE -->
            <li data-transition="fade">
                <img src="images/home1-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                     class="rev-slidebg">
            </li>
            <li data-transition="fade">
                <img src="images/home1-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                     class="rev-slidebg">
            </li>
            <li data-transition="fade">
                <img src="images/home1-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                     class="rev-slidebg">
            </li>
            <div class="tp-static-layers">
                <div class="tp-caption tp-static-layer"
                     id="slide-37-layer-2"
                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','180','150','100']"
                     data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']"
                     data-fontsize="['48','48','28','28']"
                     data-start="500"
                     data-responsive_offset="on"
                     data-basealign="slide"
                     data-startslide="0"
                     data-endslide="5"
                     style="z-index: 5;">
                    <h1><span class="t_white">We don’t just find Great Deals<br/> We Create them</span></h1>
                </div>
                <div class="tp-caption tp-static-layer"
                     id="slide-37-layer-2"
                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['150','100','120','120']"
                     data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']"
                     data-start="500"
                     data-basealign="slide"
                     data-startslide="0"
                     data-endslide="5"
                     style="z-index: 5;">
                    <p class="t_white">We Deal with Different kinds of Properties No matter you need a House,
                        an Apartment or garage. <br> You’ll find a good option on our Theme.
                    </p>
                </div>
                <div class="tp-caption tp-static-layer"
                     id="slide-37-layer-2"
                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']"
                     data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']"
                     data-start="500"
                     data-basealign="slide"
                     data-startslide="0"
                     data-endslide="5"
                     style="z-index: 5;"><a href="pls" class="btn-white border_radius uppercase">View Properties</a>
                </div>
            </div>
        </ul>
    </div>
</div>
<!--Slider Ends-->


<!--Header-->
<div id="mainMenuBarAnchor"></div>
<header class="white_header">
    <nav class="navbar navbar-default bootsnav">
        <div class="container" style="margin: 0 15px;width: 98%;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"
                                style="margin: 20px;">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{url('')}}" style="padding: 0;"><img src="images/logo.png"
                                                                                            class="logo" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li class="dropdown active">
                                <a href="javascript:void(0);">Home </a>
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
                            <li><a href="javascript:void(0);" id="bestDealNav">Best Deal</a></li>
                            <li><a href="javascript:void(0);" id="whatWeDoNav">What We Do</a></li>
                            <li><a href="javascript:void(0);" id="howItWorksNav">How it Works</a></li>
                            <li><a href="javascript:void(0);" id="whyChooseUsNav">Why Choose Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--Header Ends-->


<!-- Search Content and Other Panel -->
<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">

    <!--Top Line Menu-->
    <div class="topbar clearfix">
        <ul class="breadcrumb_top pull-right">
            <li><a href="favorite_properties"><i class="icon-icons43"></i>Favorites</a></li>
            <li><a href="login"><i class="icon-icons179"></i>Login / Register</a></li>
            <li></li>
            <li class="last-icon"><i class="icon-icons215"></i></li>
        </ul>
    </div>
    <!--Top Line Menu End-->

    <form class="callus top30 clearfix centered" style="padding: 30px 10px 15px 10px">
        <h2 class="text-uppercase t_white bottom20 text-center"><span class="fa fa-search"></span>&nbsp;&nbsp;search
        </h2>
        <div class="row">
            <div class="col-sm-12 form-group">
                <div class="col-sm-6 form-group">
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
                <div class="col-sm-6 form-group">
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
            </div>
            <div class="col-sm-12 form-group">
                <div class="col-sm-6">
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
            </div>
            <div class="col-sm-12 form-group">
                <div class="col-sm-8">
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
            </div>
            <div class="col-sm-12 form-group">
                <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
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
                            <div data-range_min="0" data-range_max="9500000" data-cur_min="0" data-cur_max="9500000"
                                 class="nstSlider priceSlider">
                                <div class="bar"></div>
                                <div class="leftGrip"></div>
                                <div class="rightGrip"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
                    <button type="button" id="btnSearch" class="border_radius btn-yellow text-uppercase">Search</button>
                </div>
            </div>
        </div>

    </form>
</div>
<!-- Search Content and Other Panel Ends-->


<!-- Featured Properties -->
<section id="property" class="padding bg_gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">Featured Real Estate Properties</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="clearfix">
            <div id="filters-property" class="cbp-l-filters-button text-center">
                <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>
                <div data-filter=".sale" class="cbp-filter-item">SALE</div>
                <div data-filter=".rent" class="cbp-filter-item">RENT</div>
            </div>
        </div>
        <div id="property-gallery" class="cbp listing1">

        </div>
        <div class="col-sm-12 text-center top20">
            <a href="pls" class="btn-dark border_radius uppercase margin40">more listings</a>
        </div>
    </div>
</section>
<!-- Featured Properties Ends -->


<!-- Best Deal Properties -->
<section id="deals" class="padding bg_light">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="uppercase">Best Deal Properties</h2>
                <p class="heading_space">We are proud to present to you some of the best homes, apartments, offices e.g.
                    across Australia for affordable prices.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="two-col-slider" class="owl-carousel">

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Best Deal Properties Ends -->


<!-- What we do -->
<section id="parallax_four" class="padding">
    <div id="agent-2" class="padding_bottom" style="padding-bottom: 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="main-title-one text-center">
                        <h2 class="titleR color-primary">What We Do</h2>
                        <p style="margin-top: 50px;">We listed our opportunity and services as a real estate company</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 35px;">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-rent" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Selling Service</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-for-rent" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Rental Service</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-list" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Property Listing</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-diagram" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Legal Investment</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-real-estate" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Management</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-sketch" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Building Architecture</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-seller-1" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Register Agents</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box-one p_30 text-center icon_default icon_font rounded mb-4">
                            <i class="flaticon-increase" aria-hidden="true"></i>
                            <h5 class="hover_primary py_15 m-0"><a href="javascript:void(0);">Increase Value</a></h5>
                            <p class="color-secondery">Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras
                                justo potenti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- What we do Ends -->


<!-- How It Works -->
<section id="whatWeDo" style="padding: 80px 0;padding-bottom: 24px;">
    <div id="agent-2" class="padding_bottom" style="padding-bottom: 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="main-title-one text-center">
                        <h2 class="titleR color-primary">How It Works</h2>
                        <p style="margin-top: 50px;">Process to get your right one, almost easy, flexible and fun.</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 35px; margin-bottom: 70px;">
                <div class="row">
                    <div class="col-lg-4 form-group">
                        <div class="box-two p_30 icon_default icon_font color-secondery rounded mb-4">
                            <i class="flaticon-home" aria-hidden="true"></i>
                            <h5 class="color-primary py-2 m-0">Search Your Home</h5>
                            <p class="pt_15">Select your home or appartment and let’s contact with us. Ask what answer
                                you need. You can also contact with the agent if you have any question.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 form-group">
                        <div class="box-two p_30 icon_default icon_font color-secondery rounded mb-4">
                            <i class="flaticon-contact" aria-hidden="true"></i>
                            <h5 class="color-primary py-2 m-0">Let's Contact With Us</h5>
                            <p class="pt_15">Select your home or appartment and let’s contact with us. Ask what answer
                                you need. You can also contact with the agent if you have any question.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 form-group">
                        <div class="box-two p_30 icon_default icon_font color-secondery rounded mb-4">
                            <i class="flaticon-payment" aria-hidden="true"></i>
                            <h5 class="color-primary py-2 m-0">Make a Deal and Payment</h5>
                            <p class="pt_15">Sign upi online and move in as soon as you ready! We complete your property
                                deal in our office. After the deal you can pay the instalment or rent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Ends -->


<!-- Why Choose Us -->
<section id="whyChooseUs" style="padding: 80px 0;padding-bottom: 24px; ">
    <div id="agent-2" class="padding_bottom" style="padding-bottom: 0 !important;">
        <div class="container" style="width: 100%;">
            <div style="margin-top: 35px; margin-bottom: 70px;">
                <div class="container" style="width: 100%;">
                    <div class="row">
                        <div class="col-md-12 col-lg-7">
                            <div style="margin-top: -10%;margin-bottom: 8%;">
                                <div class="main-title-one text-center">
                                    <h2 style="color: white;">Why Choose Us ?</h2>
                                </div>
                            </div>
                            <div class="living-list" style="color: #fff;margin-top: 6%;">
                                <ul>
                                    <li class="pb_30 icon_default icon_font col-md-6">
                                        <i class="flaticon-reward" aria-hidden="true"></i>
                                        <h5 class="pb_20">Experience Quality</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas
                                            adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum
                                            conubia inceptos egestas dolor class.</p>
                                    </li>
                                    <li class="pb_30 icon_default icon_font col-md-6">
                                        <i class="flaticon-real-estate" aria-hidden="true"></i>
                                        <h5 class="pb_20">Management Company</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas
                                            adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum
                                            conubia inceptos egestas dolor class.</p>
                                    </li>
                                    <li class="pb_30 icon_default icon_font col-md-6">
                                        <i class="flaticon-seller" aria-hidden="true"></i>
                                        <h5 class="pb_20">Help Investor</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas
                                            adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum
                                            conubia inceptos egestas dolor class.</p>
                                    </li>
                                    <li class="pb_30 icon_default icon_font col-md-6">
                                        <i class="flaticon-search" aria-hidden="true"></i>
                                        <h5 class="pb_20">Investment Analysis</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas
                                            adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum
                                            conubia inceptos egestas dolor class.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us Ends -->


<!-- Partners -->
<section id="logos">
    <div class="container partner2 padding">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="uppercase">Our Partners</h2>
                <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
            </div>
        </div>
        <div class="row">
            <div id="partner-slider" class="owl-carousel">
                <div class="item">
                    <img src="images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo5.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo5.png" alt="Featured Partner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners Ends -->


<!-- Testinomials -->
<section id="testinomial" class="padding" style="background-position: 50% -15px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="uppercase">Happy Customers</h2>
                <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra
                    erat Aenean elit tellus.</p>
            </div>
            <div class="col-sm-6">
                <div class="testinomial_wrap heading_space clearfix">
                    <div class="testinomial_text border_radius text-center bottom30">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum
                            soluta nobis consectetuer adipiscing.</p>
                        <i><img src="images/quote-left.png" alt=""></i>
                    </div>
                    <div class="col-xs-12 customer">
                        <img src="images/author.png" alt="happy client">
                        <h4> SAM NICHOLSON</h4>
                        <span>( NorthMarq Capital  )</span>
                        <img src="images/stars.png" alt="rating" class="rating pull-xs-right">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="testinomial_wrap heading_space clearfix">
                    <div class="testinomial_text border_radius text-center bottom30">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum
                            soluta nobis consectetuer adipiscing.</p>
                        <i><img src="images/quote-left.png" alt=""></i>
                    </div>
                    <div class="col-xs-12 customer">
                        <img src="images/author.png" alt="happy client">
                        <h4> SAM NICHOLSON</h4>
                        <span>( NorthMarq Capital  )</span>
                        <img src="images/stars.png" alt="rating" class="rating pull-xs-right">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <a href="javascript:void(0)" class="cd-see-all btn-white border_radius"><i class="fa fa-th"
                                                                                           aria-hidden="true"></i>view
                    all</a>
            </div>
        </div>
    </div>
</section>
<!-- Testinomials Ends -->


<!-- Testinomial Collepse -->
<div class="cd-testimonials-all">
    <div class="cd-testimonials-all-wrapper">
        <ul style="position: relative; height: 1549.03px;">
            <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 0px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi
                    molestias nihil illum nisi temporibus.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 0px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic
                    nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque
                    recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim
                    pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias
                    fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 0px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae
                    laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat
                    incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum,
                    a error.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 274px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae
                    officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus,
                    debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat
                    explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima
                    quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 360px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi
                    molestias nihil illum nisi temporibus.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 446px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci
                    voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 635px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat
                    consequuntur officiis.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 720px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus
                    reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel,
                    dolore.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 742px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit,
                    beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit?
                    Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea
                    amet optio magni voluptatem nemo, natus nihil.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 888px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus
                    omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam
                    ipsam quibusdam quidem, dolorem deleniti id.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 1038px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus
                    reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel,
                    dolore.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
            <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 1124px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum
                    molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat
                    incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta
                    temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum,
                    molestiae alias. Ab, quidem rem fugit delectus quod.</p>
                <div class="cd-author">
                    <img src="images/author.png" alt="Author image">
                    <ul class="cd-author-info">
                        <li>SAM NICHOLSON</li>
                        <li>CEO, CompanyName</li>
                    </ul>
                </div>
            </li>
        </ul>
        <a href="javascript:void(0);" class="close-btn">Close</a>
    </div>
</div>
<!-- Testinomial Collepse Ends -->


<!-- Footer -->
<footer class="padding_top footer2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="footer_panel bottom30">
                    <a href="javascript:void(0);" class="logo bottom30"><img src="images/logo-white.png" alt="logo"></a>
                    <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        tempor cum consectetuer
                        adipiscing.</p>
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

            <div class="col-md-4 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">Get in Touch</h4>
                    <ul class="getin_touch">
                        <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li>
                        <li><a href="javascript:void(0);"><i class="icon-icons142"></i>info@castle.com</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-global"></i>www.castle.com</a></li>
                        <li><i class="icon-icons74"></i>Castle Melbourne, Merrick Way,FL 12345 australia</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30 heading">Subscribe</h4>
                    <p>Sign up with your email to get latest updates and offers</p>
                    <form class="top30">
                        <input id="subscribeEmailTxt" class="search" placeholder="Enter your Email" type="text">
                        <a class="button_s" href="javascript:void(0);">
                            <i class="icon-mail-envelope-open"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Ends -->


<!-- Copyright -->
<div class="copyright index2">
    <div class="copyright_inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright © {{date('Y')}} <span>CREA</span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Copyright Ends -->

<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="plugins/select2/js/select2.full.min.js"></script>
<script src="plugins/sweetalert/sweetalert.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
<script src="jsPages/index.js"></script>
<script>
    $('.selectTo').select2({
        placeholder: "All"
    });
</script>
</body>
</html>

