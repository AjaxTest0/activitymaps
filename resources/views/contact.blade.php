@extends('layouts.app')

@section('content')
	<div class="container" style="width: 50rem;">
		<div class="card m-5 p-5 shadow cc-bg-blue">
			<div class="card shadow">
				<div class="display-4 text-center p-3 cc-blue">Contact Us</div>
				    <div class="form-group row p-3">
			            <label for="name" class="col-lg-2 col-form-label m-0"><b>Name:</b></label>
		                <div class="col-sm-10">
		                    <input class="form-control" type="text" placeholder="Enter Type" 
		                        name="name" id="name" value="" required>
		                </div>
			    	</div>
			</div>
		</div>
	</div>				
@endsection