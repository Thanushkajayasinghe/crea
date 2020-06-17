$(document).ready(function () {

    var favPro = [];
    if (localStorage.getItem("favList") != null) {
        favPro = localStorage.getItem("favList").split(',');
    }

    //Local variable set
    var location = localStorage.getItem("locationSearch");
    var propertyType = localStorage.getItem("propertyTypeSearch");
    var contractType = localStorage.getItem("contractTypeSearch");
    var minBed = (localStorage.getItem("minBedSearch"));
    var maxBeds = (localStorage.getItem("maxBedsSearch"));
    var minPrice = (localStorage.getItem("minPriceSearch"));
    var maxPrice = (localStorage.getItem("maxPriceSearch"));

    localStorage.removeItem("locationSearch");
    localStorage.removeItem("propertyTypeSearch");
    localStorage.removeItem("contractTypeSearch");
    localStorage.removeItem("minBedSearch");
    localStorage.removeItem("maxBedsSearch");
    localStorage.removeItem("minPriceSearch");
    localStorage.removeItem("maxPriceSearch");

    if (location != null) {
        $('#drpLocation').val(location.split(',')).trigger('change');
    }
    if (propertyType != null) {
        $('#drpPropertyType').val(propertyType.split(',')).trigger('change');
    }
    if (contractType != null) {
        $('#drpContractType').val(contractType.split(',')).trigger('change');
    }

    if (minBed != null) {
        $(".bedRoomsSlider").nstSlider("set_position", parseInt(minBed), parseInt(maxBeds));
    } else {
        $(".bedRoomsSlider").nstSlider("set_position", 0, 15);
    }
    if (minPrice != null) {
        $(".priceSlider").nstSlider("set_position", parseInt(minPrice), parseInt(maxPrice));
    } else {
        $(".bedRoomsSlider").nstSlider("set_position", 0, 9500000);
    }

    setTimeout(function () {
        $('#btnSearch').click();
    }, 1000);


    $('#btnSearch').on('click', function () {

        var location = $('#drpLocation').val();
        var propertyType = $('#drpPropertyType').val();
        var contractType = $('#drpContractType').val();
        var minBed = $('.bedRoomsSlider').parent().find('.leftLabel').text();
        var maxBeds = $('.bedRoomsSlider').parent().find('.rightLabel').text();
        var minPrice = $('.priceSlider').parent().find('.leftLabel').text();
        var maxPrice = $('.priceSlider').parent().find('.rightLabel').text();

        $.ajax({
            url: 'propertyListingSearch',
            type: 'post',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                location: location,
                propertyType: propertyType,
                contractType: contractType,
                minBed: minBed,
                maxBeds: maxBeds,
                minPrice: minPrice,
                maxPrice: maxPrice
            },
            success: function (data) {

                var markers = [];
                var infoWinContentArr = [];

                var html = "";
                $(data.result).each(function (k, v) {


                    if (v.property_x_coordinate != "") {
                        var item = [];
                        item.push(v.property_name, parseFloat(v.property_x_coordinate), parseFloat(v.property_y_coordinate));
                        markers.push(item);

                        infoWinContentArr.push('<div class="property-listing-map-info-window"><div class="image-with-label">' +
                            '<img src="uploadedFiles\\' + v.mainImage + '.jpg" alt="PropertyImage" class="img-responsive" style="border: 7px solid black;border-radius: 15px;"></div>' +
                            '<div class="featured-properties-detail" style="padding: 10px 0px 0px;text-align: center;margin-bottom: 0px;">' +
                            '<a href="javascript:void(0);"><h4>' + v.property_name + '</h4></a>' +
                            '<p class="featured-properties-address">' + v.property_address + '</p></div>');
                    }


                    if (k % 2 == 0) {
                        html += "<div class=\"col-sm-12\" style='padding: 0px;'>";
                    }

                    html += "<div class=\"col-sm-6 getIdProp\" attr_id='" + v.property_serial + "'>";
                    html += "<div class=\"property_item heading_space\">";
                    html += "<div class=\"image\">";
                    if (v.mainImage != undefined || v.mainImage != null) {
                        html += "<a href=\"javascript:void(0);\"><img src=\"uploadedFiles/" + v.mainImage + ".jpg\" alt=\"latest property\" class=\"img-responsive\" style=\"height: 205px;\"></a>";
                    }
                    html += "<div class=\"price clearfix\">";
                    html += "<span class=\"tag pull-right\">$" + parseInt(v.property_price).toLocaleString() + " " + v.property_price_often + "</span>";
                    html += "</div>";
                    if (v.property_contract_type == "Sale") {
                        html += "<span class=\"tag_t\" style=\"background-color: #B0D975;\">For " + v.property_contract_type + "</span>";
                    } else {
                        html += "<span class=\"tag_t\">For " + v.property_contract_type + "</span>";
                    }
                    if (v.featured_properties == true) {
                        html += "<span class=\"tag_l\">Featured</span>";
                    }
                    html += "</div>";
                    html += "<div class=\"proerty_content\">";
                    html += "<div class=\"proerty_text\">";
                    html += "<h3 class=\"captlize\"><a href=\"javascript:void(0);\">" + v.property_name + "</a></h3>";
                    html += " <p>" + v.property_address + "</p>";
                    html += "</div>";

                    var ik = 0;
                    $(v.resultIconDes).each(function (ke, va) {
                        if (ik % 3 == 0) {
                            html += "<div class=\"property_meta transparent\">";
                        }
                        html += "<span><i class=\"" + va.icon + "\"></i>" + va.description + "</span>";
                        if (ik % 2 == 0 && ik != 0) {
                            html += "</div>";
                        }
                        if ((ik) == (v.resultIconDes.length - 1)) {
                            html += "</div>";
                        }
                        ik++;
                    });

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
                });

                $('#propertyListingSearchPanel').html("");
                $('#propertyListingSearchPanel').html(html);

                $('#resCount').text(data.result.length);

                if (data.result.length == 0) {
                    $('#propertyListingSearchPanel').html("");
                    $('#propertyListingSearchPanel').html("<h2 style=\"text-align: center; font-size: 3rem; padding-bottom: 40px; color: red;\">Sorry, We Couldn't Find Any Results Matching</h2>");
                }

                property_listing_map_initialize(markers, infoWinContentArr);

            }, complete: function () {

                $('.proerty_content').each(function () {
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

    });


    $(document).on('click', '.getIdProp', function () {
        var property_serial = $(this).attr('attr_id');
        localStorage.setItem("property_serial", property_serial);

        window.open('prd');
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


    // Property listing map page load map
    function property_listing_map_initialize(markersArr, infoContent) {

        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap',
            scrollwheel: false,
            // styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("property-listing-map"), mapOptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = markersArr;

        // Info Window Content
        var infoWindowContent = infoContent;


        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow({Width: 365, Height: 350}), marker, i;

        // Loop through our array of markers & place each one on the map
        for (i = 0; i < markers.length; i++) {

            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0],
                icon: 'images/map_marker.png'
            });


            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infoWindow.setContent(infoWindowContent[i]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            google.maps.event.removeListener(boundsListener);
        });
    }


});
