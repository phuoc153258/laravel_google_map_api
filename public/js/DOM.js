function showActionBar() {
    document.getElementById("draw-action-js").classList.remove("d-none");
}

function hiddenActionBar() {
    document.getElementById("draw-action-js").classList.add("d-none");
    hideMarkers();
    emptyMarkerArray();
    loadAllPlace();
    clearPolygon();
}

function clearPolygon() {
    poly.setMap(null);
    poly = null;
}

function addMarker(value) {
    const marker = new google.maps.Marker({
        position: value.latLng,
        map,
        title: value.name,
    });
    markers.push(marker);
}

function setMapOnAll(map) {
    for (let i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

function hideMarkers() {
    setMapOnAll(null);
}

function showMarkers() {
    setMapOnAll(map);
}

function emptyMarkerArray() {
    markers = [];
}
