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

function renderInfoWindowItem(value) {
    const infowindow = new google.maps.InfoWindow({
        content: itemInfoWindow(value),
        maxWidth: 200,
        ariaLabel: "Uluru",
    });
    return infowindow;
}
