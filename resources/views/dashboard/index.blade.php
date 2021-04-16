@include('layouts/header_include')
@include('layouts/navbar')

	<div class="page-content-wrapper ">
		<div class="container-fluid">
			@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action="" method="">
            	@csrf
	            <div class="row mx-5 px-5">
	            	<div class="col-12">
	            		<div class="card m-b-20">
	            			<div class="card-body">
	            				<h4 class="mt-0 header-title text-center">Enter New Disruption Record</h4>
	            				<div class="row ">
	            					{{-- Fields --}}
	            				<div class="col-lg-5 m-1">

	            					<div class="form-group row">
	                                    <label for="type" class="col-sm-2 col-form-label">Type:</label>
	                                    <div class="col-sm-10">
	                                        <input class="form-control" type="text" placeholder="Enter Type" 
	                                        	name="type" id="type" required>
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="proponent" class="col-sm-2 col-form-label">Proponent:</label>
	                                    <div class="col-sm-10">
	                                        <input class="form-control" type="text" placeholder="Enter your Current Location" 
	                                        	name="proponent" id="proponent">
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="from" class="col-sm-2 col-form-label">From:</label>
	                                    <div class="col-sm-10">
	                                        <input class="form-control" type="date" 
	                                        	name="from" id="from">
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="to" class="col-sm-2 col-form-label">To:</label>
	                                    <div class="col-sm-10">
	                                        <input class="form-control" type="date" 
	                                        	name="to" id="to">
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="description" class="col-sm-2 col-form-label">Description:</label>
	                                    <div class="col-sm-10">
	                                    	<textarea id="Description" class="form-control" maxlength="225" rows="3" 
	                                    		placeholder="This textarea has a limit of 225 chars."></textarea>
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="latitude" class="col-sm-2 col-form-label">Latitude:</label>
	                                    <div class="col-sm-10">
	                                        <input class="form-control" type="number" placeholder="90.0000° N" 
	                                        	name="latitude " id="latitude ">
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="longitude" class="col-sm-2 col-form-label">Longitude:</label>
	                                    <div class="col-sm-10">
	                                        <input class="form-control" type="number" placeholder="135.0000° W" 
	                                        	name="longitude" id="longitude">
	                                    </div>
	                                </div>

	                                <div class="form-group row">
	                                    <label for="example-color-input" class="col-sm-2 col-form-label">Marker Color:</label>
	                                    <div class="col-sm-10">
	                                        <input class="form-control" type="color" value="#67a8e4" id="example-color-input">
	                                    </div>
	                                </div>

	                                <div class="btn btn-outline-primary">Save Record</div>

	            				</div>

	            				{{-- MAP --}}

	            				<div class="col-lg-5 m-1">
	            					<div style="width: 100%">
	            						<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
	            							src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=punjab&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
	            						</iframe>
	            						<a href="https://www.maps.ie/draw-radius-circle-map/">Circle area map</a></div>
	            				</div>
	            					
	            				</div>
	            			</div> {{-- Card Body END --}}
	            		</div> {{-- CARD END --}}
	            	</div> {{-- col-12 --}}
	            </div>
            </form>
		</div>
    </div>
</div>
    
@include('layouts/footer')
        <!-- Parsley js -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
