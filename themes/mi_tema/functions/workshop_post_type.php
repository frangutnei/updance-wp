<?php

// Register Custom Post Type
function Workshop_post_type() {

	$labels = array(
		'name'                  => _x( 'Workshops', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Workshop', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Workshops', 'text_domain' ),
		'name_admin_bar'        => __( 'Workshop', 'text_domain' ),
		'archives'              => __( 'Archivos del Workshop', 'text_domain' ),
		'attributes'            => __( 'Atributos del Workshop', 'text_domain' ),
		'parent_item_colon'     => __( 'Workshop principal', 'text_domain' ),
		'all_items'             => __( 'Todos los Workshops', 'text_domain' ),
		'add_new_item'          => __( 'Agregar un nuevo Workshop', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Workshop', 'text_domain' ),
		'edit_item'             => __( 'Editar Workshop', 'text_domain' ),
		'update_item'           => __( 'Actualizar Workshop', 'text_domain' ),
		'view_item'             => __( 'Ver Workshop', 'text_domain' ),
		'view_items'            => __( 'Ver Workshops', 'text_domain' ),
		'search_items'          => __( 'Buscar Workshop', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen descatada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Workshop', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este Workshop', 'text_domain' ),
		'items_list'            => __( 'Lista de Workshops', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de Workshops', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de Workshops', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Workshop', 'text_domain' ),
		'description'           => __( 'Post dedicado a los Workshops', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Workshop', $args );

}
add_action( 'init', 'Workshop_post_type', 0 );

?>