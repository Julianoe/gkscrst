    <div class="six columns video-post-container" >
        <div class="video-title">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        </div>

        <div class="video-block">
          <div class="postmetadata">
            <span class="postmetada-left" style="float:left;">🖿 <?php the_category(', ') ?> </span><span class="postmetada-right"><?php the_time('j F') ?> <?php //the_author() ?><span class="comments-link">
              <?php $comment = '<span aria-label=" commentaire" style="color: transparent; text-shadow: 0 0 0 white;">🗨️</span>'; ?>
              <?php $comments = '<span aria-label=" commentaires">🗨️</span>'; ?>
              <?php comments_popup_link( '', '1' . $comment, '% ' . $comments); ?></span></span>
          </div>

        <?php if ( has_post_thumbnail() ) { ?> <!-- dans la boucle-->
          <?php $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'small', true); ?>
          <div class="post_img">
            <a href="<?php the_permalink(); ?>" class="cover" title="<?php the_title();?>" style="background-image:url('<?php echo $thumb_url[0]; ?>');">
              <div class="video-play-icon">
                <span aria-label="Lire la page de la vidéo" style="font-size:4rem; line-height:1;">▸</span>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
  </div>
