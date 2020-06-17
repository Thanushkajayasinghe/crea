$(document).ready(function () {

    var favPro = [];
    if (localStorage.getItem("favList") != null) {
        favPro = localStorage.getItem("favList").split(',');
    }

    //Local variable set
    var property_serial = localStorage.getItem("property_serial");

    localStorage.removeItem("property_serial");

    if (property_serial != null) {

        var sync1 = $("#property-d-1");
        var sync2 = $("#property-d-1-2");

        $.ajax({
            url: 'loadPropertyDetails',
            type: 'post',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                property_serial: property_serial
            },
            success: function (data) {

                const propName = data.result[0].property_name;
                const propAddress = data.result[0].property_address;
                const xcoor = data.result[0].property_x_coordinate;
                const ycoor = data.result[0].property_y_coordinate;
                const propImage = data.result[0].mainImage;

                $('#propertyName').text(propName);
                $('#propertyAddress').text(propAddress);

                initMap(xcoor, ycoor, propName, propAddress, propImage);

                var html = "";
                $(data.result[0].resultIconDes).each(function (k, v) {
                    html += "<span><i class=\"" + v.icon + "\"></i>" + v.description + "</span>";
                });
                $('#propertyIcoSummary').html("");
                $('#propertyIcoSummary').html(html);

                $('#property_description_1').text(data.result[0].property_description_1);
                $('#property_description_2').text(data.result[0].property_description_2);


                var htmlx = "";
                var htmly = "";
                $(data.result[0].resultQuickSum).each(function (k, v) {
                    if (k % 2 == 0) {
                        htmlx += "<tr><td><b>" + v.quick_summary + "</b></td><td class=\"text-right\">" + v.quick_summary_value + "</td></tr>";
                    } else {
                        htmly += "<tr><td><b>" + v.quick_summary + "</b></td><td class=\"text-right\">" + v.quick_summary_value + "</td></tr>";
                    }
                });
                $('#quickSummaryTbody1').html("");
                $('#quickSummaryTbody1').html(htmlx);
                $('#quickSummaryTbody2').html("");
                $('#quickSummaryTbody2').html(htmly);


                var html1 = "";
                var html2 = "";
                var html3 = "";
                $(data.result[0].resultFeature).each(function (k, v) {

                    if (k % 3 == 0) {
                        html1 += "<li>" + v.features + "</li>";
                    } else if (k % 3 == 1) {
                        html2 += "<li>" + v.features + "</li>";
                    } else if (k % 3 == 2) {
                        html3 += "<li>" + v.features + "</li>";
                    }
                });
                $('#featureList1').html("");
                $('#featureList1').html(html1);
                $('#featureList2').html("");
                $('#featureList2').html(html2);
                $('#featureList3').html("");
                $('#featureList3').html(html3);


                var html4 = "";
                $(data.result[0].resultFeaturedItem).each(function (k, v) {
                    html4 += "<div class=\"row bottom20 getIdProp\" attr_id='" + v.property_serial + "'>";
                    html4 += "<div class=\"col-md-4 col-sm-4 col-xs-6 p-image\">";
                    html4 += "<img class='img-thumbnail' src=\"uploadedFiles/" + v.mainImage + ".jpg\" alt=\"Featured Properties\" style='height: 80px;'/>";
                    html4 += "</div>";
                    html4 += "<div class=\"col-md-8 col-sm-8 col-xs-6\">";
                    html4 += "<div class=\"feature-p-text\">";
                    html4 += "<h4>" + v.property_name + "</h4>";
                    html4 += "<p class=\"bottom15\">" + v.property_address + "</p>";
                    html4 += "<a href=\"javascript:void(0);\">$" + parseInt(v.property_price).toLocaleString() + " " + v.property_price_often + "</a>";
                    html4 += "</div></div></div>";
                });
                $('#featuredItemContainer').html("");
                $('#featuredItemContainer').html(html4);


                var html5 = "";
                $(data.result[0].resultLatest).each(function (k, v) {
                    html5 += "<div class=\"item getIdProp\" attr_id='" + v.property_serial + "'>";
                    html5 += "<div class=\"property_item heading_space\">";
                    html5 += "<div class=\"image\">";
                    html5 += " <a href=\"javascript:void(0);\"><img src=\"uploadedFiles/" + v.mainImage + ".jpg\" style='height: 250px;' alt=\"Latest Properties\"\n" +
                        "                                                                           class=\"img-responsive\"></a>";
                    if (v.property_contract_type == "Sale") {
                        html5 += "<div class=\"feature\"><span class=\"tag-2\" style=\"background-color: #B0D975;\">For " + v.property_contract_type + "</span></div>";
                    } else {
                        html5 += "<div class=\"feature\"><span class=\"tag-2\">For " + v.property_contract_type + "</span></div>";
                    }
                    html5 += "<div class=\"price clearfix\">";
                    html5 += "<span class=\"tag pull-right\">$" + parseInt(v.property_price).toLocaleString() + " " + v.property_price_often + "</span>";
                    html5 += "</div>";
                    html5 += "</div>";
                    html5 += "</div></div>";
                });
                $('#agent-2-slider').html("");
                $('#agent-2-slider').html(html5);


                var html6 = "";
                $(data.result[0].resultImageSlider).each(function (k, v) {
                    html6 += "<div class=\"item\"><img src=\"uploadedFiles/" + v.property_image + ".jpg\"  alt=\"Property Image\"/></div>";
                });
                $('#property-d-1').html("");
                $('#property-d-1').html(html6);
                $('#property-d-1-2').html("");
                $('#property-d-1-2').html(html6);


                var html7 = "";
                $(data.result[0].resultSimilarProperties).each(function (k, v) {
                    html7 += "<div class=\"item getIdProp\" attr_id='" + v.property_serial + "'>";
                    html7 += "<div class=\"property_item heading_space\">";
                    html7 += "<div class=\"image\">";
                    if (v.mainImage != undefined || v.mainImage != null) {
                        html7 += "<a href=\"javascript:void(0);\"><img src=\"uploadedFiles/" + v.mainImage + ".jpg\" alt=\"Similar properties\" class=\"img-responsive\" style=\"height: 205px;\"></a>";
                    }
                    html7 += "<div class=\"price clearfix\">";
                    html7 += "<span class=\"tag pull-right\">$" + parseInt(v.property_price).toLocaleString() + " " + v.property_price_often + "</span>";
                    html7 += "</div>";
                    if (v.property_contract_type == "Sale") {
                        html7 += "<span class=\"tag_t\" style=\"background-color: #B0D975;\">For " + v.property_contract_type + "</span>";
                    } else {
                        html7 += "<span class=\"tag_t\">For " + v.property_contract_type + "</span>";
                    }
                    if (v.featured_properties == true) {
                        html7 += "<span class=\"tag_l\">Featured</span>";
                    }
                    html7 += "</div>";
                    html7 += "<div class=\"proerty_content\">";
                    html7 += "<div class=\"proerty_text\">";
                    html7 += "<h3 class=\"captlize\"><a href=\"javascript:void(0);\">" + v.property_name + "</a></h3>";
                    html7 += " <p>" + v.property_address + "</p>";
                    html7 += "</div>";

                    var ik = 0;
                    $(v.resultIconDesSP).each(function (ke, va) {
                        if (ik % 3 == 0) {
                            html7 += "<div class=\"property_meta transparent\">";
                        }
                        html7 += "<span><i class=\"" + va.icon + "\"></i>" + va.description + "</span>";
                        if (ik % 2 == 0 && ik != 0) {
                            html7 += "</div>";
                        }
                        if ((ik) == (v.resultIconDesSP.length - 1)) {
                            html7 += "</div>";
                        }
                        ik++;
                    });

                    html7 += "<div class=\"favroute clearfix\">";

                    var startDay = new Date(v.created_date);
                    var endDay = new Date();
                    var millisecondsPerDay = 1000 * 60 * 60 * 24;

                    var millisBetween = endDay.getTime() - startDay.getTime();
                    var days = millisBetween / millisecondsPerDay;

                    html7 += "<p class=\"pull-md-left\">" + Math.floor(days) + " Days ago &nbsp; <i class=\"icon-calendar2\"></i></p>";
                    html7 += "<ul class=\"pull-right\">";
                    html7 += "<li class='addToFav'><a href=\"javascript:void(0)\"><i class=\"icon-like\"></i></a></li>";
                    html7 += "<li><a href=\"#one\" class=\"share_expender\" data-toggle=\"collapse\"><i class=\"icon-share3\"></i></a></li>";
                    html7 += "</ul>";
                    html7 += "</div>";
                    html7 += "</div>";
                    html7 += "</div>";
                    html7 += "</div>";
                });

                $('#two-col-slider').html("");
                $('#two-col-slider').html(html7);


            }, complete: function () {

                $("#agent-2-slider").owlCarousel({
                    autoPlay: true,
                    stopOnHover: true,
                    navigation: true,
                    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    slideSpeed: 300,
                    pagination: false,
                    singleItem: true
                });

                //Property Slider init
                sync1.owlCarousel({
                    autoPlay: 3000,
                    singleItem: true,
                    slideSpeed: 1000,
                    transitionStyle: "fade",
                    navigation: true,
                    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    pagination: false,
                    afterAction: syncPosition,
                    responsiveRefreshRate: 200,
                });
                sync2.owlCarousel({
                    autoPlay: true,
                    items: 5,
                    itemsDesktop: [1199, 10],
                    itemsDesktopSmall: [979, 10],
                    itemsTablet: [768, 8],
                    itemsMobile: [479, 4],
                    pagination: false,
                    responsiveRefreshRate: 100,
                    afterInit: function (el) {
                        el.find(".owl-item").eq(0).addClass("synced");
                    }
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

                $('.getIdProp').each(function () {
                    $(this).find('.property_meta:last').addClass('bottom30');

                    if ($(this).find('.property_meta:last span').length == 2) {
                        $(this).find('.property_meta:last').append('<span></span>');
                    } else if ($(this).find('.property_meta:last span').length == 1) {
                        $(this).find('.property_meta:last').append('<span></span><span></span>');
                    }
                });

                toggleFavioriteList();
            }
        });


        $(document).on('click', '.getIdProp', function () {
            var property_serial = $(this).attr('attr_id');
            localStorage.setItem("property_serial", property_serial);

            window.open('prd', '_self');
        });

        function syncPosition(el) {
            var current = this.currentItem;
            $("#property-d-1-2").find(".owl-item").removeClass("synced").eq(current).addClass("synced")
            if ($("#property-d-1-2").data("owlCarousel") !== undefined) {
                center(current)
            }
        }

        $("#property-d-1-2").on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });

        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }
            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }


    } else {

        swal({
            title: "Please Select Property to view Details.",
            text: "",
            type: "error"
        }).then(function () {
            window.location = "/crea/public/";
        });
    }


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


    //Add To Favorite List
    $(document).on('click', '.addToFav', function (e) {
        e.stopPropagation();
        var $this = $(this);
        if ($this.find('i').hasClass('icon-like') == true) {

            $this.find('i').removeClass('icon-like').addClass('icon-heart2').css({'color': 'red'});

            var itemArr = favPro.indexOf($this.parents('.getIdProp').attr('attr_id'));
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


    function initMap(x, y, name, address, img) {

        x = parseFloat(x);
        y = parseFloat(y);
        var coordinates = {lat: x, lng: y};
        var map = new google.maps.Map(document.getElementById('property-listing-map'), {
            zoom: 12,
            center: coordinates
        });

        var infoWindowContent = '<div class="property-listing-map-info-window" style="text-align: center;"><div class="image-with-label">' +
            '<img src="uploadedFiles/' + img + '.jpg" alt="propertyLocation" class="img-responsive" style="border: 7px solid black;border-radius: 15px;width: 200px;display: block;margin-left: auto;margin-right: auto;"/></div>' +
            '<div class="featured-properties-detail"><a href="javascript:void(0);"><h4>' + name + '</h4></a>' +
            '<p class="featured-properties-address">' + address + '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: infoWindowContent
        });

        var marker = new google.maps.Marker({
            position: coordinates,
            map: map,
            icon: 'images/map_marker.png'
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
    }


});
