<?php get_header(); ?>
<div class="page">
	<div class="content">
		<?php if(have_posts()) :?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID();?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="postmetadata">
					 <!-- donne des informations sur l'article : sa date , son auteur, le nombre de commentaires. Peut �tre plac� � la fin ou au d�but -->
							<?php the_time('j F Y') ?> - <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> |
							<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
					</div>
					<div class="post_content">
						<?php the_excerpt(); ?>
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
