<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blank Page | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCvzInaKXJ5vVMYECqLTs85C8AgiCXvVyc" type="text/javascript"></script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.4
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Fleet Monitor</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div id="gmap_markers" class="gmap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
        
    ?>
    <!-- Google Maps --
-6.1693777, lng: 106.8333068
        51.5287352,-0.3818055 

        51.5287352,-0.3818055-->

    <script>
        var locations = [
            <?php
                $url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?location=51.503186,-0.126446&radius=5000&type=museum&key=AIzaSyCvzInaKXJ5vVMYECqLTs85C8AgiCXvVyc";
                $json = file_get_contents($url);
                $val = json_decode($json, TRUE);

                    $last = count($val['results']);
                 for($i = 0; $i < $last-1; $i++){
                         foreach ( $val['results'][$i]['geometry'] as $value ) {
                                 echo ("['".$val['results'][$i]['id']."',".$value['lat'].",".$value['lng'].'],');
                         }
                 }
                 echo ("['".$val['results'][$last-1]['id']."',".$val['results'][$last-1]['geometry']['location']['lat'].",".$val['results'][$last-1]['geometry']['location']['lng'].']');
            ?>
                // ['London Eye, London', 51.503454,-0.119562],
                // ['Palace of Westminster, London', 51.499633,-0.124755]
        ];



      // var map;
      // function initMap() {
      //   map = new google.maps.Map(document.getElementById('gmap_markers'), {
      //     center: {lat: 51.5287352, lng: -0.3818055},
      //     zoom: 13,
      //     disableDefaultUI: true
      //   });
      // }

        var map = new google.maps.Map(document.getElementById('gmap_markers'), {
            zoom: 13,
            center: new google.maps.LatLng(51.506143,-0.126631),
            disableDefaultUI: true
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        var icon = {
            url: "images/pin.png", // url
            scaledSize: new google.maps.Size(25, 32), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };

        for (i = 0; i < locations.length; i++) { 
            marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: icon
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                }
            })(marker, i));
        }

    </script>

    
     <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvzInaKXJ5vVMYECqLTs85C8AgiCXvVyc&callback=initMap" async defer></script>

    <!-- GMaps PLugin Js -->
    <script src="plugins/gmaps/gmaps.js"></script>

    <!-- Google Maps -->


    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>