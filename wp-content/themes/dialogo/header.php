<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- app styles-->
	<link href="<?php bloginfo('template_url'); ?>/css/app.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!--Navbar -->
	<nav id="top-menu-nav" class="navbar sticky-top navbar-expand-lg bg-white pb-2">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img class="img-fluid" src="<?php bloginfo('template_url');?>/img/lg-dialogo.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
				aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse flex-column" id="navbarSupportedContent-333">
				<ul class="navbar-nav ml-auto mb-3">
					<li class="nav-item mr-2">
						<a class="nav-link btn-social rounded-circle bg-light-grey text-white text-center" href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-social rounded-circle bg-light-grey text-white text-center" href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto flex-row menu-row">
					<li class="nav-item">
						<a class="nav-link smooth-scroll" href="#about">Quem Somos
						</a>
					</li>
					<li class="nav-item ml-5">
						<a class="nav-link smooth-scroll" href="#services">Serviços</a>
					</li>
					<li class="nav-item ml-5">
						<a class="nav-link smooth-scroll" href="#portifolio">Portifólio</a>
					</li>
					<li class="nav-item ml-5">
						<a class="nav-link smooth-scroll" href="#clients">Clientes</a>
					</li>
					<li class="nav-item ml-5">
						<a class="nav-link smooth-scroll" href="#contact">Contato</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--/.Navbar -->