$(document).ready(function () {

    var favPro = [];
    if (localStorage.getItem("favList") != null) {
        favPro = localStorage.getItem("favList").split(',');
    }


    $('.form_opener').on('click', function () {

        $('.bedRoomsSlider .bar').css({'width': '100%'});
        const widthBed = parseInt($('.bedRoomsSlider').width()) - 20;
        $('.bedRoomsSlider .rightGrip').css({'left': widthBed});


        $('.priceSlider .bar').css({'width': '100%'});
        const widthPrice = parseInt($('.priceSlider').width()) - 20;
        $('.priceSlider .rightGrip').css({'left': widthPrice});
    });


    $('#btnSearch').on('click', function () {

        var location = $('#drpLocation').val();
        var propertyType = $('#drpPropertyType').val();
        var contractType = $('#drpContractType').val();
        var minBed = $('.bedRoomsSlider').parent().find('.leftLabel').text();
        var maxBeds = $('.bedRoomsSlider').parent().find('.rightLabel').text();
        var minPrice = $('.priceSlider').parent().find('.leftLabel').text();
        var maxPrice = $('.priceSlider').parent().find('.rightLabel').text();

        localStorage.setItem("locationSearch", location);
        localStorage.setItem("propertyTypeSearch", propertyType);
        localStorage.setItem("contractTypeSearch", contractType);
        localStorage.setItem("minBedSearch", minBed);
        localStorage.setItem("maxBedsSearch", maxBeds);
        localStorage.setItem("minPriceSearch", minPrice);
        localStorage.setItem("maxPriceSearch", maxPrice);

        window.open('pls', '_self');
    });


    // Partners(logos)
    $("#partner-slider").owlCarousel({
        autoPlay: true,
        stopOnHover: true,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        items: 5,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]
    });


    //Load Featured Property Details
    $.ajax({
        url: 'loadFeaturedPropertyDetails',
        type: 'post',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {},
        success: function (data) {

            var html = "";
            var html2 = "";
            $(data.result).each(function (k, v) {
                if (v.featured_properties == true) {

                    html += "<div class=\"cbp-item latest getIdProp " + (v.property_contract_type).toLowerCase() + "\" attr_id='" + v.property_serial + "'>";
                    html += "<div class=\"property_item\">";
                    html += "<div class=\"image\">";
                    html += "<a href=\"javascript:void(0);\"><img src=\"uploadedFiles/" + v.mainImage + ".jpg\" alt=\"Property image\" class=\"img-responsive\" style=\"height: 205px;\"></a>";
                    html += "<div class=\"price clearfix\">";
                    html += "<span class=\"tag pull-right\">$" + parseInt(v.property_price).toLocaleString() + " " + v.property_price_often + "</span>";
                    if (v.property_contract_type == "Sale") {
                        html += "<span class=\"tag_t\" style=\"background-color: #B0D975;\">For " + v.property_contract_type + "</span>";
                    } else {
                        html += "<span class=\"tag_t\">For " + v.property_contract_type + "</span>";
                    }
                    if (v.featured_properties == true) {
                        html += "<span class=\"tag_l\">Featured</span>";
                    }
                    html += "</div>";
                    html += "</div>";
                    html += "<div class=\"proerty_content\">";
                    html += "<div class=\"proerty_text\">";
                    html += "<h3 class=\"captlize\"><a href=\"javascript:void(0);\">" + v.property_name + "</a></h3>";
                    html += "<p class=\"bottom15\">" + v.property_address + "</p>";
                    html += "<a href=\"javascript:void(0);\" class=\"btn-more\">";
                    html += "<i><img src=\"images/arrowl.png\" alt=\"arrow\"></i>";
                    html += "<span>More Details</span>";
                    html += "<i><img src=\"images/arrowr.png\" alt=\"arrow\"></i>";
                    html += "</a>";
                    html += "</div>";

                    html += "<div class=\"favroute clearfix\">";

                    var startDay = new Date(v.created_date);
                    var endDay = new Date();
                    var millisecondsPerDay = 1000 * 60 * 60 * 24;

                    var millisBetween = endDay.getTime() - startDay.getTime();
                    var days = millisBetween / millisecondsPerDay;

                    html += "<p class=\"pull-md-left\">" + Math.floor(days) + " Days ago &nbsp; <i class=\"icon-calendar2\"></i></p>";
                    html += "<ul class=\"pull-right\">";
                    html += "<li class='addToFav'><a href=\"javascript:void(0)\"><i class=\"icon-like\"></i></a></li>";
                    html += "<li><a href=\"#one\" class=\"share_expender\" data-toggle=\"collapse\"><i class=\"icon-information3\" style=\"font-weight: bold;font-size: 2.5rem;\"></i></a></li>";
                    html += "</ul>";
                    html += "</div>";
                    html += "</div>";
                    html += "</div>";
                    html += "</div>";

                    if (k % 2 == 1) {
                        html += "</div>";
                    }
                }
            });


            $(data.resultx).each(function (k, v) {
                if (v.best_deal == true) {
                    html2 += "<div class=\"item getIdProp\" attr_id='" + v.property_serial + "'>";
                    html2 += "<div class=\"property_item heading_space\">";
                    html2 += "<div class=\"image\">";
                    html2 += "<a href=\"javascript:void(0);\"><img class=\"img-responsive\" src=\"uploadedFiles/" + v.mainImage + ".jpg\" alt=\"Best Deal Property\" style='height:  250px;'></a>";
                    html2 += "</div>";
                    html2 += "<div class=\"price default_clr clearfix bottom20\">";
                    html2 += "<span class=\"tag pull-left\">For " + v.property_contract_type + "</span>";
                    html2 += "<h4 class=\"pull-right\">$" + parseInt(v.property_price).toLocaleString() + " " + v.property_price_often + "</h4>";
                    html2 += "</div>";
                    html2 += "<div class=\"proerty_content\">";
                    html2 += "<div class=\"proerty_text\">";
                    html2 += "<h3 class=\"bottom15\"><a href=\"javascript:void(0);\">" + v.property_name + "</a></h3>";
                    html2 += "<p>" + v.property_description_1 + "</p>";
                    html2 += "</div>";
                    html2 += "<div class=\"favroute clearfix\">";
                    html2 += "<p class=\"pull-md-left\">" + v.property_address + "</p>";
                    html2 += "<ul class=\"pull-right\">";
                    html2 += "<li class='addToFav'><a href=\"javascript:void(0)\"><i class=\"icon-like\"></i></a></li>";
                    html2 += "<li><a href=\"#one\" class=\"share_expender\" data-toggle=\"collapse\"><i class=\"icon-information3\" style=\"font-weight: bold;font-size: 2.5rem;\"></i></a></li>";
                    html2 += "</ul></div>";

                    var iks = 0;
                    $(v.resultIconDes).each(function (ke, va) {
                        if (iks % 3 == 0) {
                            html2 += "<div class=\"property_meta\">";
                        }
                        html2 += "<span><i class=\"" + va.icon + "\"></i>" + va.description + "</span>";
                        if (iks % 2 == 0 && iks != 0) {
                            html2 += "</div>";
                        }
                        if ((iks) == (v.resultIconDes.length - 1)) {
                            html2 += "</div>";
                        }
                        iks++;
                    });

                    html2 += "</div></div></div>";
                }

            });

            $('#property-gallery').html("");
            $('#property-gallery').html(html);

            $('#two-col-slider').html("");
            $('#two-col-slider').html(html2);

        }, complete: function () {

            $('.proerty_content').each(function () {
                $(this).find('.bmp:last').addClass('bottom30');

                if ($(this).find('.property_meta:last span').length == 2) {
                    $(this).find('.property_meta:last').append('<span></span>');
                } else if ($(this).find('.property_meta:last span').length == 1) {
                    $(this).find('.property_meta:last').append('<span></span><span></span>');
                }
            });

            //Feature Gallery init
            $('#property-gallery').cubeportfolio({
                filters: '#filters-property',
                layoutMode: 'grid',
                mediaQueries: [{
                    width: 1500,
                    cols: 4
                }, {
                    width: 1100,
                    cols: 3
                }, {
                    width: 800,
                    cols: 3
                }, {
                    width: 480,
                    cols: 2
                }, {
                    width: 320,
                    cols: 1
                }],
                defaultFilter: '*',
                animationType: 'fadeOut',
                gapHorizontal: 30,
                gapVertical: 30,
                gridAdjustment: 'responsive',
                caption: 'zoom',
                displayType: 'sequentially',
                displayTypeSpeed: 100,
            });

            //Best deal Gallery init
            $("#two-col-slider").owlCarousel({
                autoPlay: true,
                navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                stopOnHover: true,
                navigation: true,
                items: 2,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [979, 2],
                itemsMobile: [480, 1],
            });

            toggleFavioriteList();
        }
    });


    //Add To Favorite List
    $(document).on('click', '.addToFav', function (e) {
        e.stopPropagation();
        var $this = $(this);
        if ($this.find('i').hasClass('icon-like') == true) {

            $this.find('i').removeClass('icon-like').addClass('icon-heart2').css({'color': 'red'});

            var itemArr = favPro.indexOf($this.parents('.getIdProp ').attr('attr_id'));
            if (itemArr == -1) {
                favPro.push($this.parents('.getIdProp ').attr('attr_id'));
            }

            localStorage.setItem("favList", favPro);

        } else if ($this.find('i').hasClass('icon-heart2') == true) {

            $this.find('i').removeClass('icon-heart2').addClass('icon-like').css({'color': 'black'});
            var indexArr = favPro.indexOf($this.parents('.getIdProp ').attr('attr_id'));
            if (indexArr > -1) {
                favPro.splice(indexArr, 1);
            }

            var itemArr = favPro.indexOf($this.parents('.getIdProp ').attr('attr_id'));
            if (itemArr == -1) {
                localStorage.setItem("favList", favPro);
            }
        }

        toggleFavioriteList();
    });


    //Property on click
    $(document).on('click', '.getIdProp', function () {
        var property_serial = $(this).attr('attr_id');
        localStorage.setItem("property_serial", property_serial);

        window.open('prd', '_self');
    });


    function toggleFavioriteList() {
        $('.getIdProp').each(function () {
            var $this = $(this);
            var propetyId = $this.attr('attr_id');

            var itemArrProp = (favPro).indexOf(propetyId);
            if (itemArrProp != -1) {
                $this.find('.addToFav').find('i').removeClass('icon-like').addClass('icon-heart2').css({'color': 'red'});
            }
        });
    }


    $('.button_s').on('click', function () {

        var email = $('#subscribeEmailTxt').val();

        $.ajax({
            url: 'subscribeMail',
            type: 'post',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {email: email},
            success: function (data) {

                if (data.result == true) {
                    Swal(
                        'Email Subscribe Successfully!',
                        '',
                        'success'
                    );
                }

            }
        });
    });


    $('#bestDealNav').on('click', function () {
        $('html, body').animate({
            scrollTop: (($('#deals').first().offset().top) - 80)
        }, 1000);
    });


    $('#whatWeDoNav').on('click', function () {
        $('html, body').animate({
            scrollTop: (($('#parallax_four').first().offset().top) - 80)
        }, 1000);
    });


    $('#howItWorksNav').on('click', function () {
        $('html, body').animate({
            scrollTop: (($('#whatWeDo').first().offset().top) - 80)
        }, 1000);
    });


    $('#whyChooseUsNav').on('click', function () {
        $('html, body').animate({
            scrollTop: (($('#whyChooseUs').first().offset().top) - 80)
        }, 1000);
    });

});
