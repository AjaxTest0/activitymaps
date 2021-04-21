@include('layouts/header_include')
@include('layouts/navbar')
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 600px;
        /* The height is 400 pixels */
        width: 750px;
        /* The width is the width of the web page */
      }
    </style>

	<div class="page-content-wrapper ">
		<div class="container">
			@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/update/{{ $map->id }}" method="post">
            	@csrf
	            <div class="row m-5 p-5">
	            	<div class="col-12">
	            		<div class="card m-b-20">
	            			<div class="card-body">
	            				<h4 class="mt-0 header-title text-center">Edit Disruption Record</h4>
	            				<div class="row ">
	            				{{-- Fields --}}
		            				<div class="col-lg-12">
		            					<input type="text" name="id" value="{{ $map->id }}" hidden>
		            					<div class="form-group row">
		                                    <label for="type" class="col-lg-2 col-form-label">Type:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="Enter Type" 
		                                        	name="type" id="type" value="{{ $map->type }}" required>
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="proponent" class="col-sm-2 col-form-label">Proponent:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="Enter your Current Location" 
		                                        	name="proponent" id="proponent" value="{{ $map->proponent }}" required>
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="from" class="col-sm-2 col-form-label">From:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="datetime-local" 
		                                        	name="from" id="from" value="{{ Carbon\Carbon::parse($map->from)->format('Y/m/d')  }}" required>
		                                    </div>
		                                </div>

		                                <div class="form-group row"> <label for="to"
		                                class="col-sm-2 col-form-label">To:</label>
		                                <div class="col-sm-10"> <input
		                                class="form-control" type="datetime-local" 
		                                name="to" id="to" value="{{  Carbon\Carbon::parse($map->to)->format('d/m/Y h:i A')  }}"
		                                required> </div> </div>

		                                <div class="form-group row">
		                                    <label for="description" class="col-sm-2 col-form-label">Description:</label>
		                                    <div class="col-sm-10">
		                                    	<textarea id="description" class="form-control" maxlength="225" rows="3" name="description">{{ $map->description }}</textarea>
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="latitude" class="col-sm-2 col-form-label">Latitude:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="90.0000° N" 
		                                        	name="latitude" id="latitude" value="{{ $map->latitude }}">
		                                    </div>
		                                </div>

		                                <div class="form-group row">
		                                    <label for="longitude" class="col-sm-2 col-form-label">Longitude:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="text" placeholder="135.0000° W" 
		                                        	name="longitude" id="longitude" value="{{ $map->longitude }}">
{{-- 		                                    <span onClick="initMap()"><i class="fa fa-eye"></i></span> --}}
		                                    </div>
		                                </div>
		                                 

		                                <div class="form-group row">
		                                    <label for="example-color-input" class="col-md-2 col-form-label">Marker Color:</label>
		                                    <div class="col-sm-10">
		                                        <input class="form-control" type="color" value="{{ $map->color }}" id="example-color-input" name="color" required>
		                                    </div>
		                                </div>

		                                <button class="btn btn-outline-primary" type="submit">Update Record</button>
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

@include('layouts/footer')


