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
  // wp_enqueue_style( 'geeks-curiosity', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'geeks_curiosity_scripts' );

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}



//ajouter une meilleure gestion des div vidéos en les encadrant d'une div
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}

// personnalisation of the login screen
function geeks_curiosity_login() {
  wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/admin.css' );
}
add_action( 'login_enqueue_scripts', 'geeks_curiosity_login' );

//adding support for video post format
function geeks_curiosity_use_post_format(){
  add_theme_support( 'post-formats', array( 'video' ) );
}
add_action( 'after_setup_theme', 'geeks_curiosity_use_post_format' );

function geeks_curiosity_opengraph() {
    global $post;

    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
          $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
        }
        if($excerpt = $post->post_excerpt) {
          $excerpt = strip_tags($post->post_excerpt);
          $excerpt = str_replace("", "'", $excerpt);
        } else {
          $excerpt = get_bloginfo('description');
        }
        ?>
    <meta name="description" content="<?php echo $excerpt; ?>" />
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>

<?php
    } else {

      if(has_post_thumbnail($post->ID)) {
        $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
      }
      if($excerpt = $post->post_excerpt) {
        $excerpt = strip_tags($post->post_excerpt);
        $excerpt = str_replace("", "'", $excerpt);
      } else {
        $excerpt = get_bloginfo('description');
      }
      ?>
    <meta name="description" content="<?php echo $excerpt; ?>" />
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>

<?php
    }
}
add_action('wp_head', 'geeks_curiosity_opengraph', 5);



?>
