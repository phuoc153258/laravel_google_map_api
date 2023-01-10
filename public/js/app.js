let map = new google.maps.Map(
    document.getElementById("map_canvas"),
    mapOptions
);

let poly;

function initialize() {
    addEventFreeHand(map);
}

window.addEventListener("load", initialize);
