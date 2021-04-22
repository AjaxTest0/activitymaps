@extends('layouts.app')

@section('content')
<style type="text/css">
.first {
  background-image: url("assets\\images\\background\\vector-world-map.jpg");
  height: 100%;

}
/* Set the size of the div element that contains the map */
#map {
  height: 500px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
</style>
<div class="container-fluid">
    <div>
      <div class="row first clearfix">
        <div class="col-lg-7 col-md-1 float-left"></div>
          @auth
            <div class="col-lg-4 col-md-10 float-right">
                <div class="m-5 p-5 display-4 text-white">
                  <b style="color: #4a494a">Welcome</b> To <i style="color: #46b4e3" class="pl-5">Activity Maps</i>
                </div>
            </div>
          @endauth
          @guest
            <div class="col-lg-4 col-sm-10 float-right">
                <div class="card my-5">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
 
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          @endguest  
      </div>
      <div class="row text-justify text-white">
          <div class="col-lg-6 p-4" style="background-color: #46b4e3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <div class="col-lg-6 p-4" style="background-color: #1d1e3d">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
           </div>
      </div>
      <div class="row">
        <div id="map"></div>
          <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
              {{-- <div id="map"></div> --}}
              <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI&callback=initMap&libraries=&v=weekly"
                async>
        </script>
      </div>
    </div>
</div>

        <script src="assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="assets/pages/gmaps.js"></script>

        <script>
          // Initialize and add the map
          function initMap() {
            // The location of Uluru
            let uluru;
            uluru = { lat: -25.344, lng: 131.036 };

            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 5,
              center: uluru,
            });
          }
      </script>
@include('layouts.footer')
@endsection

