function initialize() {
    map = new google.maps.Map(
        document.getElementById("map_canvas"),
        mapOptions
    );
    addEventFreeHand(map);
}

window.addEventListener("load", initialize);
