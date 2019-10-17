<?php get_header() ?>

<h2 class="container contratar__titulo">Contratar Plan</h2>
		
		<div class="container filtrar">
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
		</div>

		<div class="contratar__planes container">
			<div class="row">
				<?php
					$arg = array(
						'post_type'		 => 'plan',
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
				<!-- <div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Regular Semestral</h5>
							<h6 class="card-subtitle mb-2">10 clases al mes</h6>
							<div>
								<a class="card-text">60 clases para usar durante 6 meses</a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for="">$237.000</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$3.950</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$39.500</label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Regular Trimestral</h5>
							<h6 class="card-subtitle mb-2">10 clases al mes</h6>
							<div>
								<a class="card-text">30 clases para usar durante 3 meses</a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for="">$138.000</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$4.600</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$46.000</label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Regular Mensual</h5>
							<h6 class="card-subtitle mb-2">10 clases al mes</h6>
							<div>
								<a class="card-text">10 clases para usar durante 1 mes</a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for="">$53.000</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$5.300</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$53.000</label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Súper Anual</h5>
							<h6 class="card-subtitle mb-2">15 clases al mes</h6>
							<div>
								<a class="card-text">120 clases para usar durante 12 meses</a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for=""> $390.000</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$3.250</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$32.500</label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Súper Semestral</h5>
							<h6 class="card-subtitle mb-2">15 clases al mes</h6>
							<div>
								<a class="card-text">60 clases para usar durante 6 meses</a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for="">$237.000</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$3.950</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$39.500</label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Súper Trimestral</h5>
							<h6 class="card-subtitle mb-2">15 clases al mes</h6>
							<div>
								<a class="card-text">30 clases para usar durante 3 meses</a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for="">$138.000</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$4.600</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$46.000</label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="plan col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Súper Mensual</h5>
							<h6 class="card-subtitle mb-2">15 clases al mes</h6>
							<div>
								<a class="card-text">10 clases para usar durante 1 mes</a>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<label for="">Total</label>
									<label for="">$53.000</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Clase</label>
									<label for="">$5.300</label>
								</li>
								<li class="list-group-item">
									<label for="">Valor Mensual</label>
									<label for="">$53.000</label>
								</li>
							</ul>
							<div class="plan__btn">
								<button type="button" class="btn btn__updance">Comprar</button>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>

<?php get_footer() ?>