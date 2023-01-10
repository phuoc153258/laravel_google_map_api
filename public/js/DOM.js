function showActionBar() {
    document.getElementById("draw-action-js").classList.remove("d-none");
}

function hiddenActionBar() {
    document.getElementById("draw-action-js").classList.add("d-none");
    google.maps.event.clearListeners(map, "mouseup");
    google.maps.event.clearListeners(map.getDiv(), "mousedown");
    clearPolygon();
}

function clearPolygon() {
    poly.setMap(null);
    poly = null;
}
