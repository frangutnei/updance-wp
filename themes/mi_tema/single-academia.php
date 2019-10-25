<?php get_header() ?>
	
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>		
		<div class="academia container">
			<h1 class="academia__titulo"><?php the_title() ?></h1>	
			<h2 class="sedes_titulo">Sedes</h2>

			<div class="sedes">
			<?php
				$arg = array(
					'post_type'		 => 'academia',
					'posts_per_page' => -1,
					'offset'		 => 0,
					'post__not_in'	 => array($post->ID),
					'paged'			 => $paged
				);
			
				$get_arg = new WP_Query( $arg );
			
				while ( $get_arg->have_posts() ) {
					$get_arg->the_post();
				?>
			
					<!-- Content -->
			
				<?php } wp_reset_postdata();
			?>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede1'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede1)?></h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i><?php the_field(direccion1)?></p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i><?php the_field(telefono1)?></p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario1)?></p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario_sabado1)?></p>
						<div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div>
					</div>
				</div>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede2'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede2)?></h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i><?php the_field(direccion2)?></p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i><?php the_field(telefono2)?></p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario2)?></p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario_sabado2)?></p>
						<div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div>
					</div>
				</div>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede3'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede3)?></h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i><?php the_field(direccion3)?></p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i><?php the_field(telefono3)?></p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario3)?></p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i><?php the_field(horario_sabado3)?></p>
						<div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>
<?php } else { ?>

<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>