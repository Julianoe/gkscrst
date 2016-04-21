    <div class="six columns video-post-container" >
        <div class="video-title">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        </div>

        <div class="video-block">
          <div class="postmetadata">
            <?php the_time('j F Y') ?> - <?php //the_author() ?>
            <span class="comments-link"><?php $comments = '<span class="dashicons dashicons-format-chat"></span>'; comments_popup_link('0'.$comments, '1' .$comments, '%'.$comments); ?></span>
          </div>

        <?php if ( has_post_thumbnail() ) { ?> <!-- dans la boucle-->
          <?php $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'small', true); ?>
          <div class="post_img">
            <a href="<?php the_permalink(); ?>" class="cover" title="<?php the_title();?>" style="background-image:url('<?php echo $thumb_url[0]; ?>');">
              <div class="video-play-icon">
                <span class="dashicons dashicons-controls-play"></span>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
  </div>
