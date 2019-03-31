<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-3 text-center d-flex">
                <img class="img-fluid align-self-center" src="<?php bloginfo('template_url');?>/img/lg-dialogo-white.png" alt="">
            </div>
            <div class="col-4 d-flex">
                <div class="align-self-center">
                    <p class="mb-0">Rua do Marechal Rondon, nº 146. Casa Forte, Recife-PE. CEP: 52061-050</p>
                    <p class="mb-0">Fone: (81) 3426-2263</p>
                    <p class="mb-0">E-mail: diretoria@faladialogo.com.br</p>
                </div>
            </div>
            <div class="col-5">
            <?= do_shortcode('[forminator_form id="12"]') ?>
            </div>
        </div>
    </div>
</footer>

<!-- JQuery -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/bootstrap.min.js"></script>
<!-- jquery mask -->
<!-- <script src="<?php bloginfo('template_url');?>/js/vendor/jquery-mask/jquery.mask.min.js"></script> -->
<!-- owl.carousel -->
<script src="<?php bloginfo('template_url');?>/js/vendor/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<!-- app js -->
<script src="<?php bloginfo('template_url');?>/js/app.min.js"></script>

<?php wp_footer();?>
</body>
</html>