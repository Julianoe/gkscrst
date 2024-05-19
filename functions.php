<?php

add_theme_support( 'post-thumbnails' ); //ajout de la fonction qui permet l'utilisation des images � la Une
set_post_thumbnail_size( 680, 200, true ); // Miniatures de l'accueil
add_image_size( 'miniature-archives', 680, 200 ); // Miniatures des archives
//add_theme_support( 'post-thumbnails', array( 'post' ) ); // Ajouter les images � la une sur les articles uniquement
add_image_size( 'twitter-card', 800, 418 );
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
	wp_enqueue_style( 'geeks-curiosity', get_stylesheet_uri(), '', wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'geeks_curiosity_scripts' );

// Remove dashicons in frontend for unauthenticated users
add_action( 'wp_enqueue_scripts', 'bs_dequeue_dashicons' );
function bs_dequeue_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}

/**
 * Disable the emoji's
 */
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
 }
 add_action( 'init', 'disable_emojis' );
 
 /**
  * Filter function used to remove the tinymce emoji plugin.
  * 
  * @param array $plugins 
  * @return array Difference betwen the two arrays
  */
 function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
  return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
  return array();
  }
 }
 
 /**
  * Remove emoji CDN hostname from DNS prefetching hints.
  *
  * @param array $urls URLs to print for resource hints.
  * @param string $relation_type The relation type the URLs are printed for.
  * @return array Difference betwen the two arrays.
  */
 function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
  if ( 'dns-prefetch' == $relation_type ) {
  /** This filter is documented in wp-includes/formatting.php */
  $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
 
 $urls = array_diff( $urls, array( $emoji_svg_url ) );
  }
 
 return $urls;
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
  add_theme_support( 'post-formats', array( 'video', 'status' ) );
}
add_action( 'after_setup_theme', 'geeks_curiosity_use_post_format' );

// add post-formats to post_type 'page'
add_action('init', 'geeks_curiosity_use_post_format_init', 11);
function geeks_curiosity_use_post_format_init(){
    add_post_type_support( 'post', 'post-formats' );
    register_taxonomy_for_object_type( 'post_format', 'post' );
}

function geeks_curiosity_opengraph() {
  global $post;

  if(has_post_thumbnail($post->ID)) {
    $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');
    $img_src = $img_src[0];
  } else {
    $img_src = '';
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
  <meta property="og:image" content="<?php echo $img_src; ?>"/>

<?php
}
add_action('wp_head', 'geeks_curiosity_opengraph', 5);

function geeks_curiosity_twittertags(){
  global $post;

  if(has_post_thumbnail($post->ID)) {
    $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'twitter-card');
    $img_src = $img_src[0];
  } else {
    $img_src = '';
  }
  if($excerpt = $post->post_excerpt) {
    $excerpt = strip_tags($post->post_excerpt);
    $excerpt = str_replace("", "'", $excerpt);
  } else {
    $excerpt = get_bloginfo('description');
  }
  ?>
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@geeks_curiosity" />
  <meta name="twitter:title" content="<?php echo the_title(); ?>" />
  <meta name="twitter:description" content="<?php echo $excerpt; ?>" />
  <meta name="twitter:url" content="<?php echo the_permalink(); ?>" />
  <meta name="twitter:creator" content="@geeks_curiosity" />
  <!-- ration 800x418 / 1.91:1 -->
  <meta name="twitter:image" content="<?php echo $img_src; ?>" />
<?php
}
add_action('wp_head', 'geeks_curiosity_twittertags', 5);

/**
 * Ajouter une nouvelle entrée dans la REST API 
 * https://developer.wordpress.org/reference/functions/register_rest_field/
 * https://imranhsayed.medium.com/add-custom-field-to-wordpress-rest-api-35c63c6dfff4
 */
add_action( 'rest_api_init', 'gk_API_add_tags_infos' );
function gk_API_add_tags_infos() {
  register_rest_field(
  'post', 
  'tags_infos', //New Field Name in JSON RESPONSEs
  array(
      'get_callback'    => 'gk_API_get_tags_infos', // custom function name 
      'update_callback' => null,
      'schema'          => null,
      )
  );
}
function gk_API_get_tags_infos( $object, $field_name, $request ) {
  // grab all tags for this post
  $tags_objects = get_the_tags($object['id']);
  $tags_infos = [];
  // return an array of this posts' tags' names only
  foreach ($tags_objects as $tag) {
    $tags_infos[] = [
      "tag_name" => $tag->name,
      "tag_slug" => $tag->slug,

    ];
  }
  return $tags_infos;
};

add_action( 'rest_api_init', 'gk_API_add_tags_slugs' );
function gk_API_add_tags_slugs() {
  register_rest_field(
  'post', 
  'tags_slugs', //New Field Name in JSON RESPONSEs
  array(
      'get_callback'    => 'gk_API_get_tags_slugs', // custom function name 
      'update_callback' => null,
      'schema'          => null,
      )
  );
}
function gk_API_get_tags_slugs( $object, $field_name, $request ) {
  // grab all tags for this post
  $tags_objects = get_the_tags($object['id']);
  $tags_slugs = [];
  // return an array of this posts' tags' names only
  foreach ($tags_objects as $tag) {
    $tags_slugs[] = $tag->slug;
  }
  return $tags_slugs;
};

add_action( 'rest_api_init', 'gk_API_add_tags_names' );
function gk_API_add_tags_names() {
  register_rest_field(
  'post', 
  'tags_names', //New Field Name in JSON RESPONSEs
  array(
      'get_callback'    => 'gk_API_get_tags_names', // custom function name 
      'update_callback' => null,
      'schema'          => null,
      )
  );
}
function gk_API_get_tags_names( $object, $field_name, $request ) {
  // grab all tags for this post
  $tags_objects = get_the_tags($object['id']);
  $tags_names = [];
  // return an array of this posts' tags' names only
  foreach ($tags_objects as $tag) {
    $tags_names[] = $tag->name;
  }
  return $tags_names;
};




add_action( 'rest_api_init', 'gk_API_add_thumbnail_slug' );
function gk_API_add_thumbnail_slug() {
  register_rest_field(
  'post', 
  'thumbnail_slug', //New Field Name in JSON RESPONSEs
  array(
      'get_callback'    => 'gk_API_get_thumbnail_slug', // custom function name 
      'update_callback' => null,
      'schema'          => null,
      )
  );
}
function gk_API_get_thumbnail_slug( $object, $field_name, $request ) {
  // grab all tags for this post
  $slug = get_the_post_thumbnail_url($object['id']);
  return $slug;
};


/**
 * https://wordpress.stackexchange.com/questions/215985/rest-api-how-can-i-restrict-a-custom-post-type-to-only-be-accessible-by-authent
 * https://gist.github.com/danielbachhuber/8f92af4c6a8db784771c
 * https://developer.wordpress.org/rest-api/frequently-asked-questions/#require-authentication-for-all-requests
 */
add_filter( 'rest_authentication_errors', function( $result ) {
  if ( ! empty( $result ) ) {
      return $result;
  }
  // if ( ! is_user_logged_in() ) {

  // Avec JWT plugin
  // https://github.com/Tmeister/wp-api-jwt-auth/issues/53
  if (!is_user_logged_in() && $_SERVER['REQUEST_URI'] !== "/wp-json/jwt-auth/v1/token" && $_SERVER['REQUEST_URI'] !== "/wp-json/jwt-auth/v1/token/validate") {
    
      return new WP_Error( 'restx_logged_out', 'Désolé mais l\'accès à mon API est restreinte aux utilisateurs identifiés.', array( 'status' => 401 ) );
  }
  return $result;
});