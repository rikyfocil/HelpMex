
var google;

function init() {
    
    var myLatlng = new google.maps.LatLng(40.69847032728747, -73.9514422416687);
   
    
    var mapOptions = {
        zoom: 4,
        center: myLatlng,
        styles: [{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]}]
    };
    
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
    
    var addresses = ['Brooklyn'];

    for (var x = 0; x < addresses.length; x++) {
        var latlng = new google.maps.LatLng(40.69847032728747, -73.9514422416687);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
        });

        google.maps.event.addListener(marker, 'click', function() {
            $('#infowindow').html('<div><strong>Centro de acopio A</strong><br><strong>Direcci&oacute;n:</strong> Calle 25 Sur 2123 Col. Anzurez <br> <strong>Estado:</strong> Puebla <br><strong>Tel&eacute;fono:</strong>1234567890</div>');
            infowindow.open(map, this);
        });

    }
    
}
google.maps.event.addDomListener(window, 'load', init);