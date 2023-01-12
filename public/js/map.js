async function initialize() {
    addEventFreeHand(map);
    await getListPlace();
    loadAllPlace();
}

window.addEventListener("load", initialize);

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
        google.maps.event.addListener(map, "mousedown", function (e) {
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

        google.maps.event.clearListeners(map, "mouseup");
        google.maps.event.clearListeners(map, "mousedown");

        enable(map);
    });
}

function getLocationByPolygon() {
    emptyItemSideBar();
    places.forEach((value) => {
        const isContaint = google.maps.geometry.poly.containsLocation(
            value.latLng,
            poly
        );
        if (isContaint) {
            const infowindow = renderInfoWindowItem(value);
            let markerItem = addMarker(value, infowindow);
            itemSideBar(value, infowindow, markerItem);
        }
    });
}

function loadAllPlace() {
    emptyItemSideBar();
    places.forEach((value) => {
        const infowindow = renderInfoWindowItem(value);
        let markerItem = addMarker(value, infowindow);
        itemSideBar(value, infowindow, markerItem);
    });
}

function renderInfoWindowItem(value) {
    const infowindow = new google.maps.InfoWindow({
        content: itemInfoWindow(value),
        maxWidth: 200,
        ariaLabel: "Uluru",
    });
    return infowindow;
}

async function getListPlace() {
    try {
        const response = await axios({
            method: "get",
            url: `/api/places?is_paginate=false`,
            data: {},
        });
        places = response.data.data.data;
    } catch (error) {
        console.log(error);
    }
}
