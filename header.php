<!DOCTYPE html>
<html>
<head>
  <!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
  <!--<head profile="http://gmpg.org/xfn/11">
  <html xmlns="http://www.w3.org/1999/xhtml">-->
  <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &#124; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &#124; <?php bloginfo('description') ?><?php else : ?> &#124; <?php wp_title() ?><?php endif ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- leave this for stats -->
    <!--<link rel="stylesheet" href="./wp-content/themes/Geeks Curiosity/style.css" type="text/css"/>-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
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
    <!--<div class="page">--> <!--Cette div est d�cplac�e hors du header afin de rendre ce dernier totalement ind�pendant de la partie CONTENT/FOOTER-->
    <div class="header">
      <a href="<?php bloginfo('url'); ?>"><div class="banner"></div></a>
      <!--informations du blog-->
      <!--<div>
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <p class="description"><?php bloginfo('description'); ?></p>
    </div>-->
    <div>
      <?php
      /*utilise le syst�me de menu de wordpress*/
      //wp_nav_menu( array( 'theme_location' => 'primary' ) );
      //include(TEMPLATEPATH . '/searchform.php');
      /*utilise un template perso de menu*/
      include(TEMPLATEPATH . '/nav_menu.php');
      //include(TEMPLATEPATH . '/searchform.php');
      ?>
    </div>
  </div> <!--fermeture du div class="header"-->
