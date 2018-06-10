<?php get_header(); ?>
<div class="page">
	<div class="content">



<?php
		if(is_home()) :
			/////////////////////////////////////////
			// create a query with ONLY the video post format
			$videoformatquery = new WP_Query( array(
					'tax_query' => array(
							array(
									'taxonomy' => 'post_format',
									'field' => 'slug',
									'terms' => array('post-format-video'),

									// 'operator' => 'IN' (default)
							),

					),
					//limit the number of posts
					'posts_per_page' => 2
			) );?>
			<div class="">
				<!-- <h1 style="text-align:center;margin-bottom:0;">Les dernières vidéos</h1> -->
				<div class="row post-format-video-latest">
					<?php
					/*
					* Using the query to display only the posts with the post format video
					*/
					if ( $videoformatquery->have_posts() ) : while ( $videoformatquery->have_posts() ) : $videoformatquery->the_post();
						get_template_part('content', 'last-videos');
					// Close the loop
					endwhile; endif; ?>

					<!-- <div class="one column" ><a class="column-link" href="<?php echo $format_link ?>"><span>...</span></a></div> -->

				</div>
				<div class="row aligncenter">
					<?php $format_link = get_post_format_link('video'); ?>
					<a class="button button-primary" href="<?php echo $format_link ?>">Toutes les vidéos</a>
				</div>
			</div>

			<?php // Reset $post data to default query
			wp_reset_postdata();
			/////////////////////////////////////////?>
		<?php endif; // END if is_home?>


<?php
		$videocounter = 0;
	?>
	<?php if(have_posts()) :?>

	<?php while(have_posts()) : the_post();
		/*
		 * Include the format specific content template page
		 * Only video format is activated for this theme
		 * It is detailed in content-video.php
		 */
		 	if( has_post_format('video') ){

				if( $videocounter < 2){
					$videocounter = $videocounter + 1;
				} else {
					
					get_template_part('content', get_post_format());

				}

			} elseif( get_post_format( 'status' ) ){

				get_template_part('content', get_post_format());


			} else{

				get_template_part('content', get_post_format());

			}

	 endwhile; ?>




		<div class="navigation">
			<?php posts_nav_link('  ','<div class="page_next"></div>','<div class="page_prev"></div>'); ?>
		</div>


		<!--Erreur : cette page n'existe pas ou plus -->
	<?php else : ?>
		<div class="post">
			<div class="post_content">
				<h2>Page introuvable</h2>
				<p>D&eacute;sol&eacute; mais ce que vous cherchez est introuvable ou n'&eacute;xiste pas.</p>
				<!-- //include (TEMPLATEPATH . "/searchform.php");-->
				<br/>
			</div>
		</div>



	<?php endif; ?>
	</div><!-- fermeture <div class="content"-->
	<?php get_sidebar(); ?>
</div> <!--fermeture <div class="page"-->
<?php get_footer(); ?>
</body>
</html>
