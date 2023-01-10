function disable(map) {
    map.setOptions({
        draggable: false,
        zoomControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: false,
    });
}

function enable(map) {
    map.setOptions({
        draggable: true,
        zoomControl: true,
        scrollwheel: true,
        disableDoubleClickZoom: true,
    });
}

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

function getLocationByPolygon() {
    emptyItemSideBar();
    let str = "";
    places.forEach((value) => {
        const isContaint = google.maps.geometry.poly.containsLocation(
            value.latLng,
            poly
        );
        if (isContaint) {
            str += itemSideBar(value);
            addMarker(value);
        }
    });
    document.getElementById("list-side-bar-js").innerHTML = str;
}

function loadAllPlace() {
    emptyItemSideBar();
    let str = "";
    places.forEach((value) => {
        addMarker(value);
        str += itemSideBar(value);
    });
    document.getElementById("list-side-bar-js").innerHTML = str;
}
