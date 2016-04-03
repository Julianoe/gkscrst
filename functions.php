<?php

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


//ajout d'un menu personnalisable
function register_my_menu() {
  register_nav_menu('menu-princial',__( 'Menu principal perso' ));
}
add_action( 'init', 'register_my_menu' );



//ajouter une meilleure gestion des div vidéos en les encadrant d'une div
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}?>
