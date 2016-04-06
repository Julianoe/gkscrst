		<div class="headbar" id="headbar">

			<!-- inspired by Nariman Adam http://codepen.io/nariman_adam/pen/MwRJop -->
			<div id="toggle">
					<input type="checkbox" id="input-toggle" id="toggle">
					<span></span>
			</div>

			<nav class="logossocial">
				<ul class="mylogossocial">
					<li class="logofb logo-menu">
						<a title="Page Facebook Geek's Curiosity" href="https://www.facebook.com/Geeks.Curiosity" target="_blank">
								<img src="<?php bloginfo('template_url') ?>/images/fb.png" alt="Facebook"/><span>Facebook</span>
						</a>
					</li>
					<li class="logotw logo-menu">
						<a title="Compte Twitter du blog" href="https://twitter.com/geeks_curiosity" target="_blank">
								<img src="<?php bloginfo('template_url') ?>/images/tw.png" alt="Twitter"/><span>Twitter</span>
						</a>
					</li>
					<li class="logoyt logo-menu">
						<a title="Chaîne Youtube du blog" href="http://www.youtube.com/user/Frondlock" target="_blank">
								<img src="<?php bloginfo('template_url') ?>/images/yt.png" alt="Youtube"/><span>Youtube</span>
						</a>
					</li>
					<li class="logomail logo-menu">
						<a title="Me contacter" href="<?php bloginfo('siteurl'); ?>?page_id=85">
								<img src="<?php bloginfo('template_url') ?>/images/mail.png" alt="Contact"/><span>Contact</span>
						</a>
					</li>
					<li class="logogc logo-menu">
						<a title="Quelques infos" href="<?php bloginfo('siteurl'); ?>?page_id=86">
								<img src="<?php bloginfo('template_url') ?>/images/gc.png" alt="À propos"/><span>À propos</span>
						</a>
					</li>
				</ul>
			</nav>




				<?php /*ajout du menu*/ $drapeaubefore = '<div class="drapeau"><div class="drapeau-haut"><div class="contenuonglet"><span>';
				$drapeauafter = '</span></div></div><div class="drapeau-bas"></div></div>';
				wp_nav_menu( array(
					'theme_location'  => '',
					'menu' => 'menu-principal',
					'container'       => 'nav',
					'container_class' => 'menu menu-large',
					'container_id'    => '#menu-large',
					'menu_class'      => NULL, //ul
					'menu_id'         => NULL,
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '', //avant le lien du li
					'after'           => '',
					'link_before'     => $drapeaubefore, //avant le texte du lien
					'link_after'      => $drapeauafter,
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				) );

				wp_nav_menu( array(
					'theme_location'  => '',
					'menu' => 'menu-principal',
					'container'       => 'nav',
					'container_class' => 'menu menu-mobile',
					'container_id'    => 'menu-mobile',
					'menu_class'      => NULL,
					'menu_id'         => NULL,
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '', //avant le lien du li
					'after'           => '',
					'link_before'     => '<div class="contenuonglet"><span>', //avant le texte du lien
					'link_after'      => '</span></div>',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				) );
			?>


			<form method="get" class="searchform" action="<?php echo get_home_url(); ?>/"><span class="searchform-gauche"></span><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /><input class="searchform-bouton" type="submit" id="searchsubmit" value="" /></form>
			<div class="imgheadbar"></div>
		</div> <!--fermeture de la headbar-->
