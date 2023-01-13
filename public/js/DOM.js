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

function addMarker(value, infowindow) {
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

    marker.addListener("click", () => {
        emptyInfoModalPlace();
        renderInfoModalPlace(value.id);
        $("#exampleModal").modal("show");
    });

    markers.push(marker);
    return marker;
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

function itemSideBar(value, infowindow, markerItem) {
    document.getElementById("list-side-bar-js").insertAdjacentHTML(
        "beforeend",
        `<div class="col-6 p-3" id="item-side-bar-js${value.id}"  data-toggle="modal" data-target="#exampleModal">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" >
                <div class="card-body">
                    <img style="width: 100%;"
                    src="${value.origin_image}"
                    alt="">
                    <p class="my-text p-0 m-0" style="min-height: 50px;">Name: ${value.name}</p>
                    <p class="my-text p-0 m-0">Lat: ${value.latLng.lat}</p>
                    <p class="my-text p-0 m-0">Lng: ${value.latLng.lng}</p>
                </div>
            </div>
        </div>`
    );
    let item = document.getElementById(`item-side-bar-js${value.id}`);
    item.addEventListener("mouseover", () => {
        openInfoWindow(infowindow, markerItem);
    });
    item.addEventListener("mouseout", () => {
        hideInfoWindow(infowindow);
    });
}

function emptyItemSideBar() {
    document.getElementById("list-side-bar-js").innerHTML = "";
}

function itemInfoWindow(value) {
    return `<div class="row">
                <div class="col-5 pr-2">
                    <img class="w-100" src="${value.origin_image}" alt="">
                </div>
                <div class="col-7 p-0">
                    <p class="my-text">${value.name}</p>
                </div>
            </div>`;
}

function openInfoWindow(infowindow, marker) {
    infowindow.open(map, marker);
}

function hideInfoWindow(infowindow) {
    infowindow.close();
}

function renderInfoModalPlace(id) {
    const place = places.find((x) => x.id === id);
    document.getElementById("origin_image-place-js").src = place.origin_image;
    place.place_image.forEach((x) => {
        document.getElementById(
            "list_image-place-js"
        ).innerHTML += `<div class="col-6 p-2">
                            <img class="w-100 rounded"
                            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
                            src="${x.image}" alt="">
                        </div>`;
    });

    document.getElementById("place_name-place-js").innerHTML = place.name;
    document.getElementById("place_type-place-js").innerHTML =
        place.place_type.name;
    document.getElementById("address-place-js").innerHTML = place.address;
    document.getElementById("email-place-js").innerHTML = place.email;
    document.getElementById("phone_number-place-js").innerHTML =
        place.phone_number;
    document.getElementById("plus_code-place-js").innerHTML = place.plus_code;
}

function emptyInfoModalPlace() {
    document.getElementById("origin_image-place-js").src = "";
    document.getElementById("list_image-place-js").innerHTML = "";
    document.getElementById("place_name-place-js").innerHTML = "";
    document.getElementById("place_type-place-js").innerHTML = "";
    document.getElementById("address-place-js").innerHTML = "";
    document.getElementById("email-place-js").innerHTML = "";
    document.getElementById("phone_number-place-js").innerHTML = "";
    document.getElementById("plus_code-place-js").innerHTML = "";
}
