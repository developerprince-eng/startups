

<!-- Portfolio Section -->
<div id="works-section" class="work-flexi">
	<div class="container"> <!-- Container -->
		<div class="section-title text-center center">
			<h2>Our Startups</h2>
			<hr>

			<div class="clearfix"></div>
		</div>
		<div class="categories">
			<ul class="cat">
				<li>
					<ol class="type">
						<li><a href="#" data-filter="*" class="active">All</a></li>
						<li><a href="#" data-filter=".entertainment">Entertainment</a></li>
						<li><a href="#" data-filter=".mediacoms">Media & Communcation</a></li>
						<li><a href="#" data-filter=".energy">Energy</a></li>
						<li><a href="#" data-filter=".events">Events</a></li>
						<li><a href="#" data-filter=".construction">Construction</a></li>
						<li><a href="#" data-filter=".health">Health Care</a></li>
						<li><a href="#" data-filter=".realestate">Real Estate</a></li>
						<li><a href="#" data-filter=".food">Food</a></li>
					</ol>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="categories">
			<ul class="cat">
				<li>
					<ol class="type">
						<li><a href="#" data-filter=".market" >Market Research</a></li>
						<li><a href="#" data-filter=".tech">Technology & Software</a></li>
						<li><a href="#" data-filter=".vr">Virtual Reality</a></li>
						<li><a href="#" data-filter=".fashion">Fashion</a></li>
					</ol>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<form class="" role="search">
			<div class="form-group">
				<div class="col-xs-12" style="margin: 0 30% 5%;">
					<input type="text" class="form-control01" placeholder="Search" aria-invalid="false">
					<!-- <input type="button" class="btn btn-default" aria-invalid="false" value="Search" style="padding: 0.7% 2%; border-radius: 0; color: #aaa; background-color: transparent; border: 1px solid #ddd">-->
				</div>
			</div>
		</form>
		<!-- Card Workspace -->
		<div class="portfolio-item">
			<div class="row">
				
				<?php foreach($startups as $startup): ?>
				<div class="col-md-3 col-sm-6 col-lg-3 card-deco show-case">
					<div class="portfolio-item isotope-item">
						<div class="card transition hover-bg">
							<h2 class="transition str-h2"><?php echo $startup['name']; ?></h2>
							<p class="startup-description str-text"><small><?php echo $startup['brief'] ?></small></p>
							<div class="cta-container transition"><a type="" class="cta-name" >Bulawayo</a></div>
							<div class="cta-container transition"><a href="" class="cta-loc" data-toggle="modal" data-target="" id="readmore-2">ReadMore</a></div>
							<div class="card_circle transition">
								<img src=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="" role="dialog">
					<div class="modal-dialog" style="margin-top: 8%;">
						<!--  Modal content-->
						<div class="modal-content model-design">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<img class="img-responsive center-block" src="" style="max-width: 20%;">
							</div>
							<div class="modal-body">
								<div class="row startup_description">
									<div class="col-md-8 col-lg-8 col-xs-8">
										<h3>Description</h3>
										<p>
											<?php echo startup['description']; ?>
										</p>
										<div class="row startup_know" style="margin-top: 5%;">
											<div class="col-md-8 col-lg-8 col-xs-8">
												<div class="container">
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
											<div class="col-md-4 col-lg-4 col-xs-4">
												<a>Know More</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4 col-xs-4">
										<h3>Location</h3>
										<p>
											Cnr Jason Ave & 9th Ave,<br>
											Bulawayo, Bambanani Centre 2nd Floor
										</p>
										<div class="row startup_status">
											<div class="container">
												<h3>Status</h3>
												<p>Active</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer"></div>
						</div>
					</div>
				</div>
				
				<?php endforeach; ?>
		
	</div>
</div>

<div class="text-center">
	<a href="<?php echo base_url(); ?>startups/upload" class="btn btn-default btn-lg page-scroll">Register Startup</a>
</div>

<!-- Contact Section -->
<div id="contact-section" class="text-center">
	<div class="container">
		<div class="section-title center">
			<h2>Contact Us</h2>
			<hr>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="col-md-4"> <i class="fa fa-map-marker"></i>
				<p>The Techvillage Cnr Jason Ave & 9th Ave,<br>
					Bulawayo, Bambanani Centre 2nd Floor</p>
			</div>
			<div class="col-md-4"> <i class="fa fa-envelope-o"></i>
				<p>registry@startup.co.zw</p>
			</div>
			<div class="col-md-4"> <i class="fa fa-phone"></i>
				<p> +263731222222</p>
			</div>
			<hr>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- Social Section -->
<div id="social-section">
	<div class="container">
		<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/pitchzw/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/pitchzw"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
</div>