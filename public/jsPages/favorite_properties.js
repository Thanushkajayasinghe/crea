$(document).ready(function () {

    var favPro = [];
    if (localStorage.getItem("favList") != null) {
        favPro = localStorage.getItem("favList").split(',');
    }


    loadFavoriteProperties();
    function loadFavoriteProperties(){

        //Local variable set
        var favList = '';
        if (localStorage.getItem("favList") != null) {
            favList = localStorage.getItem("favList");
        }

        var splittedArray = favList.split(',');

        var splittedArray = splittedArray.filter(function (el) {
            return el != "";
        });


        $.ajax({
            url: 'loadFavoriteProperties',
            type: 'post',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                property_serials: splittedArray
            },
            success: function (data) {

                var html = "";
                $(data.result).each(function (k, v) {

                    if (k % 3 == 0) {
                        html += "<div class=\"col-sm-12\" style='padding: 0px;'>";
                    }

                    html += "<div class=\"col-sm-4 getIdProp\" attr_id='" + v.property_serial + "'>";
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
                    html += "<li class='addToFav'><a href=\"javascript:void(0)\"><i class=\"icon-heart2\" style='color: red;'></i></a></li>";
                    html += "<li><a href=\"#one\" class=\"share_expender\" data-toggle=\"collapse\"><i class=\"icon-share3\"></i></a></li>";
                    html += "</ul>";
                    html += "</div>";
                    html += "</div>";
                    html += "</div>";
                    html += "</div>";

                    if (k % 2 == 0 && k != 0) {
                        html += "</div>";
                    }
                });

                $('#favoritePropertiesContainer').html("");
                $('#favoritePropertiesContainer').html(html);

            }, complete: function () {

                $('.proerty_content').each(function () {
                    $(this).find('.property_meta:last').addClass('bottom30');

                    if ($(this).find('.property_meta:last span').length == 2) {
                        $(this).find('.property_meta:last').append('<span></span>');
                    } else if ($(this).find('.property_meta:last span').length == 1) {
                        $(this).find('.property_meta:last').append('<span></span><span></span>');
                    }
                });
            }
        });
    }

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
            var indexArr = favPro.indexOf($this.parents('.getIdProp').attr('attr_id'));
            if (indexArr > -1) {
                favPro.splice(indexArr, 1);
            }

            var itemArr = favPro.indexOf($this.parents('.getIdProp ').attr('attr_id'));
            if (itemArr == -1) {
                localStorage.setItem("favList", favPro);
            }
        }

        loadFavoriteProperties();
    });


    //Property on click
    $(document).on('click', '.getIdProp', function () {
        var property_serial = $(this).attr('attr_id');
        localStorage.setItem("property_serial", property_serial);

        window.open('prd', '_self');
    });


});
