<div class="col-12 col-md-6 col-lg-4 px-0">
    <div class="card text-white d-none d-lg-block">
        <img src="<?= get_field('thumbnail')['sizes']['large'] ?>" class="card-img" alt="<?php the_title() ?>">
        <div class="card-img-overlay d-flex justify-content-center align-items-center">
            <div class="w-100 text-center">
                <h5 class="card-title title mb-0"><?php the_title() ?></h5>
                <p class="card-text">(<?php the_field('subtitle') ?>)</p>
                <a target="_blank" href="<?php the_field('link') ?>" class="card-text stretched-link">Saiba Mais</a>
            </div>
        </div>
    </div>

    <div class="card card-mob text-white mb-5 px-1 d-block d-lg-none">
        <div class="card-body">
            <h5 class="card-title title mb-0"><?php the_title() ?></h5>
            <p class="card-text mb-2">(<?php the_field('subtitle') ?>)</p>
            <div class="card-text">
                <img src="<?= get_field('thumbnail')['sizes']['medium_large'] ?>" class="img-fluid" alt="<?php the_title() ?>">
            </div>
            <div class="card-text text-right">
                <a target="_blank" href="<?php the_field('link') ?>"
                class="card-text text-uppercase stretched-link">Saiba Mais</a>
            </div>
        </div>
    </div>
</div>