let map = new google.maps.Map(
    document.getElementById("map_canvas"),
    mapOptions
);

function initialize() {
    addEventFreeHand(map);
}

window.addEventListener("load", initialize);
