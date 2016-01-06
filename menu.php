<?php
function affiche_menu() 
{
	// tableaux contenant les liens d'accès et le contenu à afficher
	//$tab_menu_lien = array( "/", "?page_id=16&rub_id=5", "?page_id=19&rub_id=6", "?page_id=21&rub_id=23" );
	$images_path = site_url().'/wp-content/themes/GeeksCuriosity/images/';
	$tab_menu_lien = array(
//version locale
/*'/wordpress/',
'/wordpress/?cat=5',
'/wordpress/?cat=6',
'/wordpress/?cat=23');*/
	/*ici l'url doit être le chemin complet sur l'hébergeur.*/
	/*Si possible faire en sorte que l'url soit récupérée et ajoutée seulement à la partie '?cat= x' pour plus de simplicité en cas de changement de nom, etc*/

//version en ligne
site_url(),
//site_url().'?cat=5',
site_url().'/videogame',
site_url().'/cinema',
/*site_url().'?cat=23'*/);


	$tab_menu_contenu = array( 
'<img src="'.$images_path.'accueil4.png" alt="image de l\'accueil"/>',
'<img src="'.$images_path.'onglet-1.png" alt="image de l\'onglet 1"/>',
'<img src="'.$images_path.'onglet-2.png" alt="image de l\'onglet 2"/>',
/*'<img src="'.site_url().'"wp-content/themes/Geeks Curiosity/images/onglet-3.png" border="0"/>'*/);

	// informations sur la page
	$info = site_url().$_SERVER['REQUEST_URI'];
	$menu = '<div id="menu"> <ul>';
//fait apparaitre le chemin <<OUTILS DEV>>
//NE PAS SUPPRIMER : permet de faire des essais
	/*echo "<div class='essaicode'>";
	echo $info;
	echo "</div>";*/

	// boucle qui parcours les deux tableaux
	foreach($tab_menu_lien as $cle => $lien)
	// foreach($tab_menu_lien as $cle=>$lien)
	{		
		// si le nom du fichier correspond à celui pointé par l'indice, alors on l'active
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
	
	$menu.="</ul>\n</div>"; /*fermeture UL et div ID="MENU"*/
		
	// on renvoie le code xHTML
	return $menu;
}

?>