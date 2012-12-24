<?php

	date_default_timezone_set("Europe/Paris");

	if( !function_exists( 'theme_pagination' ) ) {
	
	function theme_pagination()
	{
	
	global $wp_query, $wp_rewrite;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	
		$pagination = array(
			'base' => @add_query_arg('page','%#%'),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
	                'show_all' => false,
	                'end_size'     => 1,
	                'mid_size'     => 2,
			'type' => 'list',
			'next_text' => '»',
			'prev_text' => '«'
			);
	
		if( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	
		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array( 's' => str_replace( ' ' , '+', get_query_var( 's' ) ) );
		
		echo str_replace('page/1/','', paginate_links( $pagination ) );
	}	
	
}

register_post_type('realisations', array(
		'label'             => 'Réalisations',
		'add_new_item'      =>'Ajouter une réa',
		'edit_item'         =>'Modifier un réa',
		'new_item'          =>'Ajouter un réa',
		'view_item'         =>'Voir la réa',
		'singular_label'    => 'realisations',  
		'public'            => true,
		'show_ui'           => true,
		'capability_type'   => 'post',
		'hierarchical'      => false,
		'has_archive'       => true,
		'rewrite'           => array('slug' => 'realisations'),
		'supports'          => array('title', 'editor','custom-fields', 'author', 'excerpt', 'thumbnail'),
		'show_in_nav_menus' => true
	)	
	);
	register_taxonomy( "realisations_cat", array( "realisations" ), array("hierarchical" => true, "label" => "Realisations catégories", "singular_label" => "Realisations catégories", "rewrite" => true, "slug" => 'realisations_categories' ) );
	
register_post_type('labs', array(
		'label'             => 'Labo',
		'add_new_item'      =>'Ajouter une labs',
		'edit_item'         =>'Modifier un labs',
		'new_item'          =>'Ajouter un labs',
		'view_item'         =>'Voir la labs',
		'singular_label'    => 'labs',  
		'public'            => true,
		'show_ui'           => true,
		'capability_type'   => 'post',
		'hierarchical'      => false,
		'has_archive'       => true,
		'rewrite'           => array('slug' => 'labs'),
		'supports'          => array('title', 'editor','custom-fields', 'author', 'excerpt', 'thumbnail'),
		'show_in_nav_menus' => true
	)	
	);
	register_taxonomy( "labs_cat", array( "labs" ), array("hierarchical" => true, "label" => "labs catégories", "singular_label" => "labs catégories", "rewrite" => true, "slug" => 'labs_categories' ) );
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// AJOUT METAS BOX
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	