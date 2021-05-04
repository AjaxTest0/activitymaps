<footer class=" text-center text-white py-3 page-footer" style="background-color: #0e2532">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<h4>Our History</h4>
				<p class="text-justify px-5">
					{{ DB::table('frontends')->first()->our_history }}
				</p>
			</div>
			<div class="col-lg-4">
				<h4>Our Skill</h4>
				<p class="text-justify px-5">
					{{ DB::table('frontends')->first()->our_skill }}
				</p>
			</div>
			<div class="col-lg-4">
				<h4>Our biography</h4>
				<p class="text-justify px-5">
					{{DB::table('frontends')->first()->our_biography}}
				</p>
			</div>
		</div>
		<div class="">
			<a href={{DB::table('frontends')->first()->facebook_link}} class="fa fa-facebook fa-2x m-2 text-light "></a>
			<a href={{DB::table('frontends')->first()->twitter_link}} class="fab fa-twitter fa-2x m-2 text-light"></a>
			<a href={{DB::table('frontends')->first()->google_link}} class="fab fa-google fa-2x m-2 text-light"></a>
			<a href={{DB::table('frontends')->first()->linkedin_link}} class="fab fa-linkedin fa-2x m-2 text-light"></a>	
			<a href={{DB::table('frontends')->first()->youtube_link}} class="fab fa-youtube fa-2x m-2 text-light"></a>
			<a href={{DB::table('frontends')->first()->instagram_link}} class="fab fa-instagram fa-2x m-2 text-light"></a>	
			<a href={{DB::table('frontends')->first()->pinterest_link}} class="fab fa-pinterest fa-2x m-2 text-light"></a>	
		</div>
	</div>
	Copyright &copy; {{date('Y')}}. All Rights Reserved.
</footer>