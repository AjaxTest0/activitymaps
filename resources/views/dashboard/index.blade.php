@include('layouts/header_include')
@include('layouts/navbar')
    <style type="text/css">
      /* Set the size of the div element that contains the map */
	    #map {
	        height: 600px;
	        /* The height is 400 pixels */
	        width: 	1040px;
	        /* The width is the width of the web page */
	      }
    </style>
    <script type="text/javascript"> let locations</script>
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
                            <th>#</th>
            				<th>Type</th>	
            				<th>Proponent</th>	
            				<th>From</th>	
            				<th>To</th>	
            				<th>Description</th>	
            				<th>Latitude</th>	
            				<th>Longitude</th>
                            <th>Action</th>	
            			</thead>
            			<tbody>
							@foreach($maps as $key => $map)
            				<tr>
                                <td>{{ ++$key }}</td>
            					<td>{{ $map->type }}</td>
            					<td>{{ $map->proponent }}</td>
            					<td>{{ $map->from }}</td>
            					<td>{{ $map->to }}</td>
            					<td>{{ $map->description }}</td>
            					<td id="latitude" class="cord">{{ $map->latitude }}</td>
            					<td id="longitude" class="cord">{{ $map->longitude }}</td>
                                <td class="clearfix">
                                    <form action="/edit/{{ $map->id }}" class="float-left m-1">                                        
                                        <button class="btn btn-warning btn-sm" onclick="edit()"><i class="far fa-edit"></i></button>
                                    </form>
                                    <form action="/delete/{{ $map->id }}" method="POST" class="float-right m-1">
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                <span class="cord" data-latitude="{{ $map->latitude }}" data-longitude="{{ $map->longitude }}"></span>
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
    <script src="{{asset('assets/js/pages/mapIndex.js')}}"></script>
