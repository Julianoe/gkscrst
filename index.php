<?php get_header(); ?>
<div class="page">
	<div class="content">



<?php
		/////////////////////////////////////////
		// create a query with ONLY the video post format
		$videoformatquery = new WP_Query( array(
				'tax_query' => array(
						array(
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => array('post-format-video'),
								// 'operator' => 'IN' (default)
						)
				)
		) );?>

		<div class="row post-format-video-latest">
			<?php
			/*
			* Using the query to display only the posts with the post format video
			*/
			if ( $videoformatquery->have_posts() ) : while ( $videoformatquery->have_posts() ) : $videoformatquery->the_post();
				get_template_part('content', 'last-videos');
			// Close the loop
			endwhile; endif; ?>
		</div>
		<?php // Reset $post data to default query
		wp_reset_postdata();
		/////////////////////////////////////////?>
		<br/><br/>
		<hr>



	<?php if(have_posts()) :?>
	<?php while(have_posts()) : the_post();
		/*
		 * Include the format specific content template page
		 * Only video format is activated for this theme
		 * It is detailed in content-video.php
		 */
			get_template_part('content', get_post_format());

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
