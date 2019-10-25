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
					<!-- <img class="sede__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/pp_plaza_egaña.jpg" alt=""> -->
					<div class="sede__info">
						<h3 class="sede__titulo"></h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i></p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i></p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i></p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i></p> 
						<div class="sede__boton">							
							<a href="#" class="sede__btn">HORARIO</a>     
						</div>
					</div>
				</div>
				<!-- <div class="sedes_sede">
					<img class="sede__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/pp_maipu.jpg" alt="">
					<div class="sede__info">
						<h3 class="sede__titulo">Maipú</h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i>Av. Pajaritos 2624 / Esq. Av. Chile Maipú / Metro Plaza Maipú</p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i>2 2943 1655</p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i>Lun. A Vie: 12:15 A 15:00 - 16:00 A 21:00</p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i>Sáb: 10:00 A 14:30:30</p> 
						<div class="sede__boton">							
							<a href="#" class="sede__btn">HORARIO</a>     
						</div>
					</div>
				</div>
				<div class="sedes_sede">
					<img class="sede__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/pp_la_florida.jpg" alt="">
					<div class="sede__info">
						<h3 class="sede__titulo">La Florida</h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i>Av. Froilán Roa 580 / Local 18 La Florida / Metro Vicuña Mackenna</p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i>2 2755 4665</p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i>Lun. A Vie: 12:15 A 15:00 - 16:00 A 21:00</p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i>Sáb: 10:00 A 14:30</p> 
						<div class="sede__boton">							
							<a href="#" class="sede__btn">HORARIO</a>     
						</div>
					</div>
				</div>
				<div class="sedes_sede">
					<img class="sede__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/pp_viña.png" alt="">
					<div class="sede__info">
						<h3 class="sede__titulo">Viña del Mar</h3>
						<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i>14 Norte 1084 Esquina 4 Oriente Viña del Mar</p>
						<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i>32 2517 424</p>
						<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i></p>
						<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i></p> 
						<div class="sede__boton">							
							<a href="#" class="sede__btn">HORARIO</a>     
						</div>
					</div>
				</div>		 -->
			</div>
		</div>

	<?php } ?>
<?php } else { ?>

<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>