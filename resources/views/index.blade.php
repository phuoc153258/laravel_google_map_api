<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <a href="#" data-dismiss="modal" aria-label="Close"
            style="position: absolute;top: 15px;right: 20px; color: #fff;cursor: pointer;"><i
                class="fa-solid fa-x"></i></a>
        <div class="modal-dialog modal-xl" role="document" style="height: 90% !important;">
            <div class="modal-content" style="height: 100% !important;">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 location-image"
                            style=" height: 500px;
                        overflow: auto;">
                            <img style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" class="w-100 rounded"
                                src="{{ asset('image/quoc-hoc-origin.jpg') }}" alt=""
                                id="origin_image-place-js">
                            <div class="row" id="list_image-place-js">
                                <div class="col-6 p-2"><img class="w-100 rounded"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
                                        src="{{ asset('image/quoc-hoc-1.jpg') }}" alt="">
                                </div>
                                <div class="col-6 p-2"><img class="w-100 rounded"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
                                        src="{{ asset('image/quoc-hoc-1.jpg') }}" alt="">
                                </div>
                                <div class="col-6 p-2"><img class="w-100 rounded"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
                                        src="{{ asset('image/quoc-hoc-1.jpg') }}" alt="">
                                </div>
                                <div class="col-6 p-2"><img class="w-100 rounded"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
                                        src="{{ asset('image/quoc-hoc-1.jpg') }}" alt="">
                                </div>
                                <div class="col-6 p-2"><img class="w-100 rounded"
                                        style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
                                        src="{{ asset('image/quoc-hoc-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 location-description"
                            style=" height: 500px;
                        overflow: auto;">
                            <div class="location-header border-bottom">
                                <h3 id="place_name-place-js">Trường THPT Hai Bà Trưng</h3>
                                <div class="location-header-review d-flex" style="gap: 0 10px;height: 25px !important;">
                                    <p class="m-0">4.7</p>
                                    <div class="d-flex" style="gap: 0 5px;">
                                        <a href=""><i class="fa-solid fa-star"></i></a>
                                        <a href=""><i class="fa-solid fa-star"></i></a>
                                        <a href=""><i class="fa-solid fa-star"></i></a>
                                        <a href=""><i class="fa-solid fa-star"></i></a>
                                        <a href=""><i class="fa-solid fa-star"></i></a>
                                    </div>
                                    <p>150 review</p>
                                </div>
                                <p class="mb-1" id="place_type-place-js">Trường Trung Học Phổ Thông</p>
                            </div>
                            <div class="border-bottom d-flex justify-content-between p-3">
                                <div class="">
                                    <a href=""
                                        style="width: 25px;height: 25px; background-color: blue !important; color: white"
                                        class="m-auto p-3 d-flex justify-content-center align-items-center rounded-circle"><i
                                            class="fa-solid fa-diamond-turn-right"></i></a>

                                    <p class="m-0 text-center">Directions</p>
                                </div>
                                <div class="">
                                    <a href=""
                                        style="width: 25px;height: 25px; background-color: blue !important; color: white"
                                        class="m-auto p-3 d-flex justify-content-center align-items-center rounded-circle"><i
                                            class="fa-solid fa-bookmark"></i></a>

                                    <p class="m-0 text-center">Save</p>
                                </div>
                                <div class="">
                                    <a href=""
                                        style="width: 25px;height: 25px; background-color: blue !important; color: white"
                                        class="m-auto p-3 d-flex justify-content-center align-items-center rounded-circle"><i
                                            class="fa-solid fa-location-dot"></i></a>

                                    <p class="m-0 text-center">Nearby</p>
                                </div>
                                <div class="">
                                    <a href=""
                                        style="width: 25px;height: 25px; background-color: blue !important; color: white"
                                        class="m-auto p-3 d-flex justify-content-center align-items-center rounded-circle"><i
                                            class="fa-solid fa-mobile"></i></a>

                                    <p class="m-0 text-center">Send to phone</p>
                                </div>
                                <div class="">
                                    <a href=""
                                        style="width: 25px;height: 25px; background-color: blue !important; color: white"
                                        class="m-auto p-3 d-flex justify-content-center align-items-center rounded-circle"><i
                                            class="fa-solid fa-diamond-turn-right"></i></a>

                                    <p class="m-0 text-center">Directions</p>
                                </div>
                            </div>
                            <div class="border-bottom">
                                <div class="d-flex p-3" style="gap: 0 10px;">
                                    <a href=""><i class="fa-solid fa-location-pin"></i></a>
                                    <p class="m-0" id="address-place-js">14 Lê Lợi, Vĩnh Ninh, Thành phố Huế, Thừa
                                        Thiên Huế, Vietnam</p>
                                </div>
                                <div class="d-flex p-3" style="gap: 0 10px;">
                                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                                    <p class="m-0" id="email-place-js">thpthaibatrung@gmail.com</p>
                                </div>
                                <div class="d-flex p-3" style="gap: 0 10px;">
                                    <a href=""><i class="fa-solid fa-phone"></i></a>
                                    <p class="m-0" id="phone_number-place-js">+84123456789</p>
                                </div>
                                <div class="d-flex p-3" style="gap: 0 10px;">
                                    <a href=""><i class="fa-solid fa-plus"></i></a>
                                    <p class="m-0" id="plus_code-place-js">FH6Q+9W Thành phố Huế, Thua Thien Hue,
                                        Vietnam</p>
                                </div>
                                <div class="d-flex p-3" style="gap: 0 10px;">
                                    <a href=""><i class="fa-solid fa-mobile"></i></a>
                                    <p class="m-0">Send to your phone</p>
                                </div>
                                <div class="d-flex p-3" style="gap: 0 10px;">
                                    <a href=""><i class="fa-solid fa-circle-check"></i></a>
                                    <p class="m-0">Claim this business</p>
                                </div>
                                <div class="d-flex p-3" style="gap: 0 10px;">
                                    <a href=""><i class="fa-solid fa-tag"></i></a>
                                    <p class="m-0">Add a label</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-navbar">
        <a class="navbar-brand" href="#" style="display: block;margin: 0px auto;"><img
                src="{{ asset('image/z-logo-default.svg') }}" alt=""></a>
    </nav>
    <div class="my-container row">
        <div class="my-map col-7 pr-0">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/library/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
        integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/const.js') }}"></script>
    <script src="{{ asset('js/DOM.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
</body>

</html>
