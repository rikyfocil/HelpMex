<<<<<<< HEAD
@extends('sidebar')
=======
@extends('donador.sidebar')
>>>>>>> 98e639d10211f9818b952f6ff391340b958476e7
@section('content')

	<div id="fh5co-main">

		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">We Love To Design <span>See Our Portfolio</span></h2>

			<h3> Urgencia Alta </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-high">
					<a>
						<p><i class="fa fa-5x fa-pencil" aria-hidden="true"></i><p> <br>
						<h3 class="fh5co-work-title">Enlatados</h3>
						<p>Sub1 </p>
					</a>
				</div>
				
			</div>

			<h3> Urgencia Media </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-med">
					<a>
						<p><i class="fa fa-5x fa-pencil" aria-hidden="true"></i><p> <br>
						<h3 class="fh5co-work-title">Enlatados</h3>
						<p>Sub1 </p>
					</a>
				</div>
				
			</div>

			<h3> Urgencia Baja </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-low">
					<a>
						<p><i class="fa fa-5x fa-pencil" aria-hidden="true"></i><p> <br>
						<h3 class="fh5co-work-title">Enlatados</h3>
						<p>Sub1 </p>
					</a>
				</div>
				
			</div>

		</div>
		
		
		<div class="fh5co-testimonial" >
			<div class="fh5co-narrow-content">
				<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
	            <div class="item">
	            	<figure>
	            		<img src="images/testimonial_person2.jpg" alt="Free HTML5 Bootstrap Template">
	            	</figure>
	              	<p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite></p>
	            </div>
	            <div class="item">
	            	<figure>
	            		<img src="images/testimonial_person3.jpg" alt="Free HTML5 Bootstrap Template">
	            	</figure>
	              	<p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;<cite class="author">&mdash; Steve Jobs</cite></p>
	            </div>
	            <div class="item">
	            	<figure>
	            		<img src="images/testimonial_person4.jpg" alt="Free HTML5 Bootstrap Template">
	            	</figure>
	              	<p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
	            </div>
	          </div>
			</div>
		</div>


		<div id="map">My map will go here</div>
	    <script>
	      var map;
	      function initMap() {
	        map = new google.maps.Map(document.getElementById('map'), {
	          center: {lat: -34.397, lng: 150.644},
	          zoom: 8
	        });
	      }

	    </script>
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0lbxcrWK2viuK3I2CTjysl-8JP0-IpkM&callback=initMap" async defer></script>


		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">This Is What <span>We Love To Do</span></h2>
			<div class="row">
				<div class="col-md-6">
					<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
						<div class="fh5co-icon">
							<i class="icon-strategy"></i>
						</div>
						<div class="fh5co-text">
							<h3>Strategy</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
						<div class="fh5co-icon">
							<i class="icon-telescope"></i>
						</div>
						<div class="fh5co-text">
							<h3>Explore</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
						<div class="fh5co-icon">
							<i class="icon-circle-compass"></i>
						</div>
						<div class="fh5co-text">
							<h3>Direction</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
						<div class="fh5co-icon">
							<i class="icon-tools-2"></i>
						</div>
						<div class="fh5co-text">
							<h3>Expertise</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
			<div class="fh5co-narrow-content animate-box">
				<div class="row" >
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="67" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Clients Worked With</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="130" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Completed Projects</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="27232" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Line of Codes</span>
					</div>
				</div>
			</div>
		</div>



	</div>

@endsection

