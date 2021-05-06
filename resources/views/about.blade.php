@extends('layouts.app')

@section('content')

		<div class="container">
			<div class="card m-5 p-5 cc-bg-blue">
				<div class="card">
					<div class="card-body">
						<h2 class="font-weight-bold text-center">About Us</h2>
						<hr>
						<p class="card-text">
							{{ DB::table('frontends')->first()->aboutus }}
						</p>
					</div>
				</div>
			</div>
		</div>

@endsection
