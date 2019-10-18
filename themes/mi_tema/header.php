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

	<?php get_template_part('_includes/nav', 'bootstrap4') ?>

	<!-- <header class="header">
		<nav class="navbar navbar-expand-lg navigation">
			<a class="navigation__logo" href="inicio"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_solo.png" class="navigation__logo--img" alt=""> UpDance</a>
			<form class="form-inline my-2 my-lg-0 buscador">
				<input class="form-control buscador__barra" type="search" placeholder="Buscar categoría" aria-label="Search">
				<button class="btn my-sm-0 buscador__boton" type="submit"><i class="fas fa-search"></i></button>
			</form>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon navigation__span"><i class="fas fa-bars navigation__hamburguer"></i></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto navigation__list">
					<li class="navigation__item">
						<form class="form-inline my-2 my-lg-0 buscador__movil">
							<input class="form-control buscador__barra" type="search" placeholder="Buscar categoría" aria-label="Search">
							<button class="btn my-sm-0 buscador__boton" type="submit"><i class="fas fa-search"></i></button>
						</form>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="contacto">Contacto</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="aparecer">Aparecer en UpDance</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="noticias">Noticias</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="descarga">Descarga</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link--login" href="login">Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</header> -->