<?php get_header() ?>

<div class="container academias">
	<h1 class="academias__titulo">Academias de UPDANCE</h1>

	<div class="academias__academia">
		<div class="academias__div row">
		<?php
			$arg = array(
				'post_type'		 => 'academia',
				'category_name'	 => '',
				'posts_per_page' => -1,
				'offset'		 => 0,
				'orderby'			 => 'title',
				'order' => 'ASC'
			);
		
			$get_arg = new WP_Query( $arg );
		
			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>

			<a href="<?php the_permalink(); ?>" class="col-md-4 academias__link"><?php the_post_thumbnail('academias', array('class' => 'academias__img')); ?></a>
			
			
			<?php } wp_reset_postdata();?>
		</div>
	</div>
</div>


<div class="container academias__movil">
	<h1 class="academias__titulo">Academias de UPDANCE</h1>

	<div class="academias__academia">
		<div class="academias__div row">
		<?php
			$arg = array(
				'post_type'		 => 'academia',
				'category_name'	 => '',
				'posts_per_page' => -1,
				'offset'		 => 0,
				'orderby'			 => 'title',
				'order' => 'ASC'
			);
		
			$get_arg = new WP_Query( $arg );
		
			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>

			<a href="<?php the_permalink(); ?>" class="col-md-4 academias__link"><?php the_post_thumbnail('academias', array('class' => 'academias__img-movil')); ?></a>
			
			
			<?php } wp_reset_postdata();?>
		</div>
	</div>
</div>

<?php get_footer() ?>