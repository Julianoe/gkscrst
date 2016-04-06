<?php get_header(); ?>
<div class="page">
	<div class="content">
		<?php if(have_posts()) :?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID();?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="postmetadata">
						<!-- date and author -->
						<?php the_time('j F Y') ?> - <?php the_author_posts_link(); ?>
						<!-- displays the 'thematiques' if it has some -->
						<?php if (has_term( '', 'thematiques', '' )) : ?>
							<?php the_terms( $post->ID, 'thematiques', '| <span class="dashicons dashicons-playlist-video"></span> Thématiques : ', ', ', ' ' ); ?>
							<?php else : ?>
						<?php endif; ?>
						<?php if (has_term( '', 'category', '' )) : ?>
							<?php the_terms( $post->ID, 'category', ' | Catégories : ', ', ', ' ' ); ?>
							<?php else : ?>
						<?php endif; ?>

							| <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
					</div>
					<div class="post_content">
						<?php the_excerpt(); ?><?php edit_post_link('Editer', '<div class="button button-primary">', '</div>'); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<div class="post">
			<!--Erreur aucun resultat-->
				<div class="container">
					<h2>Aucun article trouv&eacute;. Essayer une autre recherche ?</h2>
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
		<?php endif; ?>
	</div><!-- fermeture <div class="content"-->
	<?php get_sidebar(); ?>
</div> <!--fermeture <div class="page"-->
<?php get_footer(); ?>
</body>
</html>
