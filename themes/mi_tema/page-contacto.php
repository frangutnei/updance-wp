<?php get_header() ?>
	<?php the_post() ?>
	<?php get_template_part('_includes/main', 'section') ?>


	<div class="contacto container">
		<h1 class="contacto__titulo">Contáctanos</h1>
		<?php the_content(); ?>
		<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
		<?php dynamic_sidebar( 'contact-widget' ); ?>
		<?php }; ?>
	</div>
	
<?php get_footer() ?>