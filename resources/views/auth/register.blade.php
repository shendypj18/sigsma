@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal_sekolah" class="col-md-4 col-form-label text-md-right">{{ __('Asal Sekolah') }}</label>

                            <div class="col-md-6">
                                <input id="asal_sekolah" type="text" class="form-control @error('name') is-invalid @enderror" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required autocomplete="asal_sekolah" autofocus>

                                @error('asal_sekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" placeholder="masukan alamat anda" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                        <div class="form-group row">
                            <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" type="text" class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude') }}" required autocomplete="alamat" autofocus>

                                @error('latitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

                            <div class="col-md-6">
                                <input id="longitude" type="text" class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('longitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="b_indo" class="col-md-4 col-form-label text-md-right">{{ __('Bahasa Indonesia') }}</label>

                            <div class="col-md-6">
                                <input id="b_indo" type="text" class="form-control @error('b_indo') is-invalid @enderror" name="b_indo" value="{{ old('b_indo') }}" required autocomplete="b_indo" autofocus>

                                @error('b_indo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="b_ing" class="col-md-4 col-form-label text-md-right">{{ __('Bahasa Inggris') }}</label>

                            <div class="col-md-6">
                                <input id="b_ing" type="text" class="form-control @error('b_ing') is-invalid @enderror" name="b_ing" value="{{ old('b_ing') }}" required autocomplete="b_ing" autofocus>

                                @error('b_ing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mtk" class="col-md-4 col-form-label text-md-right">{{ __('Matematika') }}</label>

                            <div class="col-md-6">
                                <input id="mtk" type="text" class="form-control @error('mtk') is-invalid @enderror" name="mtk" value="{{ old('mtk') }}" required autocomplete="mtk" autofocus>

                                @error('mtk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ipa" class="col-md-4 col-form-label text-md-right">{{ __('Ipa') }}</label>

                            <div class="col-md-6">
                                <input id="ipa" type="text" class="form-control @error('ipa') is-invalid @enderror" name="ipa" value="{{ old('ipa') }}" required autocomplete="mtk" autofocus>

                                @error('ipa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt6a6dy99jZcyrlIe7OghOsZ0khO1x4O8&libraries=places" async defer> </script>
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
</div>
@endsection
