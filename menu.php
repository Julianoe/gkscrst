<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) );
	function affiche_menu()
	{
		// tableaux contenant les liens d'acc�s et le contenu � afficher
		//$tab_menu_lien = array( "/", "?page_id=16&rub_id=5", "?page_id=19&rub_id=6", "?page_id=21&rub_id=23" );
		$images_path = site_url().'/wp-content/themes/GeeksCuriosity/images/';
		$tab_menu_lien = array(
			site_url(),
			site_url().'/videogame',
			site_url().'/cinema',
			/*site_url().'?cat=23'*/
		);


		$tab_menu_contenu = array(
			'<img src="'.$images_path.'accueil4.png" alt="image de l\'accueil"/>',
			'<img src="'.$images_path.'onglet-1.png" alt="image de l\'onglet 1"/>',
			'<img src="'.$images_path.'onglet-2.png" alt="image de l\'onglet 2"/>',
			/*'<img src="'.site_url().'"wp-content/themes/Geeks Curiosity/images/onglet-3.png" border="0"/>'*/
		);

		// informations sur la page
		$info = site_url().$_SERVER['REQUEST_URI'];
		$menu = '<div class="menu"> <ul>';
		//fait apparaitre le chemin <<OUTILS DEV>>
		//NE PAS SUPPRIMER : permet de faire des essais
		/*echo "<div class='essaicode'>";
		echo $info;
		echo "</div>";*/

		// boucle qui parcours les deux tableaux
		foreach($tab_menu_lien as $cle => $lien)
		// foreach($tab_menu_lien as $cle=>$lien)
		{
			// si le nom du fichier correspond � celui point� par l'indice, alors on l'active
			//edit : recherche l'URL de la page courante
			/*if( $info == $lien )$menu .= "<li><a href=\"" . $lien . "\"><div class=\"drapeau-active\"><div class=\"drapeau-hautactive\"><div class=\"contenuongletactive\"";
			//si le nom du fichier ne correspond on met l'onglet en mode normal
			else if($info != $lien ) $menu .= "<li><a href=\"" . $lien . "\"><div class=\"drapeau\"><div class=\"drapeau-haut\"><div class=\"contenuonglet\"";
			$menu .= ">" . $tab_menu_contenu[$cle] . "</div></div><div class=\"drapeau-bas\"</div></div></a></li>";*/

			if($info==$lien)$menu.='<li><a href="'.$lien.'"><div class="drapeau-active"><div class="drapeau-hautactive"><div class="contenuongletactive"';
			//si le nom du fichier ne correspond on met l'onglet en mode normal
			else if($info!= $lien)$menu.= '<li><a href="'.$lien.'"><div class="drapeau"><div class="drapeau-haut"><div class="contenuonglet"';
			$menu.='>'.$tab_menu_contenu[$cle].'</div></div><div class="drapeau-bas"></div></div></a></li>';
		}
		$menu.="</ul>\n</div>"; /*fermeture UL et div class="menu"*/
		// on renvoie le code xHTML
		return $menu;
	}
?>
