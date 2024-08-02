<?php include 'header.php' ?>
<main class="main_area">

    <!--    breadcrumb-->
    <div class="breadcrumb_area" style="background-image: url(assets/img/breadcrumb/breadcrumb-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_inner">
                        <p class="breadcrumb_inner_title">تماس با ما</p>
                        <ul class="breadcrumb_inner_nav">
                            <li><a href="home.php">خانه</a></li>
                            <li>تماس با ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    contact content-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_wrapper">
                        <ul class="contact_wrapper_list">
                            <li>
                                <i class="fal icon-home-alt"></i>
                                <div class="contact_wrapper_list_details">
                                    <span>آدرس</span>
                                    <span>
قیطریه - اندرزگو - خیابان کریمی - خیابان واعظی - پلاک ۳۶ - طبقه ۴ - واحد ۸
                                </span>
                                </div>
                            </li>
                            <li>
                                <i class="fal icon-phone"></i>
                                <div class="contact_wrapper_list_details">
                                    <span>تلفن</span>
                                    <span>۰۲۱۹۱۰۰۸۱۴۴</span>
                                </div>
                            </li>
                            <li>
                                <i class="fal icon-envelope"></i>
                                <div class="contact_wrapper_list_details">
                                    <span>ایمیل</span>
                                    <span>info@shazinco.com</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group required">
                                <label class="col-sm-2" for="input-firstname">نام</label>
                                <div class="col-sm-10 pl-0">
                                    <input type="text" name="firstname" value="" placeholder="نام"
                                           id="input-firstname">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2" for="input-email">ایمیل</label>
                                <div class="col-sm-10 pl-0">
                                    <input type="email" name="email" value="" placeholder="ایمیل"
                                           id="input-email">
                                </div>
                            </div>
                            <div class="form-group required align-items-start">
                                <label class="col-sm-2" for="message">پیام</label>
                                <div class="col-sm-10 pl-0">
                                    <textarea rows="4" name="message"  placeholder="پیام"
                                              id="message"></textarea>
                                </div>
                            </div>
                            <div type="submit" class="contact_form_btn">
                                <a href="#">ارسال</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                    <div class="col-12">
                        <!-- CedarMap CSS SDK -->
                        <link href='https://api.cedarmaps.com/cedarmaps.js/v1.8.1/cedarmaps.css' rel='stylesheet'/>
                        <!-- CedarMap Container -->
                        <div id="map_container"></div>
                        <!-- StyleSheet -->
                        <style>
                            #map_container {
                                position: relative;
                                width: 100%;
                                height: 400px;
                                max-width: 100%;
                            }

                            .leaflet-bottom, .leaflet-top {
                                z-index: 900;
                            }
                        </style>
                        <script>
                            function contactMap() {
                                // Map options
                                var cm_options = {
                                    "center": {"lat": 35.79938483754273, "lng": 51.43941659945995},
                                    "maptype": "light",
                                    "scrollWheelZoom": false,
                                    "zoomControl": true,
                                    "zoom": 17,
                                    "minZoom": 6,
                                    "maxZoom": 17,
                                    "legendControl": false,
                                    "attributionControl": false
                                };
                                // Initialized CedarMap
                                var map = window.L.cedarmaps.map('map_container', 'https://api.cedarmaps.com/v1/tiles/cedarmaps.streets.json?access_token=f43af9e81a679bd3ae9abae8bab4f2406c26bac4&markers', cm_options);
                                // Markers options
                                var markers = [{
                                    "popupContent": "موسسه آموزشی بینش",
                                    "center": {"lat": 35.79938483754273, "lng": 51.43941659945995},
                                    "iconOpts": {
                                        "iconUrl": "https://api.cedarmaps.com/v1/markers/marker-circle-blue.png",
                                        "iconRetinaUrl": "https://api.cedarmaps.com/v1/markers/marker-circle-blue@2x.png",
                                        "iconSize": [82, 98]
                                    }
                                }];
                                var markersLeaflet = [];
                                var _marker = null;

                                map.setView(cm_options.center, cm_options.zoom);
                                // Add Markers on Map
                                if (markers.length === 0) return;
                                markers.map(function (marker) {
                                    var iconOpts = {
                                        iconUrl: marker.iconOpts.iconUrl,
                                        iconRetinaUrl: marker.iconOpts.iconRetinaUrl,
                                        iconSize: marker.iconOpts.iconSize,
                                        popupAnchor: [0, -49]
                                    };

                                    const markerIcon = {
                                        icon: window.L.icon(iconOpts)
                                    };

                                    _marker = new window.L.marker(marker.center, markerIcon);
                                    markersLeaflet.push(_marker);
                                    if (marker.popupContent) {
                                        _marker.bindPopup(marker.popupContent);
                                    }
                                    _marker.addTo(map);
                                });
                                // Bounding Map to Markers
                                if (markers.length > 1) {
                                    var group = new window.L.featureGroup(markersLeaflet);
                                    map.fitBounds(group.getBounds(), {padding: [30, 30]});
                                }
                            };

                            (function (c, e, d, a) {
                                var p = c.createElement(e);
                                p.async = 1;
                                p.src = d;
                                p.onload = a;
                                c.body.appendChild(p);
                            })(document, 'script', 'https://api.cedarmaps.com/cedarmaps.js/v1.8.1/cedarmaps.js', contactMap);
                        </script>
                    </div>

            </div>
        </div>
    </div>


</main>
<?php include 'footer.php' ?>
