<?php get_header() ?>
	
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<article class="mb-5 mt-5 container principal">
			<div class="text-center my-3">
				<p><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
				<h2><?php the_title() ?></h2>
				<?php the_post_thumbnail('noticias_detalle', array('class'=> 'w-100 h-auto my-4')); ?>
				<p><?php the_tags( '<span class="text-danger">#</span>', ' <span class="text-danger">#</span>', '' ); ?></p>
			</div>
			<div>
				<?php the_content() ?>
			</div>
		</article>
	<?php } ?>
<?php } else { ?>

<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>


<!-- 
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
			
			
			 -->