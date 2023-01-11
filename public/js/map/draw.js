function addEventFreeHand(map) {
    $("#drawpoly").click(function (e) {
        hideMarkers();
        e.preventDefault();
        disable(map);

        showActionBar();

        map.getDiv().addEventListener("mousedown", async function (e) {
            drawFreeHand(map);
        });
    });
}

function drawFreeHand(map) {
    if (poly) clearPolygon();
    poly = new google.maps.Polyline({
        map: map,
        clickable: false,
    });

    google.maps.event.addListener(map, "mousemove", function (e) {
        poly.getPath().push(e.latLng);
    });

    google.maps.event.addListener(map, "mouseup", function (e) {
        google.maps.event.clearListeners(map, "mousemove");
        const path = poly.getPath();
        poly.setMap(null);
        poly = new google.maps.Polygon({
            map: map,
            path: path,
        });
        google.maps.event.clearListeners(map.getDiv(), "mousedown");

        enable(map);
    });
}