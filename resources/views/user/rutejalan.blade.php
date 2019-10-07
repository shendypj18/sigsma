<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIG Sekolah</title>

  <!-- Custom fonts for this template-->
  <link href="{{URL::to('sig/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{URL::to('sig/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      @include('user.menu')
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
          

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->


              <!-- Nav Item - Messages -->


              <!-- Nav Item - User Information -->
              @include('user.panel')
            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
<style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }

      #map {
        height: 500px;
        float: left;
        width: 63%;
      }
      #right-panel {
        float: right;
        width: 100;
        height: 500px;
        overflow: auto;
      }
      .panel {
        height: 500px;
        overflow: auto;
      }
    </style>

            <!-- Content Row -->
            <div class="row"> 
            <div class="col-sm-8">
              <div id="Map" style="width: 100%; height: 500px;"></div>
            </div>
            <div class="col-sm-4">
              <div id="right-panel"></div>
            </div>
            </div>
    
    </div>
                           
        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Silahkan klik logout.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('sig/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('sig/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::to('sig/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{URL::to('sig/js/sb-admin-2.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt6a6dy99jZcyrlIe7OghOsZ0khO1x4O8&libraries=places"> </script> 
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places"> </script> -->
    <script>
        var default_lat = -8.251889;
        var default_lng = 115.076818;
        var default_zoom = 10;
    </script>
<script>
  $(function(){
    initMap();
  })

var markerArray = [];

  function initMap() {
    var map = new google.maps.Map(document.getElementById('Map'), {
      zoom: 4,
      center: {lat: default_lat, lng: default_lng}  // Australia.
    });

    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer({
      draggable: true,
      map: map,
      panel: document.getElementById('right-panel')
    });

    var stepDisplay = new google.maps.InfoWindow;


    directionsDisplay.addListener('directions_changed', function() {
        //calculateAndDisplayRoute()
      computeTotalDistance(directionsDisplay.getDirections());
          for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
        }

        showSteps(directionsDisplay.getDirections(), markerArray, stepDisplay, map);
      //calculateAndDisplayRoute(pos, {lat: -8.372245, lng: 115.102754}, directionsService, directionsDisplay, stepDisplay, map);
    });

    // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: {{Auth::user()->latitude}},
              lng: {{Auth::user()->longitude}}
            };

            //infoWindow.setPosition(pos);
            //infoWindow.setContent('Location found.');
            //infoWindow.open(map);
            //map.setCenter(pos);
            calculateAndDisplayRoute(pos, {lat: {{$lat}}, lng: {{$long}}}, directionsService, directionsDisplay, stepDisplay, map);
          }, function() {
                calculateAndDisplayRoute(getCurLocation(), {lat: {{$lat}}, lng: {{$long}}}, directionsService, directionsDisplay, stepDisplay, map);
          });
        } else {
          // Browser doesn't support Geolocation
          calculateAndDisplayRoute(getCurLocation(), {lat: {{$lat}}, lng: {{$long}}}, directionsService, directionsDisplay, stepDisplay, map);
        }
  }

  function calculateAndDisplayRoute(origin, destination, directionsService, directionsDisplay, stepDisplay, map) {

    for (var i = 0; i < markerArray.length; i++) {
        markerArray[i].setMap(null);
    }

    directionsService.route({
      origin: origin,
      destination: destination,
      //waypoints: [{location: 'Adelaide, SA'}, {location: 'Broken Hill, NSW'}],
      travelMode: 'DRIVING',
      avoidTolls: true
    }, function(response, status) {
      if (status === 'OK') {
        //console.log(response);
        directionsDisplay.setDirections(response);
        showSteps(response, markerArray, stepDisplay, map);
      } else {
        alert('Could not display directions due to: ' + status);
      }
    });
  }

  function showSteps(directionResult, markerArray, stepDisplay, map) {
    // For each step, place a marker, and add the text to the marker's infowindow.
    // Also attach the marker to an array so we can keep track of it and remove it
    // when calculating new routes.
    var myRoute = directionResult.routes[0].legs[0];

    //console.log(directionResult.routes[0].legs[0]);

    for (var i = 0; i < myRoute.steps.length; i++) {
      var marker = markerArray[i] = markerArray[i] || new google.maps.Marker();
      //marker.setMap(map);
      //marker.setPosition(myRoute.steps[i].start_location);
      //marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
      attachInstructionText(
          stepDisplay, marker, myRoute.steps[i].instructions, map);
    }
  }

  function attachInstructionText(stepDisplay, marker, text, map) {
        google.maps.event.addListener(marker, 'click', function() {
          // Open an info window when the marker is clicked on, containing the text
          // of the step.
          stepDisplay.setContent(text);
          stepDisplay.open(map, marker);
        });
      }

  function computeTotalDistance(result) {
    var total = 0;
    var myroute = result.routes[0];
    var terdekat = 0;

    terdekat = myroute.legs[0].steps[0].distance.value;

    //console.log(result);
    for (var i = 0; i < myroute.legs.length; i++) {
      total += myroute.legs[i].distance.value;
    }
    total = total / 1000;
    document.getElementById('total').innerHTML = total + ' km';
    document.getElementById('terdekat').innerHTML = (terdekat / 1000) + ' km';// + terdekat + ' m';
  }
</script>


</body>

</html>
