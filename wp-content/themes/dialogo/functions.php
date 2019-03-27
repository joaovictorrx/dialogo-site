<?php
add_theme_support('post-thumbnails');

/* POST TYPES */
function register_my_post_types()
{
    /* register_post_type('testimonials',
    array(
        'labels' => array(
            'name'          => __('Depoimentos'),
            'singular_name' => __('Depoimento'),
            'add_new_item'  => __('Adicionar Novo Depoimento'),
            'edit_item'     => __('Editar Depoimento'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-format-quote',
        'supports'          => array('title'),
    ));
    
    register_post_type('partners',
    array(
        'labels' => array(
            'name'          => __('Parceiros'),
            'singular_name' => __('Parceiro'),
            'add_new_item'  => __('Adicionar Novo Parceiro'),
            'edit_item'     => __('Editar Parceiro'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-groups',
        'supports'          => array('title'),
    )); */
} 
add_action('init', 'register_my_post_types');

/* CUSTOM FUNCTIONS */

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
    
}