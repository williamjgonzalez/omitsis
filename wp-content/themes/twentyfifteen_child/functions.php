<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://developer.wordpress.org/plugins/}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
add_action( 'init', 'productos_cpt_create' );


function productos_cpt_create() {
	$labels = array(
		'name' => __( 'productos'), 
        'singular_name' => __( 'producto' ),
        'add_new' => _x( 'Añadir nuevo', 'producto' ),
        'add_new_item' => __( 'Añadir nuevo producto'),
        'edit_item' => __( 'Editar producto' ),
        'new_item' => __( 'Nuevo producto' ),
        'view_item' => __( 'Ver producto' ),
        'search_items' => __( 'Buscar productos' ),
        'not_found' =>  __( 'No se ha encontrado ningún producto' ),
        'not_found_in_trash' => __( 'No se han encontrado productos en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array(
        'label' => __('productos'),
        'labels' => $labels,
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',        
        'hierarchical' => false,
        'rewrite' => array( "slug" => "productos" , 'with_front' => true),
        'supports'=> array('title','editor','thumbnail','excerpt') ,
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'productos_category'),
        'menu_icon' => 'dashicons-admin-appearance',
        'map_meta_cap' => true
        );
 
    register_post_type( 'productos', $args ); /* Registramos y a funcionar */
