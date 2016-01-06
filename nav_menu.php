<div class="headbar">

<div class="imgheadbar"></div>

	<!--<img class="imgheadbar" src="./images/bandeau.png" />-->

	<div class="logossocial">

				<!--<div  class="logofb"><a href="https://www.facebook.com/Geeks.Curiosity" target="_blank"><img src="./images/fb.png" alt="logo de facebook"/></a></div>-->

				<div  class="logofb"><a class="logo_social" href="https://www.facebook.com/Geeks.Curiosity" target="_blank"></a></div>
				<div  class="logotw"><a class="logo_social" href="https://twitter.com/geeks_curiosity" target="_blank"></a></div>
				<div  class="logoyt"><a class="logo_social" href="http://www.youtube.com/user/Frondlock" target="_blank"></a></div>
				<div  class="logomail"><a class="logo_social" href="<?php bloginfo('siteurl'); ?>?page_id=85"></a></div>
				<!--<div  class="logorss"><img src="./images/rss.png"/></div>-->
				<div  class="logogc"><a class="logo_social" href="<?php bloginfo('siteurl'); ?>?page_id=86"></a></div>
	</div>

			<!--<div  class="logofb"><a class="logo_social" href="https://www.facebook.com/Geeks.Curiosity" target="_blank"></a></div>
				<div  class="logotw"><a class="logo_social" href="https://twitter.com/geeks_curiosity" target="_blank"></a></div>
				<div  class="logoyt"><a class="logo_social" href="http://www.youtube.com/user/Frondlock" target="_blank"></a></div>
				<div  class="logomail"><a class="logo_social" href="<?php bloginfo('siteurl'); ?>?page_id=85"></a></div>
				<div  class="logorss"></div>
				<div  class="logogc"><a class="logo_social" href="<?php bloginfo('siteurl'); ?>?page_id=86"></a></div>-->


	<?php
		require_once("menu.php");
		$menu = affiche_menu();
		echo $menu;
	?>		



		

	

		

	<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/">

		<div>

			<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />

			<!--<input type="submit" id="searchsubmit" value="" />-->

		</div>

	</form>



</div>