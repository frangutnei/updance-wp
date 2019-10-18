<?php get_header() ?>

<h1 class="container contratar__titulo">Comprar Clase</h1>
		
		<!-- <div class="container filtrar">
			<form class="filtrar__region" action="">
				<select name="" id="" class="form-control">
					<option value="">Seleccione Región</option>
					<option value="">Metropolitana</option>
					<option value="">Arica</option>
					<option value="">Tarapaca</option>
					<option value="">Antofagasta</option>
					<option value="">Atacama</option>
					<option value="">Coquimbo</option>
					<option value="">Valparaiso</option>
					<option value="">O'Higgins</option>
					<option value="">Maule</option>
					<option value="">Ñuble</option>
					<option value="">Biobio</option>
					<option value="">Araucanía</option>
					<option value="">Los Ríos</option>
					<option value="">Los Lagos</option>
					<option value="">Aysen</option>
					<option value="">Magallanes</option>
				</select>
			</form>
			<form class="filtrar__academia" action="">
				<select class="form-control" name="" id="">
					<option value="">Seleccionar Academia</option>
					<option value="">Power Peraltas</option>
					<option value="">Cony Azúa</option>
					<option value="">Valero</option>
					<option value="">Rodrigo Díaz</option>
					<option value="">Wolfpack</option>
					<option value="">Pulso</option>
				</select>
			</form>
			<form class="filtrar__comuna" action="">
				<input  class="form-control" type="text" name="comuna" id="comuna" placeholder="Comuna">
			</form>
			<button type="button" class="btn filtrar__btn">Buscar</button>
		</div> -->

		<div class="contratar__planes container">
			<div class="row">
				<?php
					$arg = array(
						'post_type'		 => 'clase',
						'posts_per_page' => -1,
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
				
						
				<div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title mb-0"><?php the_title(); ?></h5>
							<h5 class="card-title"><?php the_field(academia)?></h5>
							<h6 class="card-subtitle mb-2"><?php the_field(cantidad_de_clases_por_mes)?></h6>
							<div>
								<a class="card-text"><?php the_field(duracion_del_plan)?></a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for=""> $<?php the_field(valor_total)?></label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$<?php the_field(valor_de_cada_clase)?></label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$<?php the_field(valor_mensual_del_plan)?></label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div>
				
					<?php } wp_reset_postdata();
				?>
			</div>
		</div>

<?php get_footer() ?>