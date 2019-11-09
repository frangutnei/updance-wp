<?php get_header() ?>

<h1 class="horario__titulo">Horarios de las Academias</h1>
<div class="container tabla__div">
	<table class="table table-hover tabla">
		<thead>
			<tr>
				<th class="tabla__academia">Academia</th>
				<th class="tabla__profesor">Profesor(a)</th>
				<th class="tabla__estilo">Estilo</th>
				<th class="tabla__horario">Día y hora</th>
				<th class="tabla__boton"></th>
			</tr>
		</thead>
		<tbody>
      <?php
        $arg = array(
          'post_type'		 => 'horario',
          'category_name'	 => '',
          'posts_per_page' => -1,
          'offset'		 => 0,
          'paged'			 => $paged
        );
      
        $get_arg = new WP_Query( $arg );
      
        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>     
          
        <tr>
          <td><?php the_field(academia)?></td>
          <td><?php the_field(profesor)?></td>
          <td><?php the_field(estilo)?></td>
          <td><?php the_field(dia_y_hora)?></td>
          <td>
            <button type="button" class="btn tabla__btn">Reservar</button>
          </td>
        </tr>
      
        <?php } wp_reset_postdata();
      ?>
		</tbody>
	</table>
 </div>
<?php get_footer() ?> 