@extends('layouts.app')

@section('content')
<style type="text/css">
.first {
  background-image: url("assets\\images\\background\\map_7.jpg");
  background-position:center center;
  background-repeat:no-repeat;
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
      <div class="row first clearfix p-5" style="height: 900px">
        <div class="col-lg-7 col-md-1 float-left"></div>
          @auth
          <div class="col-lg-5  col-md-10 float-right">
                <div class="m-5 display-3 text-white">
                  <b style="color: #4a494a">Welcome</b> To <i style="color: #46b4e3" class="pl-5">Activity Maps</i>
                </div>
          </div>
          @endauth
          @guest  
            @include('includes.login_include')
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
@endsection

