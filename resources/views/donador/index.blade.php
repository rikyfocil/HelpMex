@extends('donador.sidebar')
@section('content')

	<div id="fh5co-main">

		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Urgencia de donaciones</h2>

			<h3> Urgencia Alta </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="https://grist.files.wordpress.com/2014/08/bottled-water.jpg?w=1024&h=576&crop=1" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Agua Embotellada</h3>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="https://comohacerpara.com/imgl/18109-recetas-atun-lata-comidas_l.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive" height="1024" width="576">
							<h3 class="fh5co-work-title">Enlatados</h3>
						</a>
					</div>
				
			</div>

			<h3> Urgencia Media </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="https://static.websguru.com.ar/var/m_8/84/844/28347/466665-carlos-parodi-y-cia-s-a-material-para-construccion.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Material de Construcción</h3>
						</a>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="https://losmejores.top/imagenes/los-mejores-panales.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Pañales</h3>
						</a>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="https://queretaro.quadratin.com.mx/www/wp-content/uploads/2017/07/COMIDA-MASCOTAS.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Alimento para mascotas</h3>
						</a>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="http://2.bp.blogspot.com/-Iv3_9IBgyiw/VPcw74UOZNI/AAAAAAAADlE/-7PP6_WIdTQ/s1600/ropa-camisetas-colores.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Ropa para hombre</h3>
						</a>
					</div>
				
			</div>

			<h3> Urgencia Baja </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="http://www.telemundo.com/sites/nbcutelemundo/files/styles/article_cover_image/public/images/article/cover/2016/03/23/papel-de-banno-emoji.jpg?itok=rlV1ASYb" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Papel de baño</h3>
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

