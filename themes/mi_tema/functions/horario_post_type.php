<?php

// Register Custom Post Type
function horario_post_type() {

	$labels = array(
		'name'                  => _x( 'Horarios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Horario', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Horarios', 'text_domain' ),
		'name_admin_bar'        => __( 'Horarios', 'text_domain' ),
		'archives'              => __( 'Archivo de horario', 'text_domain' ),
		'attributes'            => __( 'Atributos de horario', 'text_domain' ),
		'parent_item_colon'     => __( 'Horario principal', 'text_domain' ),
		'all_items'             => __( 'Todos los horarios', 'text_domain' ),
		'add_new_item'          => __( 'Agregar un nueo horario', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo horario', 'text_domain' ),
		'edit_item'             => __( 'Editar horario', 'text_domain' ),
		'update_item'           => __( 'Actualizar horario', 'text_domain' ),
		'view_item'             => __( 'Ver horario', 'text_domain' ),
		'view_items'            => __( 'Ver horario', 'text_domain' ),
		'search_items'          => __( 'Ver horarios', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer como imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el horario', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este horario', 'text_domain' ),
		'items_list'            => __( 'Lista de horarios', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de horarios', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de horarios', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Horario', 'text_domain' ),
		'description'           => __( 'Post dedicado a los horarios', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'horario', $args );

}
add_action( 'init', 'horario_post_type', 0 );

?>