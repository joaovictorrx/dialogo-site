<div class="card bg-dark text-white">
	<img src="<?= get_field('thumbnail')['url'] ?>" class="card-img" alt="<?php the_title() ?>">
<div class="card-img-overlay d-flex justify-content-center align-items-center">
	<div class="text-center">
		<h5 class="card-title title mb-0"><?php the_title() ?></h5>
		<p class="card-text">(<?php the_field('subtitle') ?>)</p>
		<a href="<?php the_field('link') ?>" class="card-text stretched-link"><?php the_field('link') ?></a>
	</div>
</div>
</div>