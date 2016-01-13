<div class="sidebar">

  <ul>
    <!--VERSION2-->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

    <!--module des cat�gories-->
    <?php wp_list_categories('title_li=<h2>Categories</h2>'); ?>
    <!--module des pages-->
    <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
    <!--module SOCIAL-->
    <!--flux twitter-->
    <li>
    <h2>Social</h2>
    <a class="twitter-timeline" href="https://twitter.com/geeks_curiosity" data-widget-id="333594546342608896">Tweets de @geeks_curiosity</a>
    <script>
      ! function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
          p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
          js = d.createElement(s);
          js.id = id;
          js.src = p + "://platform.twitter.com/widgets.js";
          fjs.parentNode.insertBefore(js, fjs);
        }
      }(document, "script", "twitter-wjs");
    </script>
    </li>
    <!--module sites amis-->
    <?php get_links_list(); ?>
    <!--module des archives-->
    <li>
      <h2>Archives</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li>
    <?php endif; ?>
  </ul>
  <ul>
    <li>
      <h2>Connexion</h2>
      <ul><a href="<?php site_url(); ?>/wp-login.php">S'identifier</a></ul>
      <ul><a href="<?php site_url(); ?>/wp-login.php?action=register">Nous rejoindre</a></ul>
    </li>
  </ul>
</div>
<!--fermeture de la sidebar-->
