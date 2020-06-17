$('#btnContactUsSubmit').on('click', function () {

    var name = $('#txtName').val();
    var email = $('#txtEmail').val();
    var message = $('#txtMessage').val();

    $.ajax({
        url: 'contactUsSendMessage',
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            name: name, email: email, message: message
        },
        success: function (data) {

            Swal(
                'Email Send Successfully!',
                data.result,
                'success'
            );
        }, error: function (data) {

            Swal(
                'Email Send Error!',
                '',
                'error'
            );
        }
    });
});

property_listing_map_initialize();

function property_listing_map_initialize() {

    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        scrollwheel: false,
        // styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("contactUsMap"), mapOptions);
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
            title: markers[i][0]
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

