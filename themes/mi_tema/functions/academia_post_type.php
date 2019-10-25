<?php

// Register Custom Post Type
function academia_post_type() {

	$labels = array(
		'name'                  => _x( 'Academias', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Academia', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Academias', 'text_domain' ),
		'name_admin_bar'        => __( 'Academias', 'text_domain' ),
		'archives'              => __( 'Archivo de la academia', 'text_domain' ),
		'attributes'            => __( 'Atributos de la academa', 'text_domain' ),
		'parent_item_colon'     => __( 'Academia principal', 'text_domain' ),
		'all_items'             => __( 'Todas las academias', 'text_domain' ),
		'add_new_item'          => __( 'Agregar una nueva academia', 'text_domain' ),
		'add_new'               => __( 'Anadir nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva academia', 'text_domain' ),
		'edit_item'             => __( 'Editar academia', 'text_domain' ),
		'update_item'           => __( 'Actualizar academia', 'text_domain' ),
		'view_item'             => __( 'Ver academia', 'text_domain' ),
		'view_items'            => __( 'Ver academias', 'text_domain' ),
		'search_items'          => __( 'Buscar academia', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer como imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Inserta en la academia', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en l academia', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a esta academia', 'text_domain' ),
		'items_list'            => __( 'Lista de academias', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de acaademias', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de platos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Academia', 'text_domain' ),
		'description'           => __( 'Post dedicados a las academias', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'academia', $args );

}
add_action( 'init', 'academia_post_type', 0 );

?>
