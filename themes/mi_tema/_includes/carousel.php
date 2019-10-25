<div>	
	<div id="carouselMovilIndicators" class="carousel slide carousel__movil" data-ride="carousel">
		<div class="carousel-inner">
			<?php $arg = array(
				'post_type' => 'academia',
				'posts_per_page' => -1
			);
				$get_arg = new WP_Query( $arg );
				while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>
			<div class="carousel-item <?php if ( $get_arg->current_post == 0 ) : ?>active<?php endif; ?>">
			<a href="<?php the_permalink(); ?>" class="p-0 carousel__img"><?php the_post_thumbnail('carousel_movil'); ?></a>
			</div>
			<?php } wp_reset_postdata(); ?>
		</div>
		
		<a class="carousel-control-prev" href="#carouselMovilIndicators" role="button" data-slide="prev">
			<span class="carousel__flecha" aria-hidden="true"><i class="fas fa-chevron-left fa-2x"></i></span>
			<span class="sr-only">Previous</span>
		</a>
	    <a class="carousel-control-next" href="#carouselMovilIndicators" role="button" data-slide="next">
			<span class="carousel__flecha" aria-hidden="true"><i class="fas fa-chevron-right fa-2x"></i></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div id="carouselExampleSlidesOnly" class="carousel slide carousel__grande" data-ride="carousel">
		<div class="carousel-inner">
		
			<div class="carousel-item active">
				<div class="row">
					<?php $arg = array(
						'post_type' => 'academia',
						'posts_per_page' => 3,
						'order' => 'asc',
					);
						$get_arg = new WP_Query( $arg );
						while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
					<a href="<?php the_permalink(); ?>" class="col-4 p-0 carousel__img"><?php the_post_thumbnail('carousel'); ?></a>
					<?php } wp_reset_postdata(); ?>
				</div>
			</div>
			
			<div class="carousel-item">
				<div class="row">
					<?php $arg = array(
						'post_type'		 => 'academia',
						'category_name'	 => '',
						'posts_per_page' => 3,
						'offset'		 => 3,
						'order' => 'asc',
					);
					
						$get_arg = new WP_Query( $arg );					
						while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>									
					<a href="<?php the_permalink(); ?>" class="col-4 p-0 carousel__img"><?php the_post_thumbnail('carousel'); ?></a>				
					<?php } wp_reset_postdata();?>
				</div>
			</div>
			
			<div class="carousel-item">
				<div class="row">
					<?php $arg = array(
						'post_type'		 => 'academia',
						'posts_per_page' => 3,
						'offset'		 => 6,
						'order' => 'asc',
					);
					
						$get_arg = new WP_Query( $arg );				
						while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
									
					<a href="<?php the_permalink(); ?>" class="col-4 p-0 carousel__img"><?php the_post_thumbnail('carousel'); ?></a>				
					<?php } wp_reset_postdata();?>
				</div>
			</div>
			
			<!-- <div class="carousel-item">
				<div class="row">
					<?php $arg = array(
						'post_type'		 => 'academia',
						'posts_per_page' => 3,
						'offset'		 => 9,
						'order' => 'asc',
					);
					
						$get_arg = new WP_Query( $arg );					
						while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
										
					<a href="<?php the_permalink(); ?>" class="col-4 p-0 carousel__img"><?php the_post_thumbnail('carousel'); ?></a>					
					<?php } wp_reset_postdata();?>
				</div>
			</div> -->
			
			<!-- <div class="carousel-item">
				<div class="row">
					<?php $arg = array(
						'post_type'		 => 'academia',
						'posts_per_page' => 3,
						'offset'		 => 12,
						'order' => 'asc',
					);
					
						$get_arg = new WP_Query( $arg );					
						while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
										
					<a href="<?php the_permalink(); ?>" class="col-4 p-0 carousel__img"><?php the_post_thumbnail('carousel'); ?></a>					
					<?php } wp_reset_postdata();?>
				</div>
			</div> -->
			
			<!-- <div class="carousel-item">
				<div class="row">
					<?php $arg = array(
						'post_type'		 => 'academia',
						'posts_per_page' => 15,
						'offset'		 => 9,
						'order' => 'asc',
					);
					
						$get_arg = new WP_Query( $arg );					
						while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
										
					<a href="<?php the_permalink(); ?>" class="col-4 p-0 carousel__img"><?php the_post_thumbnail('carousel'); ?></a>					
					<?php } wp_reset_postdata();?>
				</div>
			</div> -->
			
			<a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
				<span class="carousel__flecha" aria-hidden="true"><i class="fas fa-chevron-left fa-2x"></i></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
			<span class="carousel__flecha" aria-hidden="true"><i class="fas fa-chevron-right fa-2x"></i></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
