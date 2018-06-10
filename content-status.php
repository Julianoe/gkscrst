<div <?php post_class(); ?> id="post-<?php the_ID();?>">
  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
  <!-- <h2 class="dashicons-before dashicons-smiley"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> -->
  <div class="postmetadata">
    <?php the_time('j F Y') ?> - <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> |
    <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
  </div>

  <?php if ( has_post_thumbnail() ) { ?> <!-- dans la boucle-->
    <div class="post_img">
      <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
        <?php the_post_thumbnail(); ?>
      </a>
    </div>
  <?php } ?>

  <div class="post_content">
    <?php the_content( $more_link_text = null, $strip_teaser = false ); ?>

  </div>

  <div class="light_separator"></div>
</div>
