@extends('layouts.app')

@section('content')
	<div class="container" style="width: 50rem;">
		<div class="card m-5 p-5 shadow cc-bg-blue">
			<form action="/contactus" method="post">
				@csrf
				<div class="card shadow">
					<div class="display-4 text-center p-3 cc-blue">Contact Us</div>
						<div class="col-12">
						    <div class="form-group row">
					            <label for="name" class="col-lg-3 col-form-label m-0"><b>Name:</b></label>
				                <div class="col-sm-9">
				                    <input class="form-control" type="text" placeholder="Enter Name" 
				                        name="name" id="name" value="" required>
				                </div>
					    	</div>

					    	<div class="form-group row">
					            <label for="email" class="col-lg-3 col-form-label m-0"><b>Email:</b></label>
				                <div class="col-sm-9">
				                    <input class="form-control" type="text" placeholder="Enter Email" 
				                        name="email" id="email" value="" required>
				                </div>
					    	</div>


					    	<div class="form-group row">
					            <label for="reason" class="col-lg-3 col-form-label m-0"><b>Message:</b></label>
				                <div class="col-sm-9">
				                    <textarea class="form-control" type="text" placeholder="Enter Message" 
				                        name="reason" id="reason" value="" required></textarea> 
				                </div>
					    	</div>

					    	<button class="btn btn-outline-primary m-3 float-right" type="submit">Submit</button>
				    	</div>
				</div>
			</form>
		</div>
	</div>				
@endsection