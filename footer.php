<div class="footer">
	<p>
		Copyright &#169; 2016 <strong><?php get_bloginfo('name'); ?></strong>
		<br />
		Blog propuls&eacute; par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <strong>Julianoe</strong>
		<br />
		<!--<a href="feed:<?php get_bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php get_bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.-->
		<!--<?php echo get_num_queries(); ?> requetes. <?php timer_stop(1); ?> secondes.-->
	</p>
</div>

<!--ajout d'un fichier javascript du theme-->
<script type="text/javascript" src="<?php get_bloginfo('template_url') ?>/js/main.js"></script>

<?php wp_footer(); ?>
