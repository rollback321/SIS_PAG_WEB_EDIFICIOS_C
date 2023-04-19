<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>//plug_login/css/style.css">
	
	<script >  js_base_url = "<?= base_url() ?>";</script>

	</head>
	<body class="img js-fullheight" style="background-image: url(<?= base_url() ?>plug_login/images/fondo.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 id= "id_titulo" class="heading-section">ADMINISTRACIÓN PÁGINA WEB EDIFICIOS CHOLETS</h2>

				</div>
			</div>
		<div class="login-html">
					<!-- <div class="row justify-content-center">
								<div class="col-md-6 col-lg-4">
										<div class="login-wrap p-0"> -->
											<h3 class="mb-4 text-center text-white font-weight-bold">INICIAR SESION</h3>
											<label id= "id_alerta_error_usuario_nivel1" class="text-danger ">Error, Verifique su usuario y contraseña</label>
											<form method = "POST" id = "form_register_login" class="signin-form">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Usuario" name = "user" required>
														</div>
														<div class="form-group">
															<input id="password-field" type="password" class="form-control" placeholder="contraseña" name = "pass" required>
															<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
														</div>
														<div class="form-group">
															<button type="submit" class="form-control btn btn-primary submit px-3">Verificar</button>
														</div>
											
											</form>
											<p class="w-100 text-center">&mdash; Visita la pagina web &mdash;</p>
											<div class="social d-flex text-center">
												<a href="<?= route_to('inicio') ?>" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Ir a página Web</a>
											</div>
											
										<!-- <div>
								 </div>
					 </div> -->
			</div>
		</div>
	</section>

  <script src="<?= base_url() ?>/plug_login/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>/plug_login/js/popper.js"></script>
  <script src="<?= base_url() ?>/plug_login/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/plug_login/js/main.js"></script>
  <script src="<?= base_url() ?>/plug_login/js/propio.js"></script>




	</body>
</html>

