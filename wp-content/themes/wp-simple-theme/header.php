<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/css/bootstrap.min.css">
	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/style.css" />

	<title>Hello, world!</title>
</head>

<body>
	<!-- Navbar -->
	<div class="container-fluid bg-dark fixed-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
			<a class="navbar-brand" href="#">
				<div class="logo">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
						
					} ?>
					<div class="logo-title">Bootstrap</div>
				</div> 
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php wp_nav_menu(array(
				'theme_location' => 'principal',
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'navbarSupportedContent',
				'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
				'menu_class' => 'nav-item'
			)); ?>
		</nav>
	</div>
	<!-- Fin Navbar -->

	<!-- Suscribir -->
	<div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center mt-4">
		<div class="text-center text-white mt-4">
			<h1 class="display-5 mt-4 mb-4">Suscribite al Newsletter</h1>
		</div>
		<form action="" class="form form-inline flex-column flex-sm-row">
			<div class="form-group mr-sm-3">
				<input type="text" placeholder="Nombre" class="form-control">
			</div>
			<div class="form-group mr-sm-3">
				<input type="text" placeholder="Email" class="form-control">
			</div>

			<input type="submit" value="Enviar" class="btn btn-primary">
		</form>
	</div>
	<!-- Fin Suscribir -->