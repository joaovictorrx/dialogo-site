<?php get_header();?>

<section id="header" class="pt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img id="rec-1" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-rec-1.svg" alt="">
				<img id="rec-2" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-rec-2.svg" alt="">
				<img id="plus" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-plus.svg" alt="">
				<img id="plus-lg" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-plus-lg.svg" alt="">
				<img id="line-vertical" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-line-vertical.svg" alt="">
				<img id="line-horizontal" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt="">
				<div id="header-carousel" class="owl-carousel owl-theme">
					<div class="item">
						<div class="row">
							<div class="col-4 d-flex">
								<div class="header-text align-self-center">
									<h2 class="mb-5">Temos DNA pernambucano, e a energia multicultural da nossa terra está em tudo o que fazemos.</h2>
									<a class="text-uppercase position-relative" href="#">saiba mais<img class="position-absolute line-horizontal-btn" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt=""></a>
								</div>
							</div>
							<div class="col-8 pr-5">
								<img class="ml-auto banner-img" src="https://placeimg.com/736/514/arch" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-4 d-flex">
								<div class="header-text align-self-center">
									<h2 class="mb-5">Temos DNA pernambucano, e a energia multicultural da nossa terra está em tudo o que fazemos.</h2>
									<a class="text-uppercase position-relative" href="#">saiba mais<img class="position-absolute line-horizontal-btn" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt=""></a>
								</div>
							</div>
							<div class="col-8 pr-5">
								<img class="ml-auto banner-img" src="https://placeimg.com/736/514/arch" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-4 d-flex">
								<div class="header-text align-self-center">
									<h2 class="mb-5">Temos DNA pernambucano, e a energia multicultural da nossa terra está em tudo o que fazemos.</h2>
									<a class="text-uppercase position-relative" href="#">saiba mais<img class="position-absolute line-horizontal-btn" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt=""></a>
								</div>
							</div>
							<div class="col-8 pr-5">
								<img class="ml-auto banner-img" src="https://placeimg.com/736/514/arch" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="py-5">
	<div class="container position-relative">
		<img id="map" class="position-absolute bg-about" src="<?php bloginfo('template_url');?>/img/gph-pernambuco-map.svg" alt="">
		<img id="negative-plus" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-negative-plus.svg" alt="">
		<img id="map-horizontal-line" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt="">
		<img id="horizontal-line-sm" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal-sm.svg" alt="">

		<div class="row mt-5 mb-4">
			<div class="col-12 text-center">
				<h2 class="text-uppercase">quem somos</h2>
			</div>
		</div>

		<div class="row d-flex justify-content-center bg-spacer">
			<div class="col-8">
				<div class="about-text">
					<?php 
						$post = get_post(9);
						if( $post ): 
							setup_postdata( $post );?>
							<?php the_field('text'); ?>
							<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="text-center position-relative">
					<button id="btn-read-more" class="btn-read-more text-uppercase btn btn-link">ler mais</button>
					<img id="horizontal-line-xs" class="position-absolute" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal-xs.svg" alt="">
				</div>
			</div>
		</div>
	</div>
	<section id="services" class="py-5 position-relative">
		<div class="container">
			<div class="row mt-5 mb-4">
				<div class="col-12 text-center">
					<h2 class="text-uppercase">Serviços</h2>
				</div>
			</div>

			<div class="row d-flex justify-content-center">
				<div class="col-4 text-center">
					<img src="<?php bloginfo('template_url');?>/img/ic-service.svg" alt="">
					<p>Consultoria em comunicação</p>
				</div>
				<!-- <div class="col-12">
					<p>
					<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
					</p>
					<div class="row">
						<div class="col">
							<div class="collapse multi-collapse" id="multiCollapseExample1">
							<div class="card card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
							</div>
							</div>
						</div>
						<div class="col">
							<div class="collapse multi-collapse" id="multiCollapseExample2">
							<div class="card card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
							</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
</section>

<section id="portifolio">
</section>

<section id="clients">
</section>

<?php get_footer();?>