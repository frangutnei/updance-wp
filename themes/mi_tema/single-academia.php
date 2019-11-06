<?php get_header() ?>


<!-- Carousel -->
<?php get_template_part('_includes/carousel') ?>
		
<!-- Cajas -->
<?php get_template_part('_includes/cajas') ?>
	
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<div class="academia container">
			<h1 class="academia__titulo"><?php the_title() ?></h1>	
			<h2 class="sedes_titulo">Sedes</h2>
			<div class="sedes">
			<div class="sedes_sede">
					<?php $image = get_field('imagen_sede'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede)?></h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i><?php the_field(direccion)?></p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i><?php the_field(telefono)?></p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario)?></p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario_sabado)?></p>
						<div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } else { ?>

				
<?php } wp_reset_query(); ?>
<?php get_footer() ?>			