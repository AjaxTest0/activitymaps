@extends('layouts.app')

@section('content')

	<div class="page-content-wrapper ">
		<div class="container">
            <form action="/update/{{ $map->id }}" method="post">
				@csrf
				<div class="row m-5 p-5">
					<div class="col-12">
						<div class="card m-b-20">
							<div class="card-body">
								<h2 class="m-3 header-title text-center font-weight-bold">Edit Disruption Record</h2>
								<hr>
								<div class="row ">
								{{-- Fields --}}
									<div class="col-lg-12">
										<input type="text" name="id" value="{{ $map->id }}" hidden>
										<div class="form-group row">
											<label for="type" class="col-lg-2 col-form-label">Type:</label>
											<div class="col-10 col-sm-12 col-md-12">
												<input class="form-control" type="text" placeholder="Enter Type" 
													name="type" id="type" value="{{ $map->type }}" required>
											</div>
										</div>

										<div class="form-group row">
											<label for="proponent" class="col-lg-4 col-form-label">Proponent Name:</label>
											<div class="col-10 col-sm-12 col-md-12">
												<input class="form-control" type="text" placeholder="Enter your Current Location" 
													name="proponent" id="proponent" value="{{ $map->proponent }}" required>
											</div>
										</div>

										<div class="form-group row">
											<label for="from" class="col-lg-2 col-form-label">From:</label>
											<div class="col-10 col-sm-12 col-md-12">
												<input type='dateTime' class="form-control" name="from" value="{{\Carbon\Carbon::parse($map->from)->format('Y/m/d h:i:s')  }}" placeholder='{{$map->from}}' /> 
											</div>
										</div>

										<div class="form-group row"> 
											<label for="to" class="col-lg-2 col-form-label">To:</label>
											<div class="col-10 col-sm-12 col-md-12"> 
												<input type='dateTime' class="form-control" name="to" value="{{\Carbon\Carbon::parse($map->to)->format('Y/m/d h:i:s')  }}" placeholder='{{$map->to}}' />
											</div> 
										</div>

										<div class="form-group row">
											<label for="description" class="col-lg-2 col-form-label">Description:</label>
											<div class="col-10 col-sm-12 col-md-12">
												<textarea id="description" class="form-control" maxlength="225" rows="3" name="description">{{ $map->description }}</textarea>
											</div>
										</div>

										<div class="form-group row">
											<label for="latitude" class="col-lg-2 col-form-label">Latitude:</label>
											<div class="col-10 col-sm-12 col-md-12">
												<input class="form-control" type="text" placeholder="90.0000° N" 
													name="latitude" id="latitude" value="{{ $map->latitude }}">
											</div>
										</div>

										<div class="form-group row">
											<label for="longitude" class="col-lg-2 col-form-label">Longitude:</label>
											<div class="col-10 col-sm-12 col-md-12">
												<input class="form-control" type="text" placeholder="135.0000° W" 
													name="longitude" id="longitude" value="{{ $map->longitude }}">
											</div>
										</div>
									

										<div class="form-group row">
											<label for="example-color-input" class="col-lg-2 col-form-label">Marker Color:</label>
											<div class="col-10 col-sm-12 col-md-12">
												<input class="form-control" type="color" value="{{ $map->color }}" id="example-color-input" name="color" required>
											</div>
										</div>

										<div class="form-group row">
											<label for="js-example-basic-multiple" class="col-lg-2 col-form-label">Map View</label>
											<div class="col-10 col-sm-12 col-md-12">
												<select class="js-example-basic-multiple form-control" name="users[]" multiple="multiple" >
													@foreach ($users as $user)
													<option value={{ $user->id }}>{{ $user->name }}</option>
													@endforeach
												</select>
											</div>
										</div>


										<div class="clearfix">
											<button class="btn btn-outline-primary float-left" type="submit" name="action" value="submit">Update Record</button>
											<button class="btn btn-warning float-right" type="submit" name="action" value="dublicate">Copy Record</button>
										</div>
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

<script type="text/javascript">
	console.log($(`#datetimepicker1`).val());
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
</script>

@endsection


