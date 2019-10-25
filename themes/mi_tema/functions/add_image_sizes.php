<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'sede'		=> __( 'Tamaño para imagenes de las sedes de las academias' ),
		'carousel'		=> __( 'Tamaño para imagenes del carousel' ),
		'noticias'	=> __( 'Tamaño de las fotos de blog noticias' ),
		'noticias_detalle'	=> __( 'Tamaño de las fotos de blog noticias' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'sede', 240, 240, false );
	add_image_size( 'carousel', 460, 400, true );
	add_image_size( 'noticias', 1100, 320, true );
	add_image_size( 'noticias_detalle', 1100, 450, true );

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
