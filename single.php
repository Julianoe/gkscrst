<?php get_header();  /* ouvrir header.php*/?>

<div id="page">
	<div id="content">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID();?>">
					<h1 class="single_title"><?php the_title(); ?></h1>
					<div class="light_separator"></div>
					<br/>
					<p class="postmetadata">
					 <!-- va permettre de donner des informations sur l'article en question
					 comme sa date , son auteur, le nombre de commentaires. Peut �tre plac� � la fin ou au d�but -->
							<?php the_time('j F Y') ?> par <?php the_author() ?> | 
							Cat&eacute;gorie: <?php the_category(', ') ?> 
					</p>

					<div class="post_content">
						<?php the_content(); ?>
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
			<div class="post"><p>D�sol�, aucun article ne correspond � vos crit�res.</p></div>
			
			
		<?php endif; ?>
		
	</div><!-- fermeture <div id="content"-->


<?php get_sidebar(); ?>

</div> <!--fermeture <div id="page"-->

<?php get_footer(); ?>
</html>