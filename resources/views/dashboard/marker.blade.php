@extends('layouts.app')

@section('content')
	<script src="{{ asset('assets/plugins/gmaps/gmaps.min.js') }}"></script>
    <script src="{{ asset('assets/pages/gmaps.js') }}"></script>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        let uluru;
        uluru = { lat: Number(<?php echo $maps->latitude ?>), lng: Number(<?php echo $maps->longitude ?>) };
        // alert(typeof uluru['lat']);
        // alert(typeof uluru['lng']);
        // debugger;
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: Number(<?php echo $maps->latitude ?>), lng: Number(<?php echo $maps->longitude ?>) },
          zoom: 4,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
   	</script>
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 500px;
        width: 100%;
      }
    </style>
	<div class="page-content-wrapper">
		<div class="container mt-4">

			<div class="card">
	  			<div class="card-header d-flex justify-content-between align-items-center">
	  				<h4 class="card-title text-primary">
					  <i class="fas fa-map-marker-alt mr-2"></i> {{ $maps->type }}
					</h4>
					@if(Auth::user()->roles->first()->name == 'super')
						<a href="{{url('/home')}}" class="text-decoration-none">
							<i class="fas fa-plus"></i>	Add New
						</a>
					@endif
				</div>
	  			<div class="card-body">
	  				<div class="row">
	  					<div class="col">
	  						<div class="row">
							  	<div class="col-3 mb-3 font-weight-bold">Type:</div>	
								<div class="col-9 mb-3">{{ $maps->type }}</div>

								<div class="col-3 mb-3 font-weight-bold">Proponent:</div>	
								<div class="col-9 mb-3">{{ $maps->proponent }}</div>

								
								<div class="col-3 mb-3 font-weight-bold">From:</div>	
								<div class="col-9 mb-3">
									{{ \Carbon\Carbon::parse($maps->from)->format('l, F j, Y h:i:s A')}}	
								</div>


								<div class="col-3 mb-3 font-weight-bold">To:</div>	
								<div class="col-9 mb-3">
									{{ \Carbon\Carbon::parse($maps->to)->format('l, F j, Y h:i:s A')}}	
								</div>


								<div class="col-3 mb-3 font-weight-bold">Description:</div>	
								<div class="col-9 mb-3">{{ $maps->description }}</div>


								<div class="col-3 mb-3 font-weight-bold">Latitude:</div>	
								<div class="col-9 mb-3">{{ $maps->latitude }}</div>

								<div class="col-3 mb-3 font-weight-bold">Longitude:</div>	
								<div class="col-9 mb-3">{{ $maps->longitude }}</div>
							</div>
						</div>

						{{-- MAP --}}
	  					<div class="col">
							<div id="map"></div>
							<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
							<script src="https://maps.googleapis.com/maps/api/js?key={{ trim(\DB::table('apis')->pluck('api'), '[""]') }}&callback=initMap&libraries=&v=weekly" async></script>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	

@endsection