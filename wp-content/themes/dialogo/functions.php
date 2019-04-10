<?php
add_theme_support('post-thumbnails');

/* POST TYPES */
function register_my_post_types()
{
    register_post_type('about',
    array(
        'labels' => array(
            'name'          => __('Quem Somos'),
            'singular_name' => __('Quem Somos'),
            'edit_item'     => __('Editar Quem Somos'),
        ),
        'public'            => true,
        'show_in_menu'      => 'false',
        'supports'          => array(''),
    ));

    register_post_type('banners',
    array(
        'labels' => array(
            'name'          => __('Banners'),
            'singular_name' => __('Banner'),
            'add_new_item'  => __('Adicionar Novo Banner'),
            'edit_item'     => __('Editar Banner'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-images-alt',
        'supports'          => array('title'),
    ));

    register_post_type('portifolio',
    array(
        'labels' => array(
            'name'          => __('Portifólio'),
            'singular_name' => __('Portifólio'),
            'add_new_item'  => __('Adicionar Novo Item ao Portifólio'),
            'edit_item'     => __('Editar item do Portifólio'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-star-filled',
        'supports'          => array('title'),
    ));
    
    register_post_type('services',
    array(
        'labels' => array(
            'name'          => __('Serviços'),
            'singular_name' => __('Serviço'),
            'add_new_item'  => __('Adicionar Novo Serviço'),
            'edit_item'     => __('Editar Serviço'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-clipboard',
        'supports'          => array('title'),
    ));
    
    register_post_type('clients',
    array(
        'labels' => array(
            'name'          => __('Clientes'),
            'singular_name' => __('Cliente'),
            'add_new_item'  => __('Adicionar Novo Cliente'),
            'edit_item'     => __('Editar Cliente'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-groups',
        'supports'          => array('title'),
    ));
} 
add_action('init', 'register_my_post_types');

/* CUSTOM FUNCTIONS */
/* 
function pagination()
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer
  
    return paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __("<i class='fas fa-caret-left' style='color:#aaaaaa;'></i>"),
        'next_text' => __("<i class='fas fa-caret-right' style='color:#aaaaaa;'></i>")
    ));
    
} */

function misha_my_load_more_scripts() {
 
    //global $wp_query;
    $args = array( 'posts_per_page' => 9,
        'post_type'=> 'portifolio' );
    $wp_query = new WP_Query($args);
 
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			//get_template_part( 'template-parts/post/content', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
            //the_title();
            get_template_part('template-part/portifolio-card');
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function add_custom_menu_position() {
    
    add_menu_page('about', 'Quem Somos', 'edit_posts', admin_url('post.php?post=9&action=edit'), null ,'dashicons-info', 25); 
}
add_action('admin_menu', 'add_custom_menu_position');

function remove_menu () 
{
    remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page('edit.php');
} 
add_action('admin_menu', 'remove_menu');