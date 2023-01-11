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
    const infowindow = renderInfoWindowItem(value);
    const marker = new google.maps.Marker({
        position: value.latLng,
        map,
        title: value.name,
    });

    // marker.addListener("click", () => {
    //     infowindow.open({
    //         anchor: marker,
    //         map,
    //     });
    // });

    marker.addListener("mouseover", function () {
        infowindow.open(map, this);
    });

    marker.addListener("mouseout", function () {
        infowindow.close();
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

function itemSideBar(value) {
    return `<div class="col-6 p-3">
                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <img style="width: 100%;"
                        src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Hue%2C_le_pont_Trang_Tien.jpg"
                        alt="">
                        <p class="my-text p-0 m-0" style="min-height: 50px;">Name: ${value.name}</p>
                        <p class="my-text p-0 m-0">Lat: ${value.latLng.lat}</p>
                        <p class="my-text p-0 m-0">Lng: ${value.latLng.lng}</p>
                    </div>
                </div>
            </div>`;
}

function emptyItemSideBar() {
    document.getElementById("list-side-bar-js").innerHTML = "";
}

function itemInfoWindow(value) {
    return `<div class="row">
                <div class="col-5 pr-2">
                    <img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Hue%2C_le_pont_Trang_Tien.jpg" alt="">
                </div>
                <div class="col-7 p-0">
                    <p class="my-text">${value.name}</p>
                </div>
            </div>`;
}
