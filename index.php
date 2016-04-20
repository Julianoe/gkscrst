<?php get_header(); ?>
<div class="page">
	<div class="content">





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
