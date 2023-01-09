const mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(16.463623, 107.595239),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    fullscreenControl: false,
    styles: [
        {
            featureType: "poi",
            stylers: [{ visibility: "off" }],
        },
    ],
};

let poly;
