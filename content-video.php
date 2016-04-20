<div <?php post_class(); ?> id="post-<?php the_ID();?>">
  <h2><span class="dashicons dashicons-video-alt3"></span> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
  <div class="postmetadata">
    <!-- donne des informations sur l'article : sa date , son auteur, le nombre de commentaires. Peut �tre plac� � la fin ou au d�but -->
    <?php the_time('j F Y') ?> - <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> |
    <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
  </div>
  <div class="light_separator"></div>
</div>
