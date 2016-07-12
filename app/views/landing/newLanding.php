<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Landing Alzfinder</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="Mauricio Cortes">

    <link href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl; ?>/css/style.css" rel="stylesheet">

    <!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row a">
		<div class="col-md-3">
		</div>
		<div class="col-md-3">
			<img class="logo" alt="logo de compañia" src="./img/logotr.png">
			<h1 class="letra">
				PROTEJA SU FAMILIAR,
			</h1>
			<h3 class="letra">
				TE AYUDAMOS.
			</h3>
			<br>
			<br>
			<br>
			<p class="letra">
			GEOLOCALIZALO <strong>EN VIVO</strong> DESDE TU SMARTHPHONE.
			Y VIVE SIN PREOCUPACIONES.
			<br>
			<br>
			<br>
		</div>
		<div class="col-md-3" align="center">
			<h1 style = font-family:impact;>VE NUESTRO <br> VIDEO PROMOCIONAL</h1>
			<video width="320" height="240" controls>
				<source src="<?php echo $baseUrl; ?>/video/promocion.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<br>
			<br>
			<br>
			<p class="letra"> Suscribete y recibiras gratis la app
			<!-- <object type="text/html" data="<?php echo $baseUrl; ?>/login/index.html" width="100%" height="400"></object> -->
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<form class="form-horizontal" method="post" action="">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nombre</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Ingresa tu nombre"/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Teléfono</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fono" id="fono"  placeholder="Ingresa tu Teléfono"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mail" id="mail"  placeholder="Ingresa tu email"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button id="btn-contacto" type="submit" class="btn btn-primary btn-lg btn-block login-button">Aprovechar esta oportunidad</button>
						</div>
					</form>
					<div id="contacto-msg">
						
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row b">
	<br>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Manito arriba" src="./img/tumb_up.png">
						<div class="caption">
							<h4>
								Mejora tu calidad de vida
							</h4>
							<p>
								Te ayudará a superar el dificil momento que estas pasando.
							</p>
<!-- 							<p>
								<a class="btn btn-primary" href="#">Mas informacion</a>
							</p> -->
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="E-mail" src="./img/mail.png">
						<div class="caption">
							<h4>
								Recibe mensajes de texto en tu celular
							</h4>
							<p>
								Cada vez que la aplicación detecte algo inusual, te enviará un sms.
							</p>
<!-- 							<p>
								<a class="btn btn-primary" href="#">Mas informacion</a>
							</p> -->
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Google maps" src="./img/maps.png">
						<div class="caption">
							<h4>
								Geolocaliza a tu familiar en tiempo real
							</h4>
							<p>
								Gracias a la tecnologia gps, monitorea constantemente la actividad de tu familiar.
							</p>
<!-- 							<p>
								<a class="btn btn-primary" href="#">Mas informacion</a>
							</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Ficha tecnica" src="./img/ficha.png">
						<div class="caption">
							<h4>
								Anota la hora de sus medicamentos
							</h4>
							<p>
								Anota todos los datos importantes, como la hora de sus medicamentos.
							</p>
<!-- 							<p>
								<a class="btn btn-primary" href="#">Mas informacion</a>
							</p> -->
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Android IOS" src="./img/multiplat.png">
						<div class="caption">
							<h4>
								Proximamente disponible para android e IOS.
							</h4>
							<p>
								Multiplataforma.
							</p>
<!-- 							<p>
								<a class="btn btn-primary" href="#">Mas informacion</a>
							</p> -->
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Ampolleta" src="./img/ideas.png">
						<div class="caption">
							<h4>
								Sugerencias o consultas
							</h4>
							<p>
								Comunicate con nosotros y te respondemos a la brevedad.
							</p>
<!-- 							<p>
								<a class="btn btn-primary" href="#">Mas informacion</a>
							</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row c" align="center">
		<div class="col-md-12">
			<!-- <br>
			<br>
			<br>
			<p id="demo">Presiona el boton para obtener tu poscisión</p>

			<button onclick="getLocation()">Quiero intentalo</button>

			<div id="mapholder"></div> -->

		<script>
		var x = document.getElementById("demo");

		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition, showError);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function showPosition(position) {
			var latlon = position.coords.latitude + "," + position.coords.longitude;

			var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
			+latlon+"&zoom=14&size=400x300&sensor=false";
			document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
		}
		
		function showError(error) {
			switch(error.code) {
				case error.PERMISSION_DENIED:
					x.innerHTML = "User denied the request for Geolocation."
					break;
				case error.POSITION_UNAVAILABLE:
					x.innerHTML = "Location information is unavailable."
					break;
				case error.TIMEOUT:
					x.innerHTML = "The request to get user location timed out."
					break;
				case error.UNKNOWN_ERROR:
					x.innerHTML = "An unknown error occurred."
					break;
			}
		}
		</script>
			<br>
			<br>
			<a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
			<a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
			<br>
			<br>
			<address>
				 Copyright © 2016 ALZHFINDER. | Diseñado por Mauricio Cortés. <!--<<br> abbr title="email">Correo electronico:</abbr> yehem@gmail.com-->
			</address>
		</div>
	</div>
		
	</div>
</div>
	<script>
		var baseUrl = "<?php echo $baseUrl; ?>";
	</script>
    <script src="<?php echo $baseUrl; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/js/scripts.js"></script>
  </body>
</html>