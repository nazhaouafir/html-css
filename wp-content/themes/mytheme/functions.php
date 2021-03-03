<?php
require_once(dirname(__File__).'./theme-config.php');
function my_first_theme_setup(){
    add_theme_support(" post-thumbnails ", arra("post", "page"));
    add_image_size("80x80",80,80, true);
}

add_action("after_theme_setup", "my_first_theme_setup");

register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
    ) );
    

add_theme_support( 'post-thumbnails' );
/*
widget area
*/
function register_custom_widget_area() {
    register_sidebar(
    array(
    'id' => 'new-widget-area',
    'name' => esc_html__( 'My new widget area', 'theme-domain' ),
    'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
    )
    );
    }
    add_action( 'widgets_init', 'register_custom_widget_area' );
/* end  widget area  */
function cptui_register_my_cpts_portfolio() {

	/**
	 * Post Type: Portfolios.
	 */

	$labels = [
		"name" => __( "Portfolios", "custom-post-type-ui" ),
		"singular_name" => __( "Portfolio", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Portfolios", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts_portfolio' );






?>