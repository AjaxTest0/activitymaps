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


		<div class="card m-5 p-5 cc-bg-blue">
			<div class="card">
				<div class="card-body">
				<div class="d-flex justify-content-between align-items-center p-2">
					<h4 class=" text-muted">
						<i class="fas fa-map-marker-alt mr-2"></i> {{ $maps->type }}
					</h4>
					<a href="{{url('/home')}}" class="btn btn-outline-primary">
						<i class="fas fa-plus"></i>	Add New Map
					</a>
				</div>
				<hr>

					<div class="row">
						<div class="col">
							<div class="row">
								<form action="/update/{{ $maps->id }}" method="post">
									@csrf
									<div class="col-10 font-weight-bold">Type:</div>	
									<div class="col-12">{{ $maps->type }}</div><br>
									<input class="" type="text" placeholder="Enter Type" 
														name="type" id="type" value="{{ $maps->type }}" hidden>

									
									<div class="col-10 mb-3 font-weight-bold">Proponent:</div>	
									<div class="col-12 mb-3">{{ $maps->proponent }}</div>
									<input class="" type="text" placeholder="Enter your Current Location" 
														name="proponent" id="proponent" value="{{ $maps->proponent }}" hidden>
									
									<div class="col-10 mb-3 font-weight-bold">From:</div>	
									<div class="col-12 mb-3">
										{{ \Carbon\Carbon::parse($maps->from)->format('l, F j, Y h:i:s A')}}	
										</div>
									<input type='dateTime' class="" name="from" value="{{\Carbon\Carbon::parse($maps->from)->format('Y/m/d h:i:s')  }}" placeholder='{{$maps->from}}' hidden/> 
										
										<div class="col-10 mb-3 font-weight-bold">To:</div>	
										<div class="col-12 mb-3">
									{{ \Carbon\Carbon::parse($maps->to)->format('l, F j, Y h:i:s A')}}	
									</div>
									<input type='dateTime' class="" name="to" value="{{\Carbon\Carbon::parse($maps->to)->format('Y/m/d h:i:s')  }}" placeholder='{{$maps->to}}' hidden/>


									<div class="col-10 mb-3 font-weight-bold">Description:</div>	
									<div class="col-12 mb-3">{{ $maps->description }}</div>
									<textarea id="description" class="" maxlength="225" rows="3" name="description" hidden>{{ $maps->description }}</textarea>

									
									<div class="col-10 mb-3 font-weight-bold">Latitude:</div>	
									<div class="col-12 mb-3">{{ $maps->latitude }}</div>
									<input class="" type="text" placeholder="120.0000° N" 
														name="latitude" id="latitude" value="{{ $maps->latitude }}" hidden>
									
									<div class="col-10 mb-3 font-weight-bold">Longitude:</div>	
									<div class="col-12 mb-3">{{ $maps->longitude }}</div>
									<input class="" type="text" placeholder="135.0000° W" 
														name="longitude" id="longitude" value="{{ $maps->longitude }}"hidden>
									<input class="form-control" type="checkbox" value={{ $maps->is_public }} id="public" name="public" {{ $maps->is_public? "checked":"" }} hidden>
									<input class="form-control" type="color" value="{{ $maps->color }}" id="example-color-input" name="color" hidden>

									<button class="btn btn-warning m-3" type="submit" name="action" value="dublicate">Copy Record</button>

								</form>
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
</div>


@endsection