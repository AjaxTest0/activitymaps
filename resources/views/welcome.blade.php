@extends('layouts.app')

@section('content')
<style type="text/css">
.first {
  background-image: url("assets\\images\\background\\background.png");
  background-position:center center;
  background-repeat:no-repeat;
  height: 600px;
}
#map {
  height: 500px;
  width: 100%;
}
</style>
<div class="container-fluid">
    <div>
      <div class="row first p-3">
          @auth
          <div class="text-center align-content-center mt-5 pt-5">
                <div class="m-5 pt-5 display-3 cc-darkblue font-weight-bold">
                  Welcome
                </div>
          </div>
          @endauth
          @guest  
          <div class="container">
            @include('includes.login_include')
          </div>
          @endguest  
      </div>
<div></div>
      <div class="row text-justify text-white">
          <div class="col-lg-6 p-4 px-5 cc-bg-blue">
            <p class="px-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
          <div class="col-lg-6 p-4 px-5 cc-bg-darkblue">
            <p class="px-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
           </div>
      </div>
      <div class="row">
        <div id="map"></div>
              <script src="https://maps.googleapis.com/maps/api/js?key={{ trim(\DB::table('apis')->pluck('api'), '[""]') }}&callback=initMap&libraries=&v=weekly"
                async>
        </script>
      </div>
    </div>
</div>
  <script src="assets/plugins/gmaps/gmaps.min.js"></script>
  <script src="assets/pages/gmaps.js"></script>
  <script src="{{asset('assets/js/pages/mapwelcome.js')}}"></script>
@endsection

