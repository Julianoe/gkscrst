<!DOCTYPE html>
<html lang="fr">
<head>
  <title>
    <?php if ( is_404() ) : ?> <?php _e('Introuvable') ?>
      <?php elseif ( is_home() ) : ?> <?php bloginfo('description') ?>
      <?php //permet de n'avoir que le nom du post type dans les archives
      elseif ( is_post_type_archive() ) : post_type_archive_title(); ?>
      <?php else : ?><?php wp_title() ?>
    <?php endif ?>
    </title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- leave this for stats -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/> -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon"/>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>
  </head>

  <body>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <header class="header">
      <div class="banner">
        <a href="<?php bloginfo('url'); ?>">
          <h1 class="blog-title"><span>Geeks</span><br>Curiosity</h1>
          <img src="<?php bloginfo('template_url');?>/images/banner-white.png"/>
        </a>
      </div>
      <?php include(TEMPLATEPATH . '/nav_menu.php'); ?>
    </header> <!--fermeture du header class="header"-->
