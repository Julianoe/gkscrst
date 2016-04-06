<?php

add_theme_support( 'post-thumbnails' ); //ajout de la fonction qui permet l'utilisation des images � la Une
set_post_thumbnail_size( 680, 200, true ); // Miniatures de l'accueil
add_image_size( 'miniature-archives', 680, 200 ); // Miniatures des archives
//add_theme_support( 'post-thumbnails', array( 'post' ) ); // Ajouter les images � la une sur les articles uniquement

//permet d'ajouter à worpress une fonction qui rend valide la cr�altion de lien aupr�s du W3C (suppression de Rel attribut)
function removeCategoryListRel($output){
  $output = str_replace(' rel="category"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'removeCategoryListRel');
add_filter('the_category', 'removeCategoryListRel' );


//ajout d'un menu personnalisable
function register_my_menu() {
  register_nav_menu('menu-princial',__( 'Menu principal perso' ));
}
add_action( 'init', 'register_my_menu' );


//ajout d'une sidebar
function register_my_sidebar() {
  register_sidebar( array(
  	'name'          => __( 'Sidebar', 'Geeks' ),
  	'id'            => 'sidebar',
  	'description'   => '',
    'class'         => '',
  	'before_widget' => '',
  	'after_widget'  => '',
  	'before_title'  => '<h2 class="widgettitle">',
  	'after_title'   => '</h2>'
  ));
}
add_action( 'widgets_init', 'register_my_sidebar' );


// adding the styles and scripts
function geeks_curiosity_scripts() {
	// Add Normaliz
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '3.0.2' );
  // Add Skeleton
	wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton.css', array(), '2.0.4' );
	// Theme stylesheet.
	wp_enqueue_style( 'geeks-curiosity', get_stylesheet_uri() );
  //enqueue Dashicons for frontend use
  wp_enqueue_style( 'geeks-curiosity', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'geeks_curiosity_scripts' );

//ajouter une meilleure gestion des div vidéos en les encadrant d'une div
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}?>
