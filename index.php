<?php get_header(); ?>
<div class="page">
	<div class="content">
	<?php if(have_posts()) :?>
	<?php while(have_posts()) : the_post(); ?>

		<?php if ( has_post_format( 'video' )) :?>
			<?php get_template_part('content', get_post_format()); ?>
		<?php else : ?>


		<div <?php post_class(); ?> id="post-<?php the_ID();?>">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="postmetadata">
				<!-- donne des informations sur l'article : sa date , son auteur, le nombre de commentaires. Peut �tre plac� � la fin ou au d�but -->
				<?php the_time('j F Y') ?> - <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> |
				<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
			</div>
			<!--Afficher la premi�re image utilis�e dans le post-->
				<!--<div class="post_img">
				<?php
					//require_once("post_img.php");
					//echo $attachements;
				?>-->
			<!--Image � la Une (thumbnail)-->
			<?php if ( has_post_thumbnail() ) { ?> <!-- dans la boucle-->
			<div class="post_img"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
			<?php the_post_thumbnail(); ?>
			</a></div>
			<?php } ?>
			<!--afficher un extrait de l'article (en page d'accueil)-->
			<div class="post_content">
				<?php the_excerpt(); ?>
			</div>
			<!--lien pour afficher l'article complet-->
			<div class="post_link"><strong>&raquo;</strong>&nbsp;<a href="<?php the_permalink(); ?>" title="Lire la suite"> <?php _e('Lire la suite')?></a></div>
			<br/><br/> <!--espace entre deux articles-->
			<!--<div class="post_separator"></div>--><!--s�parateur-->
			<div class="light_separator"></div>
		</div>
		<?php endif; ?>
	<?php endwhile; ?>
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
