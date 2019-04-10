<?php get_header();?>

<section id="header" class="pt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12 px-4">
				<img id="rec-1" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-rec-1.svg" alt="">
				<img id="rec-2" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-rec-2.svg" alt="">
				<img id="plus" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-plus.svg" alt="">
				<img id="plus-lg" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-plus-lg.svg" alt="">
				<img id="line-vertical" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-line-vertical.svg" alt="">
				<img id="line-horizontal" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt="">
				<div id="header-carousel" class="owl-carousel owl-theme">
					<?php 
						$args = array(
							'post_type'=> 'banners',
							'posts_per_page' => 3 );
						$wp_query = new WP_Query($args);
					?>
					<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<div class="item">
							<div class="row">
								<div class="col-12 col-lg-4 d-flex mb-4 mb-lg-0">
									<div class="header-text align-self-center">
										<h2 class="mb-5"><?php the_field('text') ?></h2>
										<a class="text-uppercase position-relative smooth-scroll" href="#about">saiba mais<img class="position-absolute line-horizontal-btn" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt=""></a>
									</div>
								</div>
								<div class="col-12 col-lg-8 pr-lg-5">
									<img class="ml-auto banner-img" src="<?= get_field('image')['url'] ?>" alt="">
								</div>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="pt-lg-5">
	<div class="container position-relative">
		<img id="map" class="position-absolute bg-about d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-pernambuco-map.svg" alt="">
		<img id="negative-plus" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-negative-plus.svg" alt="">
		<img id="map-horizontal-line" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal.svg" alt="">
		<img id="horizontal-line-sm" class="position-absolute d-none d-lg-block" src="<?php bloginfo('template_url');?>/img/gph-line-horizontal-sm.svg" alt="">

		<div class="row mt-5 mb-4">
			<div class="col-12 text-center">
				<h3 class="title text-uppercase">quem somos</h3>
			</div>
		</div>

		<div class="row d-flex justify-content-center bg-spacer">
			<div class="col-12 col-lg-8 px-4">
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
	
	<section id="services" class="pt-5 position-relative">
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="col-12 text-center">
					<h2 class="title text-uppercase">Serviços</h2>
				</div>
			</div>

			<div class="row d-flex justify-content-center">
				<?php 
					$args = array('post_type' => 'services');
					$wp_query = new WP_Query($args);
				?>
				<?php $i = 1; if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<div class="col-12 col-md-6 col-lg-4 service-card mb-5 pb-5 text-center">
						<div class="wrapper-link" data-toggle="collapse" href="#collapse<?= $i ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $i ?>">
							<img class="mb-3 img-fluid" src="<?= get_field('icon')['url'] ?>" alt="">
							<div class="wrapper mb-2 text-center mx-auto position-relative">
								<a data-toggle="collapse" href="#collapse<?= $i ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $i ?>" class="title title-sm text-primary"><?php the_title() ?></a>
							</div>
						</div>
						<div class="wrapper text-center mx-auto collapse" id="collapse<?= $i ?>">
							<?php the_field('description') ?>
						</div>
					</div>
				<?php $i++; endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</section>
</section>

<section id="portifolio" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h3 class="title text-uppercase pt-4 pb-5">Portifólio</h3>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div id="portifolio-load" class="row justify-content-center mb-3">
			<?php //do_shortcode('[ajax_load_more id="ajax-load" container_type="div" post_type="portifolio" posts_per_page="3" scroll="false" button_label="Mais projetos" button_loading_label="Carregando..."]') ?>
			<?php 
				$args = array( 'posts_per_page' => 9,
					'post_type'=> 'portifolio' );
				$wp_query = new WP_Query($args);
			?>
			<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<?php get_template_part('template-part/portifolio-card'); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<?php  if (  $wp_query->max_num_pages > 1 ): ?>
					<button class="btn btn-link btn-load-more misha_loadmore">Mais Projetos</button>
				<?php endif;wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</section>

<section id="clients" class="py-5">
	<div class="container">
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h3 class="title text-uppercase">Clientes</h3>
			</div>
		</div>

		<div class="row mt-5 mb-4">
			<div class="col-12 text-center">
				<div id="clients-carousel" class="owl-carousel owl-theme">
					<?php 
						$args = array('post_type'=> 'clients' );
						$wp_query = new WP_Query($args);
					?>
					<?php if ( $wp_query->have_posts() ) : ?>
					<?php for ($i=1; $i < $wp_query->post_count; $i++): ?>
						<div class="item mb-2">
							<div class="d-flex flex-wrap">
								<?php if($i <= $wp_query->post_count):?>
									<img class="img-fluid mb-5" src="<?= get_field('image', $wp_query->posts[$i-1]->ID)['url']; ?>" alt="<?= $wp_query->posts[$i-1]->post_title; ?>" title="<?= $wp_query->posts[$i-1]->post_title; ?>">
								<?php endif;?>

								<?php if(isset($wp_query->posts[$i])):?> 
									<img class="img-fluid" src="<?= get_field('image', $wp_query->posts[$i]->ID)['url']; ?>" alt="<?= $wp_query->posts[$i]->post_title; ?>" title="<?= $wp_query->posts[$i]->post_title; ?>">
								<?php endif;?>
							</div>	
						</div>
					<?php $i++; endfor; wp_reset_postdata(); endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>