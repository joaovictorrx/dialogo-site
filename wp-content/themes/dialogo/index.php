<?php get_header();?>

<!--Navbar -->
<nav class="navbar sticky-top navbar-expand-lg bg-white pb-2">
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
				<li class="nav-item active">
					<a class="nav-link" href="#">Quem Somos
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item ml-5">
					<a class="nav-link" href="#">Serviços</a>
				</li>
				<li class="nav-item ml-5">
					<a class="nav-link" href="#">Portifólio</a>
				</li>
				<li class="nav-item ml-5">
					<a class="nav-link" href="#">Clientes</a>
				</li>
				<li class="nav-item ml-5">
					<a class="nav-link" href="#">Contato</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--/.Navbar -->

<section id="header" class="pt-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img id="rec-1" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-rec-1.svg" alt="">
				<img id="rec-2" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-rec-2.svg" alt="">
				<div id="header-carousel" class="owl-carousel owl-theme">
					<div class="item">
						<div class="row">
							<div class="col-4 d-flex">
								<div class="header-text align-self-center">
									<h2>Temos DNA pernambucano, e a energia multicultural da nossa terra está em tudo o que fazemos.</h2>
									<a class="text-uppercase" href="#">saiba mais</a>
								</div>
							</div>
							<div class="col-8 pr-5">
								<img class="ml-auto" src="https://placeimg.com/736/514/arch" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-4 d-flex">
								<div class="header-text align-self-center">
									<h2>Temos DNA pernambucano, e a energia multicultural da nossa terra está em tudo o que fazemos.</h2>
									<a class="text-uppercase" href="#">saiba mais</a>
								</div>
							</div>
							<div class="col-8 pr-5">
								<img class="ml-auto" src="https://placeimg.com/736/514/arch" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-4 d-flex">
								<div class="header-text align-self-center">
									<h2>Temos DNA pernambucano, e a energia multicultural da nossa terra está em tudo o que fazemos.</h2>
									<a class="text-uppercase" href="#">saiba mais</a>
								</div>
							</div>
							<div class="col-8 pr-5">
								<img class="ml-auto" src="https://placeimg.com/736/514/arch" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>