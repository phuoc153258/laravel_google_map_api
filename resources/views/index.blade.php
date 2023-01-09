<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <script src="{{ asset('js/library/jquery.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3MF7G5w46dVqk3y2RhSBUv_iin5tFJIs"></script>

    <div class="draw">
        <div class="draw-action d-none" id="draw-action-js">
            <p><strong>Draw a shape </strong>around the region(s) you would like to live in</p>
            <div class="draw-action-button">
                <a class="btn" onclick="hiddenActionBar()">Cancel</a>
                <a class="btn">Apply</a>
            </div>
        </div>
        <div style="display: flex;justify-content: flex-end;">
            <a id="drawpoly" class="btn" disabled>Draw</a>
        </div>
    </div>
    <div id="map_canvas"></div>

    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ asset('js/DOM.js') }}"></script>
    <script src="{{ asset('js/const.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
