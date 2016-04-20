<div class="row post-format-video-latest">

  <?php if ( has_post_format( 'video' )) :?>


    <div class="one-third column" >

      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <div class="postmetadata">
        <?php the_time('j F Y') ?> - <?php //the_author() ?> | Cat&eacute;gorie: <?php //the_category(', ') ?> |
        <?php $comments = '<span class="dashicons dashicons-format-chat"></span>'; comments_popup_link('0'.$comments, '1' .$comments, '%'.$comments); ?>
      </div>

    <?php if ( has_post_thumbnail() ) { ?> <!-- dans la boucle-->
      <div class="post_img">
        <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
          <?php the_post_thumbnail(); ?>
          <span class="video-play-icon">
            <span class="dashicons dashicons-controls-play"></span>
          </span>
        </a>
      </div>
    <?php } ?>

  </div>


  <?php  endif; ?>
</div>
