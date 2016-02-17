<?php get_header(); ?>
<div class="page">
	<div class="content">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID();?>">
					<h1 class="single_title"><?php the_title(); ?></h1>
					<div class="light_separator"></div>
					<div class="postmetadata">
					 <!-- va permettre de donner des informations sur l'article en question
					 comme sa date , son auteur, le nombre de commentaires. Peut �tre plac� � la fin ou au d�but -->
							<?php the_time('j F Y') ?> par <?php the_author() ?> |
							Cat&eacute;gorie: <?php the_category(', ') ?>
					</div>
					<div class="post_content">
						<?php the_content(); ?>
						<div class="light_separator"></div>
						<br/>
						<div class="fb-like" data-href="https://www.facebook.com/Geeks.Curiosity" data-send="true" data-show-faces="false"></div> <a class="twitter-follow-button" href="https://twitter.com/geeks_curiosity" data-show-count="true" data-lang="fr" data-size="large" data-show-screen-name="false">Suivre @geeks_curiosity</a>
					</div>

				</div>
			<?php endwhile; ?>
		<!-- appel aux articles pr�c�dents et suivants -->
		<!-- Il est possible de modifier la pr�sentation en mettant ce que l'on veut dans les parenth�ses-->
		<!--<div class="post_prev"><?php previous_post_link('%link') ?></div> <div class="post_next"><?php next_post_link('%link') ?></div>-->
		<br/>
<div class="light_separator"></div>
		<br/>
		<div class="comments-template">
			<?php comments_template(); ?>
		</div>
		<!-- pas d'article � cette URL -->
		<?php else : ?>
			<div class="post"><p>Désolé, aucun article ne correspond à vos critères.</p></div>
		<?php endif; ?>
	</div><!-- fermeture <div class="content"-->
<?php get_sidebar(); ?>
</div> <!--fermeture <div class="page"-->
<?php get_footer(); ?>
</body>
</html>
