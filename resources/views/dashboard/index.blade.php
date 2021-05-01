@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/plugins/gmaps/gmaps.min.js') }}"></script>
<script src="{{ asset('assets/pages/gmaps.js') }}"></script>

<style type="text/css">
  /* Set the size of the div element that contains the map */
  #map {
   height: 600px;
   /* The height is 400 pixels */
   width: 	100%;
   /* The width is the width of the web page */
 }
</style>
<style>
  .slidecontainer {
    width: 100%;
  }

  .slider {
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #0e2532;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
  }

  .slider:hover {
    opacity: 1;
  }

  .slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #46b4e3;
    cursor: pointer;
  }

  .slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #04AA6D;
    cursor: pointer;
  }
</style>

<script type="text/javascript"> let locations</script>
<div class="page-content-wrapper">
  <div class="container-fluid">

    <div class="row">

    <div class="col-lg-12 my-3">
       <div id="map"></div>
       <script	src="https://maps.googleapis.com/maps/api/js?key={{ trim(\DB::table('apis')->pluck('api'), '[""]') }}&callback=initMap&libraries=&v=weekly" async>
       </script>
       <script src="{{asset('assets/js/pages/mapwelcome.js')}}"></script>
    </div>

    <div class="col-lg-12 my-3">
        <div class="form-group col-3 border p-3">
          <label for="from" class="font-weight-bold">From</label> 
              <input type="dateTime" name="from" id="from" class="form-control" value={{ $maps->sortBy("from")->first()->from }}>
          <label for="to" class="font-weight-bold">To</label> 
              <input type="dateTime" name="to" id="to" class="form-control" value={{ $maps->sortByDesc("to")->first()->to }}>
        </div>
    </div>

    <div class="col-lg-12 my-3">
      @include('includes.datatable')
    </div>

  </div>
 </div>
</div> 

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>

{{-- <script>
var slider = $("#myRange");
var output = $("#demo");
output.html(slider.val());

slider.oninput = function() {
  output.html(this.val());
}
</script> --}}

@endsection
