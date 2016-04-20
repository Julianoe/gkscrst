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
