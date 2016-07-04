	<section id="login" class="container">
		<div class="col-xs-12 col-sm-4 col-sm-offset-4">
			<form action="" method="POST" class="form-horizontal" role="form">
					<div class="form-group">
						<legend>Login</legend>
					</div>
					<div class="form-group">
						<input type="text" name="usuario" id="usuario" class="form-control" required="required" placeholder="Ingrese su Usuario">
					</div>
					<div class="form-group">
						<input type="password" name="pass" id="pass" class="form-control" required="required" placeholder="Ingrese su contraseña">
					</div>

					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<button id="btn-login" type="submit" class="btn btn-primary btn-block">Ingresar</button>
						</div>
					</div>
			</form>
			<div id="msg-login">
				
			</div>
	        <!-- <h1>404, Página no encontrada</h1>
	        <p>La página que estás buscando no existe, o ha ocurrido un error.</p>
	        <a class="btn btn-success" href="<?php echo $baseUrl; ?>">Vuelve al inicio</a> -->
		</div>
    </section><!--/#error-->