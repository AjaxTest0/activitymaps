@extends('layouts.app')

@section('content')

<style type="text/css">
	/* Set the size of the div element that contains the map */
	#map {
		height: 100%;
		width: 100%;
	}
</style>

<div class=" text-nowrap">
	<div class="container-fluid">

		<form action="/store" method="post">
			@csrf
			<div class="row m-5 p-5">
				<div class="col-12">
					<div class="card m-b-20">
						<div class="card-body">
							<h2 class=" m-2 header-title text-center font-weight-bold">New Record</h2>
							<hr>
							<div class="row ">
								{{-- Fields --}}
								<div class="col-lg-6 col-md-12 col-sm-12">

									<div class="form-group row mb-0">
										<label for="type" class="col-2 col-form-label">Type:</label>
										<div class="col-12">
											<input class="form-control" type="text" placeholder="Enter Type" 
											name="type" id="type" required>
										</div>
									</div>

									<div class="form-group row mb-0">
										<label for="proponent" class="col-lg-2 col-form-label">Proponent Name:</label>
										<div class="col-12">
											<input class="form-control" type="text" placeholder="Enter your Current Location" 
											name="proponent" id="proponent" required>
										</div>
									</div>

									<div class="form-group row mb-0">
										<label for="from" class="col-lg-2 col-form-label">From:</label>
										<div class="col-12">
											<input type='dateTime-local' class="form-control" {{-- id='datetimepicker1' --}} name="from" placeholder="Departure Date / Time" />
										</div>
									</div>

									<div class="form-group row mb-0">
										<label for="to" class="col-lg-2 col-form-label">To:</label>
										<div class="col-12">
											<input type='dateTime-local' class="form-control" {{-- id='datetimepicker2' --}} name="to" placeholder="Arrival Date / Time"/>	
										</div>
									</div>

									<div class="form-group row mb-0">
										<label for="description" class="col-lg-2 col-form-label">Description:</label>
										<div class="col-12">
											<textarea id="description" class="form-control" maxlength="225" rows="3" name="description" placeholder="This text area has a limit of 225 characters." style="resize: none;"></textarea>
										</div>
									</div>

									<div class="form-group row mb-0">
										<label for="latitude" class="col-lg-2 col-form-label">Latitude:</label>
										<div class="col-12">
											<input class="form-control" type="text" placeholder="90.0000° N" 
											name="latitude" id="latitude" value="-25.344">
										</div>
									</div>

									<div class="form-group row mb-0">
										<label for="longitude" class="col-lg-2 col-form-label">Longitude:</label>
										<div class="col-12">
											<input class="form-control" type="text" placeholder="135.0000° W" 
											name="longitude" id="longitude" value="131.036">
										</div>
									</div>


									<div class="form-group row">
										<label for="example-color-input" class="col-lg-2 col-form-label">Color:</label>
										<div class="col-12">
											<input class="form-control" type="color" value="#67a8e4" id="example-color-input" name="color" required>
										</div>
									</div>

									<button class="btn btn-outline-primary" type="submit" name="save">Save Record</button>
								</div>

								{{-- MAP --}}

								<div class="col-lg-6 col-md-12 col-sm-12">
									<div id="map"></div>
									<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
									<script
										src="https://maps.googleapis.com/maps/api/js?key={{ trim(\DB::table('apis')->pluck('api'), '[""]') }}&callback=initMap&libraries=&v=weekly"
									async>
									</script>
									<script src="assets/plugins/gmaps/gmaps.min.js"></script>
									<script src="assets/pages/gmaps.js"></script>
									<script src="{{asset('assets/js/pages/mapcreate.js')}}"></script>
								</div>

						</div>{{-- Row --}}
						</div> {{-- Card Body END --}}
					</div> {{-- CARD END --}}
				</div> {{-- col-12 --}}
			</div>
		</form>
		<!-- Forms End-->

	</div>
</div>
</div>



@endsection
