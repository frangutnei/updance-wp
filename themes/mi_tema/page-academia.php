<?php get_header() ?>

<!-- Carousel -->
<?php get_template_part('_includes/carousel') ?>
		
<!-- Cajas -->
<?php get_template_part('_includes/cajas') ?>
	
<div class="academia container">
	<!-- <h1 class="academia__titulo">Power Peralta Dance Studio</h1>     -->
	
	<div class="sedes">
		<h2 class="sedes_titulo">Sedes</h2>
	
		<div class="sedes_sede">
			<img class="sede__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/pp_apoquindo.jpg" alt="">
			<div class="sede__info">
				<h3 class="sede__titulo">Apoquindo</h3>
				<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i>Pasaje Doctora Cora Meyers 6141 Las Condes / Metro Manquehue</p>
				<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i>2 2710 8336</p>
				<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i>Lun. a Vie: 12:15 A 21:00</p>
				<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i>Sáb: 10:00 A 15:30</p> 
				<div class="sede__boton">							
					<a href="horario" class="sede__btn">HORARIO</a>     
				</div>
			</div>
		</div>
		<div class="sedes_sede">
			<img class="sede__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/pp_plaza_egaña.jpg" alt="">
			<div class="sede__info">
				<h3 class="sede__titulo">Plaza Egaña</h3>
				<p class="sede__direccion m-0"><i class="fas fa-map-marker-alt mr-2"></i>Av. Ossa 345 / Local 3B La Reina/ Metro Plaza Egaña</p>
				<p class="sede__telefono m-0"><i class="fas fa-phone mr-2"></i>2 2246 6364</p>
				<p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i>Lun. a Vie: 12:15 A 15:00 - 16:00 A 21:00</p>
				<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i>Sáb: 10:00 A 16:30</p> 
				<div class="sede__boton">							
					<a href="#" class="sede__btn">HORARIO</a>     
				</div>
			</div>
		</div>
		<div class="sedes_sede">
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
				<!-- <p class="sede__horario m-0"><i class="fas fa-calendar-alt mr-2"></i></p>
				<p class="sede__horario--sabado m-0"><i class="fas fa-calendar-alt mr-2"></i></p>  -->
				<div class="sede__boton">							
					<a href="#" class="sede__btn">HORARIO</a>     
				</div>
			</div>
		</div>		
	</div>
</div>

<?php get_footer() ?>