<?php

// Action qui permet de charger des scripts du thème parent dans notre thème enfant //
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('commander-style', get_stylesheet_directory_uri() . './css/commander.css');
	wp_enqueue_style('header-style', get_stylesheet_directory_uri() . './css/header.css');
	wp_enqueue_style('accueil-style', get_stylesheet_directory_uri() . './css/accueil.css');
	wp_enqueue_style('nous-rencontrer-style', get_stylesheet_directory_uri() . './css/nous-rencontrer.css');
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap' ); 
}

// Action qui empeche le plugin "Contact Form 7" d'ajouter automatiquement des balises paragraphes supplémentaires. //
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 

// Action qui permet de rajouter un logo personnalisé au site //
add_theme_support( 'custom-logo' ); 
function themename_custom_logo_setup() 
{
	$defaults = array( 
	'height'      => 100, 
	'width'       => 400, 
	'flex-height' => true, 
	'flex-width'  => true, 
	'header-text' => array( 'site-title', 'site-description' ), ); 
	add_theme_support( 'custom-logo', $defaults ); 
} 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' ); 

// Action qui permet d'ajouter une classe personnalisée au body d'une page//
	function custom_body_class( $classes ) {
		if ( is_singular() ) {
			global $post;
			$classes[] = 'page-' . sanitize_title( $post->post_title );
		}
		return $classes;
	}
	add_filter( 'body_class', 'custom_body_class' );


// Hook lien d'administration //
function add_admin_link_to_menu($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary_menu') {
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        
        // Convertir la chaîne d'éléments en tableau
        $items_array = explode('</li>', $items);
        
        // Insérer le lien d'administration à la deuxième position
        array_splice($items_array, 1, 0, $admin_link);
        
        // Rejoindre les éléments du tableau en une seule chaîne
        $items = implode('</li>', $items_array);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);