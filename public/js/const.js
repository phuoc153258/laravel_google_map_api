let map = new google.maps.Map(
    document.getElementById("map_canvas"),
    mapOptions
);

const mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(16.463623, 107.595239),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    fullscreenControl: false,

    mapTypeControl: true,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
        position: google.maps.ControlPosition.RIGHT_BOTTOM,
        mapTypeIds: ["roadmap", "satellite"],
    },
    streetViewControl: false,
    styles: [
        {
            featureType: "poi",
            stylers: [{ visibility: "off" }],
        },
    ],
};

let places = [];

let markers = [];

let poly;

// const places = [
//     {
//         id: 1,
//         name: "Bệnh viện Trung Ương Huế",
//         latLng: { lat: 16.463199922626558, lng: 107.58788372470376 },
//     },
//     {
//         id: 2,
//         name: "Cinestar Huế",
//         latLng: { lat: 16.461491257016668, lng: 107.59008384397833 },
//     },
//     {
//         id: 3,
//         name: "Trường THPT Chuyên Quốc học Huế",
//         latLng: { lat: 16.46025903848984, lng: 107.58339987481038 },
//     },
//     {
//         id: 4,
//         name: "Trường Đại Học Y Dược Huế",
//         latLng: { lat: 16.459625405497377, lng: 107.58749274997727 },
//     },
//     {
//         id: 5,
//         name: "Cung An Định",
//         latLng: { lat: 16.456800565705098, lng: 107.59846300552597 },
//     },
//     {
//         id: 6,
//         name: "GO! Hue",
//         latLng: { lat: 16.4603974047552, lng: 107.59929385310475 },
//     },
//     {
//         id: 7,
//         name: "Trường Đại học Khoa học Huế",
//         latLng: { lat: 16.459414360492254, lng: 107.59265919881604 },
//     },
//     {
//         id: 8,
//         name: "Trường Đại học Sư Phạm Huế",
//         latLng: { lat: 16.467692641408153, lng: 107.59204283054348 },
//     },
//     {
//         id: 9,
//         name: "Cầu Trường Tiền",
//         latLng: { lat: 16.469303545864374, lng: 107.58871581300707 },
//     },
//     {
//         id: 10,
//         name: "Cầu Phú Xuân",
//         latLng: { lat: 16.465799304591936, lng: 107.58499815603851 },
//     },
//     {
//         id: 11,
//         name: "Cầu Dã Viên",
//         latLng: { lat: 16.4597389396544, lng: 107.57117852977535 },
//     },
//     {
//         id: 12,
//         name: "Cầu Bán Nguyệt",
//         latLng: { lat: 16.462310032407096, lng: 107.57637707783124 },
//     },
//     {
//         id: 13,
//         name: "Đường đi bộ trên sông Hương",
//         latLng: { lat: 16.4651714664595, lng: 107.58694822315452 },
//     },
// ];

// mapTypeControl: true,
// mapTypeControlOptions: {
//     style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
// },
