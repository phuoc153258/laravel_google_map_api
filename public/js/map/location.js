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
