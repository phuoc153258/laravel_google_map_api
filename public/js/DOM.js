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
