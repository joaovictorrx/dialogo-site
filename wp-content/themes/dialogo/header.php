<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>

	<!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favico.png"><![endif]-->
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favico.png">
	
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
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-bar"
				aria-controls="navigation-bar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button> -->
			<button class="d-lg-none hamburger hamburger--spin" type="button" data-toggle="collapse" data-target="#navigation-bar"
				aria-controls="navigation-bar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<div class="collapse navbar-collapse flex-column" id="navigation-bar">
				<ul class="navbar-nav ml-auto mb-3 d-none d-lg-flex">
					<li class="nav-item mr-2">
						<a class="nav-link btn-social rounded-circle bg-light-grey text-white text-center" target="_blank" href="https://www.instagram.com/dialogocomunicacao/"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-social rounded-circle bg-light-grey text-white text-center" target="_blank" href="https://www.facebook.com/DialogoComunicacaoIntegrada/"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto flex-lg-row menu-row">
					<li class="nav-item ml-5">
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