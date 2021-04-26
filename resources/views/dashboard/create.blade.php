@extends('layouts.app')

@section('content')
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 100%;
        width: 100%;
      }
    </style>

	<div class="page-content-wrapper">
		<div class="container-fluid">
			@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action="/store" method="post">
            	@csrf
	            <div class="row m-5 p-5">
	            	<div class="col-12">
	            		<div class="card m-b-20">
							<div class="card-header">
								<h4 class="mt-0 header-title text-center">Enter New Disruption Record</h4>
							</div>
	            			<div class="card-body">
	            				<div class="row ">
	            				{{-- Fields --}}
		            				<div class="col-lg-6">

		            					<div class="form-group row">
		                                    <label for="type" class="col-lg-2 col-form-label">Type:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="Enter Type" 
		                                        	name="type" id="type" required>
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="proponent" class="col-lg-2 col-form-label">Proponent:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="Enter your Current Location" 
		                                        	name="proponent" id="proponent" required>
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="from" class="col-lg-2 col-form-label">From:</label>
		                                    <div class="col-sm-10">
												<input type='text' class="form-control" id='datetimepicker1' name="from" placeholder="Departure Date / Time" />
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="to" class="col-lg-2 col-form-label">To:</label>
		                                    <div class="col-sm-10">
												<input type='text' class="form-control" id='datetimepicker2' name="to" placeholder="Arrival Date / Time"/>	
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="description" class="col-lg-2 col-form-label">Description:</label>
		                                    <div class="col-sm-10">
		                                    	<textarea id="description" class="form-control" maxlength="225" rows="3" name="description" placeholder="This textarea has a limit of 225 chars." style="resize: none;"></textarea>
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="latitude" class="col-lg-2 col-form-label">Latitude:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="90.0000° N" 
		                                        	name="latitude" id="latitude" value="-25.344">
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="longitude" class="col-lg-2 col-form-label">Longitude:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="135.0000° W" 
		                                        	name="longitude" id="longitude" value="131.036">
		                                    </div>
		                                </div>
		                                 

		                                <div class="form-group row">
		                                    <label for="example-color-input" class="col-lg-2 col-form-label">Marker Color:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="color" value="#67a8e4" id="example-color-input" name="color" required>
		                                    </div>
		                                </div>

		                                <button class="btn btn-outline-primary" type="submit" name="save">Save Record</button>
		            				</div>

		            			{{-- MAP --}}

		            				<div class="col-lg-6">
	                                    <div id="map"></div>
										    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
											<script
										      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI&callback=initMap&libraries=&v=weekly"
										      async>
											</script>
		            				</div>

	            				</div>{{-- Row --}}
	            			</div> {{-- Card Body END --}}
	            		</div> {{-- CARD END --}}
	            	</div> {{-- col-12 --}}
	            </div>
            </form>
		</div>
    </div>
</div>

        <script src="assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="assets/pages/gmaps.js"></script>

        <script>
        	$(document).on('keyup',function(e){
        		let id = $(e.target).attr("id")
        		if(id == 'longitude' || id == 'latitude'){
		        	initMap();
        		}
        	});

		      // Initialize and add the map
		      function initMap() {
		        // The location of Uluru
		        let uluru;
		        uluru = { lat: -25.344, lng: 131.036 };
		        var longitude = Number($('#longitude').val(),10);
		        var latitude =  Number($('#latitude').val(),10);
		        if(longitude != 0 || !latitude != 0 ){
		        	uluru = { 
		        		lat: latitude, 
		        		lng: longitude 
		        	};
		        }

		        // The map, centered at Uluru
		        const map = new google.maps.Map(document.getElementById("map"), {
		          zoom: 4,
		          center: uluru,
		        });
		        // The marker, positioned at Uluru
		        const marker = new google.maps.Marker({
		          position: uluru,
		          map: map,
		        });
		      }
   		</script>

@endsection
