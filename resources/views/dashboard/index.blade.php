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
<script type="text/javascript"> let locations</script>
<div class="page-content-wrapper">
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12 my-3">

        <div id="map"></div>
        <script	src="https://maps.googleapis.com/maps/api/js?key={{ trim(\DB::table('apis')->pluck('api'), '[""]') }}&callback=initMap&libraries=&v=weekly" async>
        </script>
        <script src="{{asset('assets/js/pages/mapIndex.js')}}"></script>
    </div>

    <div class="col-lg-12 my-3 clearfix">
      <div class="form-group col-3 border p-3 float-left">
        <label for="from" class="font-weight-bold">from</label> 
            <input type="dateTime" name="from" id="from" class="form-control" 
              value={{ $maps->sortBy("from")->first()->from ?? date('Y-m-d H:i:s') }}>
        <label for="to" class="font-weight-bold">To</label> 
            <input type="dateTime" name="to" id="to" class="form-control" 
              value={{ $maps->sortByDesc("to")->first()->to ?? date('Y-m-d H:i:s') }}>
      </div>
      @if(Auth::user()->roles->first()->name == 'super')
      <div class="float-right">
        <a class="btn btn-outline-primary" href="{{url('maps/export/')}}">Export All Maps</a>
      </div>
      @endif
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
@endsection
