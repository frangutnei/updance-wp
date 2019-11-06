<?php

// Register Custom Post Type
function clase_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clases', 'text_domain' ),
		'name_admin_bar'        => __( 'Clases', 'text_domain' ),
		'archives'              => __( 'Archivo de la clase', 'text_domain' ),
		'attributes'            => __( 'Atributos de la clase', 'text_domain' ),
		'parent_item_colon'     => __( 'Clase principal', 'text_domain' ),
		'all_items'             => __( 'Todas las clases', 'text_domain' ),
		'add_new_item'          => __( 'Agregar una nueva clase', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nueva clase', 'text_domain' ),
		'edit_item'             => __( 'Editar clase', 'text_domain' ),
		'update_item'           => __( 'Actualizar clase', 'text_domain' ),
		'view_item'             => __( 'Ver clase', 'text_domain' ),
		'view_items'            => __( 'Ver clases', 'text_domain' ),
		'search_items'          => __( 'Buscar clase', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en la clase', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a esta clase', 'text_domain' ),
		'items_list'            => __( 'Lista de clases', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de clases', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de clases', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'text_domain' ),
		'description'           => __( 'Post dedicado a las clases', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'trackbacks' ),
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
	register_post_type( 'clase', $args );

}
add_action( 'init', 'clase_post_type', 0 );

?>