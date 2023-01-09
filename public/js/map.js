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

function drawFreeHand(map) {
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

function addEventFreeHand(map) {
    $("#drawpoly").click(function (e) {
        e.preventDefault();
        disable();

        if (poly) clearPolygon();

        poly = new google.maps.Polyline({
            map: map,
            clickable: false,
        });
        showActionBar();

        map.getDiv().addEventListener("mousedown", function (e) {
            drawFreeHand(map);
        });
    });
}
