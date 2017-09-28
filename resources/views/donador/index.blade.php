@extends('donador.sidebar')
@section('content')

	<div id="fh5co-main">

		<div class="fh5co-narrow-content">

			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Urgencia de donaciones</h2>
			<p>Da click en los elementos que planeas donar para filtrar los centros de acopio que puedan recibir tu donativo</p>

			<h3> Urgencia Alta </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-high">
						<img src="https://grist.files.wordpress.com/2014/08/bottled-water.jpg?w=1024&h=576&crop=1" class="urgency-high img-responsive col-xs-12">
						<h3 class="fh5co-work-title">Agua Embotellada</h3>
						<button class="btn btn-info"><i class="fa fa-info-circle"></i></button>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-high">
						<img src="https://comohacerpara.com/imgl/18109-recetas-atun-lata-comidas_l.jpg" class="urgency-high img-responsive  col-xs-12" height="1024" width="576">
						<h3 class="fh5co-work-title">Enlatados</h3>
						<button class="btn btn-info"><i class="fa fa-info-circle"></i></button>
					</div>
				
			</div>

			<h3> Urgencia Media </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-med">
						<img src="https://static.websguru.com.ar/var/m_8/84/844/28347/466665-carlos-parodi-y-cia-s-a-material-para-construccion.jpg" class="urgency-med img-responsive col-xs-12">
						<h3 class="fh5co-work-title">Material de Construcción</h3>
						<button class="btn btn-info"><i class="fa fa-info-circle"></i></button>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-med">
						<img src="https://losmejores.top/imagenes/los-mejores-panales.jpg" class="urgency-med img-responsive col-xs-12">
						<h3 class="fh5co-work-title">Pañales</h3>
						<button class="btn btn-info"><i class="fa fa-info-circle"></i></button>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-med">
						<img src="https://queretaro.quadratin.com.mx/www/wp-content/uploads/2017/07/COMIDA-MASCOTAS.jpg" class="urgency-med img-responsive col-xs-12">
						<h3 class="fh5co-work-title">Alimento para mascotas</h3>
						<button class="btn btn-info"><i class="fa fa-info-circle"></i></button>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-med">
						<img src="http://2.bp.blogspot.com/-Iv3_9IBgyiw/VPcw74UOZNI/AAAAAAAADlE/-7PP6_WIdTQ/s1600/ropa-camisetas-colores.jpg" class="urgency-med img-responsive col-xs-12">
						<h3 class="fh5co-work-title">Ropa para hombre</h3>
						<button class="btn btn-info"><i class="fa fa-info-circle"></i></button>
					</div>
				
			</div>

			<h3> Urgencia Baja </h3>

			<div class="row animate-box" data-animate-effect="fadeInLeft">
				
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item urgency-low">
						<img src="http://www.telemundo.com/sites/nbcutelemundo/files/styles/article_cover_image/public/images/article/cover/2016/03/23/papel-de-banno-emoji.jpg?itok=rlV1ASYb" class="urgency-low img-responsive col-xs-12">
						<h3 class="fh5co-work-title">Papel de baño</h3>
						<button class="btn btn-info"><i class="fa fa-info-circle"></i></button>
					</div>
				
			</div>

		</div>

		<div class="col-xs-12">
			<div class="col-xs-12">
				<h2>Centros de acopio que pueden recibir tu donativo</h2>
			</div>
			<div class="col-md-9">
				<div id="map"></div>	
			</div>
			<div class="col-md-3">
				<h1>Centro de acopio</h1>
				<p id="infowindow">Da click en un centro de acopio para conocer m&aacute;s.</p>
			</div>
		</div>
	</div>

@endsection

@push('scripts')
	<script src="{{asset('js/donador.js')}}"></script>
@endpush
