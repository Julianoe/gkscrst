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
		//fait appel au menu.php
		/*require_once("menu.php");
		$menu = affiche_menu();
		echo $menu;*/

		//ajout du menu
		$drapeaubefore = '<div class="drapeau"><div class="drapeau-haut"><div class="contenuonglet"><span>';
		$drapeauafter = '</span></div></div><div class="drapeau-bas"></div></div>';
		wp_nav_menu( array(
			'theme_location'  => '',
			'menu' => 'menu-principal',
			'container'       => 'div',
			'container_class' => 'menu',
			'container_id'    => '',
			'menu_class'      => NULL, /*ul*/
			'menu_id'         => NULL,
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '', /*avant le lien du li*/
			'after'           => '',
			'link_before'     => $drapeaubefore, /*avant le texte du lien*/
			'link_after'      => $drapeauafter,
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		) );
	?>


	<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/">
		<div>
			<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
			<!--<input type="submit" id="searchsubmit" value="" />-->
		</div>
	</form>

</div>
