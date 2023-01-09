const mapOptions = {
    zoom: 14,
    center: new google.maps.LatLng(16.463623, 107.595239),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    fullscreenControl: false,
};

let poly;

function drawFreeHand() {
    var move = google.maps.event.addListener(map, "mousemove", function (e) {
        poly.getPath().push(e.latLng);
    });

    google.maps.event.addListenerOnce(map, "mouseup", function (e) {
        google.maps.event.removeListener(move);
        var path = poly.getPath();
        poly.setMap(null);
        poly = new google.maps.Polygon({
            map: map,
            path: path,
        });

        google.maps.event.clearListeners(map.getDiv(), "mousedown");

        enable();
    });
}

function disable() {
    map.setOptions({
        draggable: false,
        zoomControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: false,
    });
}

function enable() {
    map.setOptions({
        draggable: true,
        zoomControl: true,
        scrollwheel: true,
        disableDoubleClickZoom: true,
    });
}

function initialize() {
    map = new google.maps.Map(
        document.getElementById("map_canvas"),
        mapOptions
    );

    addEventFreeHand(map);
}

function addEventFreeHand(map) {
    $("#drawpoly").click(function (e) {
        e.preventDefault();
        disable();
        poly = new google.maps.Polyline({
            map: map,
            clickable: false,
        });
        showActionBar();

        map.getDiv().addEventListener("mousedown", function (e) {
            drawFreeHand();
        });
    });
}

function showActionBar() {
    document.getElementById("draw-action-js").classList.remove("d-none");
}

function hiddenActionBar() {
    document.getElementById("draw-action-js").classList.add("d-none");
    clearPolygon();
}

function clearPolygon() {
    poly.setMap(null);
}

window.addEventListener("load", initialize);
