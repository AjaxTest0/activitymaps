@extends('layouts.app')

@section('content')
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
			@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row">
            	<div class="col-lg-12 my-3">
					<div id="map"></div>
					<script	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI&callback=initMap&libraries=&v=weekly" async>
					</script>
            	</div>

            	<div class="col-lg-12 my-3">
            		<div class="table-responsive-sm">
                		<table id="example" class="table table-striped table-bordered" style="width:100%">
                			<thead>
                                <tr> 
                                    <th>#</th>
                    				<th>Type</th>	
                    				<th>Proponent</th>	
                    				<th>From</th>	
                    				<th>To</th>	
                    				<th>Description</th>	
                    				<th>Latitude</th>	
                    				<th>Longitude</th>
                                    <th>Action</th>	
                                </tr>
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
                					<td>{{ $map->latitude }}</td>
                					<td>{{ $map->longitude }}</td>
                                    <td class="d-flex justify-content-between align-items-center">
										<a class="btn btn-primary btn-sm" href="{{url('/marker/'.$map->id)}}">
											<i class="far fa-eye"></i>
										</a>
										@if(Auth::user()->roles->first()->name == 'user')
											<a href="{{url('/edit/'.$map->id)}}" class="btn btn-warning btn-sm">
												<i class="far fa-edit"></i>
											</a>
		  								
											<form action="/delete/{{ $map->id }}" method="POST">
												@csrf
												<button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button>
											</form>
										@endif
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

    <script src="{{asset('assets/js/pages/mapIndex.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
