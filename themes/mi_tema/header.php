<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navigation navbar-light" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<a class="navigation__logo" href="<?php bloginfo('url') ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_solo.png" class="navigation__logo--img" alt=""> UpDance</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navigation__span"><i class="fas fa-bars navigation__hamburguer"></i></span>
		</button>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php get_template_part('_includes/nav', 'bootstrap4') ?>
		
			<li class="navigation__item">
				<a class="navigation__link--login" href="login">Login</a>
			</li>
		</div>
	</nav>