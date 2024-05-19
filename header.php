<!DOCTYPE html>
<html lang="fr">
<head>
  <title>
    <?php if ( is_404() ) : ?> <?php _e('Introuvable') ?>
      <?php elseif ( is_home() ) : ?> <?php echo get_bloginfo('description') ?>
      <?php //permet de n'avoir que le nom du post type dans les archives
      elseif ( is_post_type_archive() ) : post_type_archive_title(); ?>
      <?php else : ?><?php wp_title() ?>
    <?php endif ?>
    </title>
    <meta http-equiv="Content-Type" content="<?php echo get_bloginfo('html_type'); ?>" charset="<?php echo get_bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="generator" content="WordPress <?php echo get_bloginfo('version'); ?>" />
    <!-- leave this for stats -->
    <!-- <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url'); ?>" type="text/css"/> -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo get_bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php echo get_bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php echo get_bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php echo get_bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php echo get_bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="banner">
        <a href="<?php echo get_bloginfo('url'); ?>">
          <h1 class="blog-title"><span>Geeks</span><br>Curiosity</h1>
          <img src="<?php echo get_bloginfo('template_url');?>/images/banner-white.png"/>
        </a>
      </div>
      <?php include(TEMPLATEPATH . '/nav_menu.php'); ?>
    </header> <!--fermeture du header class="header"-->
