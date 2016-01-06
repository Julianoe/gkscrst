<?php get_header();  /* ouvrir header.php*/?>
<div id="page">
	<div id="content">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID();?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

					<div class="post_content">
						<?php the_content(); ?>
					</div>
					
				</div>
			<?php endwhile; ?>
		
			<!-- permet de modifier directement cette page -->
			<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
			
			<?php else : ?>
			<!-- erreur pas de page trouv�e � cette url -->
			<h2>Oooopppsss...</h2>
			<p>D�sol�, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
			
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		
		<?php endif; ?>
		
	</div><!-- fermeture <div id="content"-->
<!--</div>--><!--fermeture <div id="all-middle>-->

<?php get_sidebar(); ?>


</div>--> <!--fermeture <div id="page"-->
<?php get_footer(); ?>
</body>
</html>