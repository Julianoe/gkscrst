<!-- <form method="get" id="searchform-oops" action="<?php echo get_home_url(); ?>/">
	<div>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	</div>
</form> -->
<form method="get" style="padding-top:20px;padding-left:0;margin:0;position:relative;float:left;" class="searchform" action="<?php echo get_home_url(); ?>/">
	<span class="searchform-gauche"></span>
	<input type="text" style="width:100%; margin:0;padding:0;" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input class="searchform-bouton"  type="submit" id="searchsubmit" value="" />
</form>
