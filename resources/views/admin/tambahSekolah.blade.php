<!DOCTYPE html>
<html lang="en">

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
      @include('admin.menu')
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
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

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
              @include('admin.panel')
            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
              @include('admin.notif')
            <!-- Page Heading -->
            <form class="form-horizontal" action="{{route('admin.tambahsekolah.submit')}}" method="post"> 
                {{csrf_field()}} 
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Nama Sekolah</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama_sekolah" class="form-control" value="">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Jumlah Guru</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="jumlah_guru" class="form-control" value="">
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-3">
                        <label for="">Gambar</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="gambar" class="form-control" value="">
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Visi</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="visi" class="form-control" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Misi</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="misi" class="form-control" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Nomor Telepon</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="no_telp" class="form-control" value="">
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-3">
                        <label for="">Kecamatan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kecamatan" class="form-control" value="">
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Akreditas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="akreditas" class="form-control" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input id="mapsearch" type="text" name="alamat" class="form-control" value="">
                    </div>
                </div>
                <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <center>Pilih Lokasi Anda</center>
                                        <small><center><span class="text-danger">*Drag marker merah sesuai lokasi anda</span></small>
                                    </h2>
                                </div>
                                <div class="form-group">
                                    <div id="dvMap" style="width: 100%; height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Latitude</label>
                    </div>
                    <div class="col-md-9">
                        <input id="lat" type="text" name="latitude" class="form-control" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Longitude</label>
                    </div>
                    <div class="col-md-9">
                        <input id="long" type="text" name="longitude" class="form-control" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Link Sekolah</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="link_sekolah" class="form-control" value="">
                    </div>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-9">
                        <input type="submit" name="" value="Simpan" class="btn btn-primary btn-block">
                    </div>

                </div>
            </form>

            <!-- Content Row -->

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
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOpdBpwYOOlEcMywl8vXLTBjoHqYXtKDU&libraries=places" async defer> </script>
<script type="text/javascript">
    window.onload = function() 
    {
        var mapOptions = 
        {
            center: new google.maps.LatLng(-5.3971396, 105.2667887),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var infoWindow = new google.maps.InfoWindow();
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

        var marker = new google.maps.Marker(
        {
            position: 
            {
                lat: -5.3971396,
                lng: 105.2667887
            },
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));
        google.maps.event.addDomListener(searchBox, 'places_changed', function() 
        {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for (i = 0; place = places[i]; i++) 
            {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        })
        google.maps.event.addListener(marker, 'drag', function(event) 
        {
            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });
        google.maps.event.addListener(marker, 'click', function(event) 
        {
            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });
    }
</script>
  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('sig/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('sig/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::to('sig/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{URL::to('sig/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
