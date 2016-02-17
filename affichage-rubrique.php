<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php
// AFFICHAGE DE LA RUBRIQUE
/*récupère l'ID de la catégorie parente (rubrique) dans l'URL*/
$rubrique = $_GET['rub_id'] ;

/*
récupère les enfants de cette catégorie parente (rubrique)
ceux-ci sont triés dans une array
*/
$categories = get_categories("child_of=".$rubrique."");
/*foreach ($categories as $category) {
	//echo $term_id;
	echo '<div id="content-category">';
	//le sprintf definit ce qui apparait lorsque l'utilisateur passe la souris sur le lien
	echo'<div class="category-cadre"><p class="category-titre"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> - ('. $category->count . ')</p> ';
    //echo '<p class="category-description"> Description:'. $category->description . '</p>';
    echo '</div>';
    echo '</div>';

// Comment faire afficher le nombre de %posts de la catégories avec une variable selon "1 article" "x articleS" "Aucun article"
//comments_number('Pas de commentaire', 'Un commentaire', '% commentaires' );
// wp_count_terms( $taxonomy, $args );
}*/
foreach ($categories as $category) {
	$categoryID = $category->term_id;
 	if($categoryID%2){
    	echo '<div id="content-category">';
		//le sprintf definit ce qui apparait lorsque l'utilisateur passe la souris sur le lien
		echo'<div class="category-cadre-impair"><p class="category-titre"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> - ('. $category->count . ')</p> ';
	    //echo '<p class="category-description"> Description:'. $category->description . '</p>';
	    echo '</div>';
	    echo '</div>';
	}

	else{
    	echo '<div id="content-category">';

	    //le sprintf definit ce qui apparait lorsque l'utilisateur passe la souris sur le lien
		echo'<div class="category-cadre-pair"><p class="category-titre"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> - ('. $category->count . ')</p> ';
	    //echo '<p class="category-description"> Description:'. $category->description . '</p>';
	    echo '</div>';
	    echo '</div>';
	}
	// Comment faire afficher le nombre de %posts de la catégories avec une variable selon "1 article" "x articleS" "Aucun article"
	//comments_number('Pas de commentaire', 'Un commentaire', '% commentaires' );
	// wp_count_terms( $taxonomy, $args );
}
?>
<?php get_footer(); ?>
<!--<div class="page-footer"></div>--><!--footer de l'image de fond de page si besoin-->
</div><!--fermeture <div class="page" from header-->
