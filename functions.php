<?php
if ( function_exists('register_sidebar') )
register_sidebar(); //entrer en param�tre le nombre de colonnes de la sidebar

add_theme_support( 'post-thumbnails' ); //ajout de la fonction qui permet l'utilisation des images � la Une
set_post_thumbnail_size( 680, 200, true ); // Miniatures de l'accueil
add_image_size( 'miniature-archives', 680, 200 ); // Miniatures des archives
//add_theme_support( 'post-thumbnails', array( 'post' ) ); // Ajouter les images � la une sur les articles uniquement


function removeCategoryListRel($output){//permet d'ajouter � worpress une fonction qui rend valide la cr�altion de lien aupr�s du W3C (suppression de Rel attribut)
  $output = str_replace(' rel="category"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'removeCategoryListRel');
add_filter('the_category', 'removeCategoryListRel' );

/*
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
 'primary-menu' => __( 'Menu Principal', 'ewdrav' ),
) );*/

register_sidebar( $args );
$args = array(
	'name'          => __( 'Sidebar principale', 'theme_text_domain' ),
	'id'            => 'unique-sidebar-id',
	'description'   => 'Julien',
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );


?>
