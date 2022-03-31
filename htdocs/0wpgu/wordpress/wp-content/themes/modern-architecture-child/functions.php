<?php

/** activation theme */
add_action('wp_enqueue_scripts','theme_enqueue_styles');

function theme_enqueue_styles(){
    wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css' );
}

?>


<?php

/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Voyages', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Voyages', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Voyages'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Voyages'),
		'view_item'           => __( 'Voir les Voyages'),
		'add_new_item'        => __( 'Ajouter une nouvelle Voyages'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Voyages'),
		'update_item'         => __( 'Modifier la Voyages'),
		'search_items'        => __( 'Rechercher un Voyages'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Voyages'),
		'description'         => __( 'Tous sur Voyages'),
		'labels'              => $labels,
        'menu_icon'           => 'dashicons-admin-site-alt',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'voyages'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'voyages', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );

     















//On crée 3 taxonomies personnalisées: Année, Réalisateurs et Catégories de série.

function wpm_add_taxonomies() {
	
	// Taxonomie Année

	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_duree = array(
		'name'              			=> _x( 'duree', 'taxonomy general name'),
		'singular_name'     			=> _x( 'duree', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher une duree'),
		'all_items'        				=> __( 'Toutes les duree'),
		'edit_item'         			=> __( 'Editer la duree'),
		'update_item'       			=> __( 'Mettre à jour l duree'),
		'add_new_item'     				=> __( 'Ajouter une nouvelle duree'),
		'new_item_name'     			=> __( 'Valeur de la nouvelle duree'),
		'menu_name'         => __( 'Duree'),
	);

	$args_duree = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => true,
		'labels'            => $labels_duree,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'duree' ),
	);

	register_taxonomy( 'duree', 'voyages', $args_duree );

	// Taxonomie Réalisateurs
	
	$labels_themes = array(
		'name'                       => _x( 'themes', 'taxonomy general name'),
		'singular_name'              => _x( 'themes', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher un themes'),
		'popular_items'              => __( 'themes populaires'),
		'all_items'                  => __( 'Tous les themes'),
		'edit_item'                  => __( 'Editer un themes'),
		'update_item'                => __( 'Mettre à jour un themes'),
		'add_new_item'               => __( 'Ajouter un nouveau themes'),
		'new_item_name'              => __( 'Nom du nouveau themes'),
		'separate_items_with_commas' => __( 'Séparer les themes avec une virgule'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer un themes'),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisés'),
		'not_found'                  => __( 'Pas de themes trouvés'),
		'menu_name'                  => __( 'themes'),
	);

	$args_themes = array(
		'hierarchical'          => false,
		'labels'                => $labels_themes,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'themes' ),
	);

	register_taxonomy( 'themes', 'voyages', $args_themes );
	
	// Catégorie de série

	$labels_prix = array(
		'name'                       => _x( 'prix', 'taxonomy general name'),
		'singular_name'              => _x( 'prix', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une prix'),
		'popular_items'              => __( 'prix populaires'),
		'all_items'                  => __( 'Toutes les prix'),
		'edit_item'                  => __( 'Editer une prix'),
		'update_item'                => __( 'Mettre à jour une prix'),
		'add_new_item'               => __( 'Ajouter une nouvelle prix'),
		'new_item_name'              => __( 'Nom de la nouvelle prix'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une prix'),
		'choose_from_most_used'      => __( 'Choisir parmi les prix les plus utilisées'),
		'not_found'                  => __( 'Pas de prix trouvées'),
		'menu_name'                  => __( 'prix'),
	);

	$args_prix = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => true,
		'labels'                => $labels_prix,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'prix' ),
	);

	register_taxonomy( 'prix', 'voyages', $args_prix );
}

add_action( 'init', 'wpm_add_taxonomies', 0 );

?>