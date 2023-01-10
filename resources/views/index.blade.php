<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-navbar">
        <a class="navbar-brand" href="#" style="display: block;margin: 0px auto;"><img
                src="{{ asset('image/z-logo-default.svg') }}" alt=""></a>
    </nav>
    <div class="my-container row">
        <div class="my-map col-7 p-0">
            <div class="draw">
                <div class="draw-action d-none p-2" id="draw-action-js">
                    <p><strong>Draw a shape </strong>around the region(s) you would like to live in</p>
                    <div class="draw-action-button">
                        <a class="my-btn" style="color: #000" onclick="hiddenActionBar()">Cancel</a>
                        <a class="my-btn" style="color: #000" onclick="getLocationByPolygon()">Apply</a>
                    </div>
                </div>
                <div style="display: flex;justify-content: flex-end;">
                    <a id="drawpoly" class="my-btn" disabled>Draw</a>
                </div>
            </div>
            <div id="map_canvas"></div>
        </div>
        <div class="card my-side-bar col-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <div class="card-body">
                <h3 class="p-3">Real Estate & Homes For Sale</h3>
                <div class="container">
                    <div class="row" id="list-side-bar-js" style="overflow: auto; height: 500px;">
                        {{-- <div class="col-6">
                            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <div class="card-body">
                                    <img style="width: 100%;"
                                        src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Hue%2C_le_pont_Trang_Tien.jpg"
                                        alt="">
                                    <p class="my-text p-2 m-0">Name: Truong tien Brige</p>
                                    <p class="my-text p-2 m-0">Coordinates: Truong tien Brige</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/library/jquery.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3MF7G5w46dVqk3y2RhSBUv_iin5tFJIs"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ asset('js/DOM.js') }}"></script>
    <script src="{{ asset('js/const.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
