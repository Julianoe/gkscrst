<div class="footer">
	<p>
		Copyright &#169; <?php print(date(Y)); ?> <strong><?php bloginfo('name'); ?></strong>
		<br />
		Blog propuls&eacute; par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <strong>Julianoe</strong>
		<br />
		<!--<a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.-->
		<!--<?php echo get_num_queries(); ?> requetes. <?php timer_stop(1); ?> secondes.-->
	</p>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40860403-1', 'geeks-curiosity.net');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>