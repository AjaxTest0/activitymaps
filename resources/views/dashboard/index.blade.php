@include('layouts/header_include')
@include('layouts/navbar')
    <style type="text/css">
      /* Set the size of the div element that contains the map */
	    #map {
	        height: 600px;
	        /* The height is 400 pixels */
	        width: 	890px;
	        /* The width is the width of the web page */
	      }
    </style>
	<div class="page-content-wrapper">
		<div class="container">
			@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row my-5">
            	<div class="col-lg-12 row d-flex justify-content-center my-2">
					<div id="map"></div>
						<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
						<script
							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI&callback=initMap&libraries=&v=weekly"
										      async>
						</script>
            	</div>
            	<div class="col-lg-12 row d-flex justify-content-center my-2">
            		<div class="table-responsive-lg">
            			<table class="table-borderless table-hover">
            			<thead class="text-center ">
            				<th>Type</th>	
            				<th>Proponent</th>	
            				<th>From</th>	
            				<th>To</th>	
            				<th>Description</th>	
            				<th>Latitude</th>	
            				<th>Longitude</th>	
            			</thead>
            			<tbody>
							@foreach($maps as $map)
            				<tr>
            					<td>{{ $map->type }}</td>
            					<td>{{ $map->proponent }}</td>
            					<td>{{ $map->from }}</td>
            					<td>{{ $map->to }}</td>
            					<td>{{ $map->description }}</td>
            					<td id="latitude">{{ $map->latitude }}</td>
            					<td id="longitude">{{ $map->longitude }}</td>
            					<script type="text/javascript">
            						var locations =[
            							[{{ $map->longitude }},{{ $map->latitude }}],
            						] 
            					</script>
            				</tr>
							@endforeach
            			</tbody>
            			</table>
            		</div>
            	</div>
            </div>
        </div>
    </div> 

@include('layouts/footer')
	<script>

		      // Initialize and add the map
		      function initMap() {
		        // The location of Uluru

		        let uluru;
		        uluru = { lat: -33, lng: 151 };
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