@extends('donador.sidebar')
@section('content')

<div id="fh5co-main">

	<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
		
		<div class="row">
			<div class="col-md-4">
				<h1>Ponte en contacto con nosotros</h1>
			</div>
		</div>
		<form action="">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Teléfono">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-md" value="Enviar mensaje">
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</form>
	</div>

</div>