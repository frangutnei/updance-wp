<nav class="navbar navbar-expand-lg navigation navbar-light" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<a class="navigation__logo" href="inicio"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_solo.png" class="navigation__logo--img" alt=""> UpDance</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navigation__span"><i class="fas fa-bars navigation__hamburguer"></i></span>
	</button>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
		<li class="navigation__item">
			<a class="navigation__link--login" href="login">Login</a>
		</li>
	</div>
</nav>
