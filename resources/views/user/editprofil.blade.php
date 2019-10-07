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
  <link href="{{URL::to('sig/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>
@include('user.notif')
<body>
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
        <form class="form-horizontal" action="{{route('user.editprofil.submit',$user)}}" method="post"enctype="multipart/form-data">
            <img src="/uploads/{{Auth::user()->photo}}" style="width:200px; height:200px"  class="img-profile rounded-circle fa-user" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input name="photo" id="photo" type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        
      <form class="form-horizontal" action="{{route('user.editprofil.submit',$user)}}" method="post">
        {{csrf_field()}}
        {{method_field('put')}}
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Lengkap:</label>
            <div class="col-lg-8">
            <input id="name" name="name" class="form-control" type="text" value="{{Auth::user()->name}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">username:</label>
            <div class="col-lg-8">
              <input id="username" name="username" class="form-control" type="text" value="{{Auth::user()->username}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Asal Sekolah:</label>
            <div class="col-lg-8">
              <input id="asal_sekolah" name="asal_sekolah" class="form-control" type="text" value="{{Auth::user()->asal_sekolah}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input id="email" name="email" class="form-control" type="text" value="{{Auth::user()->email}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Alamat:</label>
            <div class="col-lg-8">
              <input id="alamat" name="alamat" class="form-control" type="text" value="{{Auth::user()->alamat}}">
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
        <div class="form-group">
            <label class="col-lg-3 control-label">Latitude:</label>
            <div class="col-lg-8">
              <input name="latitude" id="latitude" class="form-control" type="text" value="{{Auth::user()->latitude}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Longitude:</label>
            <div class="col-lg-8">
              <input name="longitude" id="longitude" class="form-control" type="text" value="{{Auth::user()->longitude}}">
            </div>
          </div>
          <h3>Nilai UN</h3>
          <div class="form-group">
            <label class="col-lg-3 control-label">Bahasa Indonesia:</label>
            <div class="col-lg-8">
              <input id="b_indo" name="b_indo" class="form-control" type="text" value="{{Auth::user()->b_indo}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Bahasa Inggris:</label>
            <div class="col-lg-8">
              <input id="b_ing" name="b_ing" class="form-control" type="text" value="{{Auth::user()->b_ing}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Matematika:</label>
            <div class="col-lg-8">
              <input id="mtk" name="mtk" class="form-control" type="text" value="{{Auth::user()->mtk}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Ilmu Pengetahuan Alam:</label>
            <div class="col-lg-8">
              <input id="ipa" name="ipa" class="form-control" type="text" value="{{Auth::user()->ipa}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input id="password" name="password" class="form-control" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <a href="/dashboard" type="button" class="btn btn-default">cancel</a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt6a6dy99jZcyrlIe7OghOsZ0khO1x4O8&libraries=places" async defer> </script>
<script type="text/javascript">
    window.onload = function() 
    {
        var mapOptions = 
        {
            center: new google.maps.LatLng(-5.3971396, 105.2667887),
            zoom: 12,
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
        var searchBox = new google.maps.places.SearchBox(document.getElementById('alamat'));
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
            document.getElementById('latitude').value = event.latLng.lat();
            document.getElementById('longitude').value = event.latLng.lng();
        });
        google.maps.event.addListener(marker, 'click', function(event) 
        {
            document.getElementById('latitude').value = event.latLng.lat();
            document.getElementById('longitude').value = event.latLng.lng();
        });
    }
</script>
<hr>
</body>