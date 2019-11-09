<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array(
		'theme_location'	=> 'header-menu',
		'depth'				=> 2,
		'container'			=> false,
		'menu_class'		=> 'navbar-nav mr-auto navigation__list',
		'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
		'walker'			=> new WP_Bootstrap_Navwalker(), 
	) ); ?>
	<?php } ?>
	<?php if ( is_active_sidebar( 'menu-widget' ) ) { ?>
		<?php dynamic_sidebar( 'menu-widget' ); ?>			
<?php }; ?>
