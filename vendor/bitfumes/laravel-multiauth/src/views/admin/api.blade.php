@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
	@if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
	<div class="row justify-content-center">
		<div class="col-8">
			<form action="api/{{$api->id}}" method="post">
			@csrf
			<div class="card m-5 p-5 cc-bg-blue">
				<div class="card">
					<div class="card-header">Google Map Api</div>
					<div class="card-body">
						<div class="form-group row">
							<label for="api" class="col-md-2 col-form-label">API:</label>
							<div class="col-md-10">
								<input id="api" type="text" class="form-control" name="api" value="{{ $api->api }}" required>
							</div>
						</div>
						<button class="btn btn-outline-primary col-4" type="submit">Update API key</button>
					</div>
				</div>
			</div>	
			</form>
		</div>
	</div>
</div>
@endsection