<?php

// Register Custom Post Type
function Clase_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clases', 'text_domain' ),
		'name_admin_bar'        => __( 'Clase', 'text_domain' ),
		'archives'              => __( 'Archivos del Clase', 'text_domain' ),
		'attributes'            => __( 'Atributos del Clase', 'text_domain' ),
		'parent_item_colon'     => __( 'Clase principal', 'text_domain' ),
		'all_items'             => __( 'Todos los Clases', 'text_domain' ),
		'add_new_item'          => __( 'Agregar un nuevo Clase', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Clase', 'text_domain' ),
		'edit_item'             => __( 'Editar Clase', 'text_domain' ),
		'update_item'           => __( 'Actualizar Clase', 'text_domain' ),
		'view_item'             => __( 'Ver Clase', 'text_domain' ),
		'view_items'            => __( 'Ver Clases', 'text_domain' ),
		'search_items'          => __( 'Buscar Clase', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen descatada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Clase', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este Clase', 'text_domain' ),
		'items_list'            => __( 'Lista de Clases', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de Clases', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de Clases', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'text_domain' ),
		'description'           => __( 'Post dedicado a los Clases', 'text_domain' ),
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
	register_post_type( 'Clase', $args );

}
add_action( 'init', 'Clase_post_type', 0 );

?>