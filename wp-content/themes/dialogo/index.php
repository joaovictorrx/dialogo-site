<?php get_header();?>

<!--Navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light shadow">
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
			<ul class="navbar-nav ml-auto flex-row">
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

<?php get_footer();?>