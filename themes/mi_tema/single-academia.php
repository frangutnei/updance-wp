<?php get_header() ?>

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
						<p class="sede__direccion m-0"><?php the_field(direccion)?></p>
						<p class="sede__telefono m-0"><?php the_field(telefono)?></p>
						<p class="sede__horario m-0"></i><?php the_field(horario)?></p>
						<p class="sede__horario--sabado m-0"></i><?php the_field(horario_sabado)?></p>
						<p class="sede__horario--sabado m-0"></i><?php the_field(localizacion)?></p>
						<!-- <div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div> -->
					</div>
				</div>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede2'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede2)?></h3>
						<p class="sede__direccion m-0"><?php the_field(direccion2)?></p>
						<p class="sede__telefono m-0"><?php the_field(telefono2)?></p>
						<p class="sede__horario m-0"></i><?php the_field(horario2)?></p>
						<p class="sede__horario--sabado m-0"></i><?php the_field(horario_sabado2)?></p>
						<!-- <div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div> -->
					</div>
				</div>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede3'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede3)?></h3>
						<p class="sede__direccion m-0"><?php the_field(direccion3)?></p>
						<p class="sede__telefono m-0"><?php the_field(telefono3)?></p>
						<p class="sede__horario m-0"></i><?php the_field(horario3)?></p>
						<p class="sede__horario--sabado m-0"></i><?php the_field(horario_sabado3)?></p>
						<!-- <div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div> -->
					</div>
				</div>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede4'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede4)?></h3>
						<p class="sede__direccion m-0"><?php the_field(direccion4)?></p>
						<p class="sede__telefono m-0"><?php the_field(telefono4)?></p>
						<p class="sede__horario m-0"></i><?php the_field(horario4)?></p>
						<p class="sede__horario--sabado m-0"></i><?php the_field(horario_sabado4)?></p>
						<!-- <div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div> -->
					</div>
				</div>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede5'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede5)?></h3>
						<p class="sede__direccion m-0"><?php the_field(direccion5)?></p>
						<p class="sede__telefono m-0"><?php the_field(telefono5)?></p>
						<p class="sede__horario m-0"></i><?php the_field(horario5)?></p>
						<p class="sede__horario--sabado m-0"></i><?php the_field(horario_sabado5)?></p>
						<!-- <div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div> -->
					</div>
				</div>
				<div class="sedes_sede">
					<?php $image = get_field('imagen_sede6'); if( !empty( $image ) ): ?>
						<img class="sede__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="sede__info">
						<h3 class="sede__titulo"><?php the_field(nombre_sede6)?></h3>
						<p class="sede__direccion m-0"><?php the_field(direccion6)?></p>
						<p class="sede__telefono m-0"><?php the_field(telefono6)?></p>
						<p class="sede__horario m-0"></i><?php the_field(horario6)?></p>
						<p class="sede__horario--sabado m-0"></i><?php the_field(horario_sabado6)?></p>
						<!-- <div class="sede__boton">
							<a href="horario" class="sede__btn">HORARIO</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>

	<?php } ?>
<?php } else { ?>

<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?> 