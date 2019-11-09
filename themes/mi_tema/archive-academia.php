<?php get_header() ?>
	
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>		
		<div class="academia container">
			<h1 class="academia__titulo"><?php the_title() ?></h1>	
			<h2 class="sedes_titulo">Sedes</h2>

			<div class="sedes">
			
				
			</div>
		</div>

	<?php } ?>
<?php } else { ?>

<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>